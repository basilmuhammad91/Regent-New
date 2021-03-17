<?php

include('connect.php');
include('header.php');

$role = $_SESSION['role'];

if($role !== 'Admin' && $role !== 'Employee')
{
	echo "<script>window.location.href='index.php';</script>";
}

if(isset($_POST['add_agreement']))
{
    $user_id = $_SESSION['user_id'];
    $passenger_id = @$_POST['fetch_passenger_id'];
    $agreements_contract = $_POST['agreements_contract'];
    $agreements_salary = $_POST['agreements_salary'];
    $agreements_permission_number = $_POST['agreements_permission_number'];
    $agreements_permission_date = $_POST['agreements_permission_date'];
    $nominee_full_name = $_POST['nominee_full_name'];
    $nominee_age = $_POST['nominee_age'];
    $nominee_relation = $_POST['nominee_relation'];
    $nominee_cnic = $_POST['nominee_cnic'];
    $nominee_address = $_POST['nominee_address'];
    $current_date_submission = date("Y/m/d");
    $type = 'regents';

    if($passenger_id != '')
    {
        $query = mysqli_query($con, "INSERT INTO `agreement_details`(`user_id`,`passenger_id`, `agreements_contract`, `agreements_salary`, `agreements_permission_number`, `agreements_permission_date`, `nominee_full_name`, `nominee_age`, `nominee_relation`, `nominee_cnic`, `nominee_address`, `current_date_submission`, `type`) VALUES (
           '$user_id', '$passenger_id', '$agreements_contract', '$agreements_salary', '$agreements_permission_number', '$agreements_permission_date', '$nominee_full_name', '$nominee_age', '$nominee_relation', '$nominee_cnic', '$nominee_address', '$current_date_submission', '$type'
          )") or die(mysqli_error($con));

      if($query>0)
      {
          // echo "<script>window.location.href='Regent-Entry-Agreement-Nominee-Detail.php';</script>";
        $query2 = mysqli_query($con, "select * from agreement_details order by agreement_id desc limit 1");
        $std=mysqli_fetch_array($query2);
        echo "<script>window.location.href='Protector.php?agreement_id=".$std[0]."';</script>";
      }
      else
      {
          echo "<script>alert('Error !');</script>";
      }
    }
    else
    {
      echo "<script>alert('Correct passport no is mandatory !')</script>";
    }

}

// DELETE WORK FOR AGREEMENTS
if(isset($_GET['delete_id']))
{
  $id = $_GET['delete_id'];

  
  //AUTHENTICATION
  $check_query = mysqli_query($con, "select * from agreement_details where agreement_id = '$id'");
  $std = mysqli_fetch_array($check_query);

    if(@$std['user_id'] !== $_SESSION['user_id'])
    {
        header('location: index.php');
    }
    
  $query = mysqli_query($con, "delete from agreement_details where agreement_id = '$id'");
  if($query)
  {
    echo "<script>window.location.href='Regent-Entry-Agreement-Nominee-Detail.php';</script>";
  }

}

//EDIT WORK
if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    $query = mysqli_query($con, "select * from agreement_details where agreement_id = '$id'");   
    $std = mysqli_fetch_array($query);

    //AUTHENTICATION
    if(@$std['user_id'] !== $_SESSION['user_id'] && $role !== "Admin")
    {
        header('location: index.php');
    }
}

// UPDATE WORK
if(isset($_POST['update_agreement']))
{
    $agreement_id = $_POST['agreement_id'];
    $user_id = $_SESSION['user_id'];
    $agreements_contract = $_POST['agreements_contract'];
    $agreements_salary = $_POST['agreements_salary'];
    $agreements_permission_number = $_POST['agreements_permission_number'];
    $agreements_permission_date = $_POST['agreements_permission_date'];
    $nominee_full_name = $_POST['nominee_full_name'];
    $nominee_age = $_POST['nominee_age'];
    $nominee_relation = $_POST['nominee_relation'];
    $nominee_cnic = $_POST['nominee_cnic'];
    $nominee_address = $_POST['nominee_address'];

    $query = mysqli_query($con, "
        UPDATE `agreement_details` SET `user_id`='$user_id', `agreements_contract`='$agreements_contract',`agreements_salary`='$agreements_salary',`agreements_permission_number`='$agreements_permission_number',`agreements_permission_date`='$agreements_permission_date',`nominee_full_name`='$nominee_full_name',`nominee_age`='$nominee_age',`nominee_relation`='$nominee_relation',`nominee_cnic`='$nominee_cnic',`nominee_address`='$nominee_address' WHERE agreement_id = '$agreement_id';
        ") or die(mysqli_error($con));

    if($query)
    {
        echo "<script>window.location.href='Protector.php?agreement_id=".$agreement_id."';</script>";
    }
    else
    {
        echo "<script>alert('Error');</script>";
    }

}

//SEARCH NOMINEE
if(isset($_POST['search_nominee']))
{
    $date_from = date("Y/m/d", strtotime($_POST['date_from']));
    $date_to = date("Y/m/d", strtotime($_POST['date_to']));

    $search_query = mysqli_query($con, "
SELECT * FROM agreement_details WHERE current_date_submission BETWEEN '$date_from' AND '$date_to'
      ");

}

?>
		
      <section class="container-fluid ">
        <section class="container-fluid">
        <form action="" class="">
            <section class="row">

                <section class="col-xl-2">
                    <span>Passport No.</span>
                    <input type="text" id="passport_no" name="passport_no" class="form-control input-box" placeholder="Enter Passport No." maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <span>E No.</span>
                    <input type="text" class="form-control input-box" placeholder="Enter E No." maxlength="15"/>
                </section>

            </section>
        </form>
        </section>
     
        <br>

<form method="post" action="#">
  <section class="container-fluid ">
    <h5>Agreements And Permission No.</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-2 mt-2">
                    <input type="hidden" name="agreement_id" value="<?php echo @$std[0]?>">
                    <div id="showAll"></div>
                    <input value="<?php echo @$std['agreements_contract'] ?>" name="agreements_contract" type="text" class="mt-0 form-control input-box" placeholder="Contract" required maxlength="10"/>

                </section>

                <section class="col-xl-2 mt-2">
                    <input value="<?php echo @$std['agreements_salary'] ?>" name="agreements_salary" type="number" class="mt-0 form-control input-box" placeholder="Salary" required maxlength="10"/>

                </section>

                <section class="col-xl-2 mt-2">
                    
                    <input value="<?php echo @$std['agreements_permission_number'] ?>" name="agreements_permission_number" type="text" class="mt-0 form-control input-box" required placeholder="Permission No." maxlength="10"/>

                </section>

                <section class="col-xl-3">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 10px; font-size: 12px;">Permission Date</p></section>

                        <section class="col-9 mt-2">
                            
                            <input value="<?php echo @$std['agreements_permission_date'] ?>" name="agreements_permission_date" type="date" class="mt-0 form-control input-box" required style="font-size: 13px;" placeholder="Visa Date"/>
                        </section>
                    </section>
                </section>

                <section class="col-xl-3"></section>

            </section>
    </section>

  </section>

  <hr>

  <section class="container-fluid ">
      <h5>Nominee Details</h5>


      <section class="container-fluid">
              <section class="row">

                  <section class="col-xl-3">
                      
                      <input value="<?php echo @$std['nominee_full_name'] ?>" name="nominee_full_name" type="text" class="mt-0 form-control input-box" required placeholder="Nominee Full Name" maxlength="15"/>
                  </section>

                  <section class="col-xl-2">
                      <input value="<?php echo @$std['nominee_age'] ?>" name="nominee_age" type="number" class=" mt-0 form-control input-box" required placeholder="Nominee Age In Years" maxlength="2"/>
                  </section>

                 

                  <section class="col-xl-2">
                      
                      <select  required name="nominee_relation" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                  <option>Select Relation</option>
                                  <option <?php if(@$std['nominee_relation'] == "Father" ){echo "selected";}?> value="Father">Father</option>
                                  <option <?php if(@$std['nominee_relation'] == "Mother" ){echo "selected";}?> value="Mother">Mother</option>
                                  <option <?php if(@$std['nominee_relation'] == "Sister" ){echo "selected";}?> value="Sister">Sister</option>
                                  <option <?php if(@$std['nominee_relation'] == "Brother" ){echo "selected";}?> value="Brother">Brother</option>
                                  <option <?php if(@$std['nominee_relation'] == "Wife" ){echo "selected";}?> value="Wife">Wife</option>
                                  <option <?php if(@$std['nominee_relation'] == "Son" ){echo "selected";}?> value="Son">Son</option>
                                  <option <?php if(@$std['nominee_relation'] == "Daughter" ){echo "selected";}?> value="Daughter">Daughter</option>
                              </select>

                  </section>


                  <section class="col-xl-2">
                      
                      <input  required value="<?php echo @$std['nominee_cnic'] ?>" name="nominee_cnic" type="text" class="mt-0 form-control input-box" placeholder="Nominee CNIC No." maxlength="15"/>
                  </section>

                 

                  <section class="col-xl-3">
                       <input required value="<?php echo @$std['nominee_address'] ?>" name="nominee_address" type="text" class="mt-0 form-control input-box" placeholder="Address"/>
                  </section>


                  

              </section>
      </section>

      <section class="container">
          <section class="row" style="align-items: center;">
              <section class="col-5 m-auto text-center">
                    
                    <?php
                    if(isset($_GET['edit_id']))
                    {
?>
<input type="submit" name="update_agreement" id="add_agreement" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Update & Print Protector Form" />
<?php
                    }
                    else
                    {
?>
<input type="submit" disabled="true" name="add_agreement" id="add_agreement" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print Protector Form" />
<?php
                    }
                    ?>
              </section>
          </section>
      </section>
      

  </section>
</form>

<br>
<hr>



<br><br>
 


<section class="container-fluid">
   
<!-- ============= -->
	<form action="#" method="post">
   <section class="row" style="align-items: center;">
    <section class="col-md-2">
      <span >From</span>
      <input id="date_from" name="date_from" type="date" class="form-control input-box" />
    </section>
    <section class="col-md-2">
      <span >To</span>
      <input id="date_to" name="date_to" type="date" class="form-control input-box" />
    </section>

      <section class="col-md-2">
        <span></span>
        <input type="submit" name="search_nominee" value="Search" class="btn btn-primary mt-4">
      </section>
    </section> 
  </form>


<br>

<section class="container-fluid text-center">
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Sample Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Import Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Export Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Print" />
</section>

<br>

<section class="container-fluid">

            <table class="table table-responsive  mb-5  " style="padding-bottom:130px">
              
                <thead>
                    <tr>
                      <th scope="col">S. No</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Barcode</th>
                      <th scope="col">Contract</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Permission_No</th>
                      <th scope="col">Permission_Date</th>
                      <th scope="col">Nominee-Name</th>
                      <th scope="col">Nominee_Age</th>
                      <th scope="col">Relation</th>
                      <th scope="col">Nominee_CNIC</th>
                      <th scope="col">Address</th>
                    </tr>
                  
                    
                  </thead>
                  <tbody>
                   
        
                   
<?php

if(isset($_POST['search_nominee']))
{
$count =1;
                  while ($row=mysqli_fetch_array($search_query)) {
                    ?>
                    <tr>
                     <th scope="row"><?php echo $count ?></th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                              <?php
                              if($row['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                              {
                                ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Agreement-Nominee-Detail.php?edit_id=<?php echo $row[0] ?>" class="text-dark p-2">Edit</a><br>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Agreement-Nominee-Detail.php?delete_id=<?php echo $row[0] ?>"  class="text-dark p-2">Delete</a><br>
                                <?php
                              }
                              ?>
                                                
                                                <a style="font-size: 13px; font-weight: bold;" href="protector.php?agreement_id=<?php echo $row[0] ?>" class="btn text-light bg-warning p-1 ">Protector</a> <br>
                                                <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Protector</a>
                             </div>
                        </div>
                </td>
                     <td><?php echo "barcode" ?></td>
                     <td><?php echo $row['agreements_contract'] ?></td>
                     <td><?php echo $row['agreements_salary'] ?></td>
                     <td><?php echo $row['agreements_permission_number'] ?></td>
                     <td><?php echo $row['agreements_permission_date'] ?></td>
                     <td><?php echo $row['nominee_full_name'] ?></td>
                     <td><?php echo $row['nominee_age'] ?></td>
                     <td><?php echo $row['nominee_relation'] ?></td>
                     <td><?php echo $row['nominee_cnic'] ?></td>
                     <td><?php echo $row['nominee_address'] ?></td>
             
                </tr>
                    <?php
                    $count++;
                  }
}
else
{
  $query = mysqli_query($con, "
select * from agreement_details
                    ") or die(mysqli_error($con));
$count =1;
                  while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                     <th scope="row"><?php echo $count ?></th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                              <?php
                              if($row['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                              {
                                ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Agreement-Nominee-Detail.php?edit_id=<?php echo $row[0] ?>" class="text-dark p-2">Edit</a><br>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Agreement-Nominee-Detail.php?delete_id=<?php echo $row[0] ?>"  class="text-dark p-2">Delete</a><br>
                                <?php
                              }
                              ?>
                                                
                                                <a style="font-size: 13px; font-weight: bold;" href="protector.php?agreement_id=<?php echo $row[0] ?>" class="btn text-light bg-warning p-1 ">Protector</a> <br>
                                                <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Protector</a>
                             </div>
                        </div>
                </td>
                     <td><?php echo "barcode" ?></td>
                     <td><?php echo $row['agreements_contract'] ?></td>
                     <td><?php echo $row['agreements_salary'] ?></td>
                     <td><?php echo $row['agreements_permission_number'] ?></td>
                     <td><?php echo $row['agreements_permission_date'] ?></td>
                     <td><?php echo $row['nominee_full_name'] ?></td>
                     <td><?php echo $row['nominee_age'] ?></td>
                     <td><?php echo $row['nominee_relation'] ?></td>
                     <td><?php echo $row['nominee_cnic'] ?></td>
                     <td><?php echo $row['nominee_address'] ?></td>
             
                </tr>
                    <?php
                    $count++;
                  }
}
      
?>
      </tbody>
</table>
        


   

</section>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done Permission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <span >Permission Date</span>
			<input  name="" type="date" class="form-control input-box" />

        <span >Permission Number</span>
			<input name="" type="text" class="form-control input-box" />
            <br>

			<input name="" type="file" class="form-control " style="border:1px solid transparent" />
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>







</body>
</html>
<script >
	$(".hijri-date-input").hijriDatePicker();
</script>

<script>
	$(document).ready(function(){
		$('.showhide1').on('click', function(){
			$('.main1').toggle(300);
		});
        $('#showhide2').on('click', function(){
			$('#main2').toggle(300);
		});
	});
</script>


<script src="js/jquery-fab-button.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#passport_no').on('keyup', function(){
      var passport_no = $('#passport_no').val();

    if(passport_no!='')
    {
      $.ajax({
        url: 'fetchpassportno.php',
          method: 'post',
          data: {"search": passport_no},
          dataType: "text",
          success: function(data)
          {
            $('#showAll').html(data);
            $("#add_agreement").prop('disabled', false);
          },
          error: function(error)
          {
            $("#add_agreement").prop('disabled', true);
            $("#showAll").html("");
          }
        });
    }
    else
    {
      $("#add_agreement").prop('disabled', true);
      $("#showAll").html("");
    }

    });

  });
</script>
