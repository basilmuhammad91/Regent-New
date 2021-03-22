<?php

include('header.php');
include('connect.php');

if(isset($_POST['submit']))
{
    $user_id = $_SESSION['user_id'];
    $agency_id = $_POST['agency_id'];
    $visa_file_no = $_POST['visa_file_no'];
    $visa_no = $_POST['visa_no'];
    $visa_id_no = $_POST['visa_id_no'];
    $visa_sponsor_name = $_POST['visa_sponsor_name'];
    $visa_date = $_POST['visa_date'];
    $visa_profession_id = $_POST['visa_profession_id'];
    $visa_profession_urdu_id = $_POST['visa_profession_urdu_id'];
    $visa_price_as_per_agency = $_POST['visa_price_as_per_agency'];
    $visa_price_as_per_regent = $_POST['visa_price_as_per_regent'];
    $passenger_name = $_POST['passenger_name'];
    $passenger_father_name = $_POST['passenger_father_name'];
    $passenger_eno = $_POST['passenger_eno'];
    $passenger_passport_no = $_POST['passenger_passport_no'];
    $passenger_dob = $_POST['passenger_dob'];
    $passenger_name_urdu = $_POST['passenger_name_urdu'];
    $passenger_father_name_urdu = $_POST['passenger_father_name_urdu'];
    $passenger_date_of_issue = $_POST['passenger_date_of_issue'];
    $passenger_date_of_expiry = $_POST['passenger_date_of_expiry'];
    $passenger_submit_date = $_POST['passenger_submit_date'];
    $passenger_cnic = $_POST['passenger_cnic'];
    $submitted_to = $_POST['submitted_to'];
    $visa_status_id = $_POST['visa_status_id'];
    $visa_courier_date = $_POST['visa_courier_date'];
    $visa_courier_name = $_POST['visa_courier_name'];
    $visa_courier_no = $_POST['visa_courier_no'];
    $remarks = $_POST['remarks'];
    $current_date_submission = date("Y/m/d");
    $type = 'cases';

    $query = mysqli_query($con, "
        INSERT INTO `cases`(`user_id`, `agency_id`, `visa_file_no`, `visa_no`, `visa_id_no`, `visa_sponsor_name`, `visa_date`, `visa_profession_id`, `visa_profession_urdu_id`, `visa_price_as_per_agency`, `visa_price_as_per_regent`, `passenger_name`, `passenger_father_name`, `passenger_eno`, `passenger_passport_no`, `passenger_dob`, `passenger_name_urdu`, `passenger_father_name_urdu`, `passenger_date_of_issue`, `passenger_date_of_expiry`, `passenger_submit_date`, `passenger_cnic`, `submitted_to`, `visa_status_id`, `visa_courier_date`, `visa_courier_name`, `visa_courier_no`, `remarks`, `current_date_submission`, `type`) VALUES (

            '$user_id', '$agency_id', '$visa_file_no', '$visa_no', '$visa_id_no', '$visa_sponsor_name', '$visa_date', '$visa_profession_id', '$visa_profession_urdu_id', '$visa_price_as_per_agency', '$visa_price_as_per_regent', '$passenger_name', '$passenger_father_name', '$passenger_eno', '$passenger_passport_no', '$passenger_dob', '$passenger_name_urdu', '$passenger_father_name_urdu', '$passenger_date_of_issue', '$passenger_date_of_expiry', '$passenger_submit_date', '$passenger_cnic', '$submitted_to', '$visa_status_id', '$visa_courier_date', '$visa_courier_name', '$visa_courier_no', '$remarks', '$current_date_submission', '$type'

        )
        ") or die(mysqli_error($con));

        if($query>0)
        {
          $query2 = mysqli_query($con, "SELECT * FROM cases ORDER BY case_id DESC LIMIT 1");
          if($query2)
          {
            $row2=mysqli_fetch_array($query2);
            if($row2)
            {
              echo "<script>window.location.href='Visa-Form.php?case_id=".$row2[0]."';</script>";
            }
          }
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }
}

if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    $query = mysqli_query($con, "select * from cases where case_id = '$id'") or die(mysqli_error($con));
    $std = mysqli_fetch_array($query);
}


//UPDATE WORK
if(isset($_POST['update']))
{   
    $user_id = $_SESSION['user_id'];
    $case_id = $_POST['case_id'];
    $agency_id = $_POST['agency_id'];
    $visa_file_no = $_POST['visa_file_no'];
    $visa_no = $_POST['visa_no'];
    $visa_id_no = $_POST['visa_id_no'];
    $visa_sponsor_name = $_POST['visa_sponsor_name'];
    $visa_date = $_POST['visa_date'];
    $visa_profession_id = $_POST['visa_profession_id'];
    $visa_profession_urdu_id = $_POST['visa_profession_urdu_id'];
    $visa_price_as_per_agency = $_POST['visa_price_as_per_agency'];
    $visa_price_as_per_regent = $_POST['visa_price_as_per_regent'];
    $passenger_name = $_POST['passenger_name'];
    $passenger_father_name = $_POST['passenger_father_name'];
    $passenger_eno = $_POST['passenger_eno'];
    $passenger_passport_no = $_POST['passenger_passport_no'];
    $passenger_dob = $_POST['passenger_dob'];
    $passenger_name_urdu = $_POST['passenger_name_urdu'];
    $passenger_father_name_urdu = $_POST['passenger_father_name_urdu'];
    $passenger_date_of_issue = $_POST['passenger_date_of_issue'];
    $passenger_date_of_expiry = $_POST['passenger_date_of_expiry'];
    $passenger_submit_date = $_POST['passenger_submit_date'];
    $passenger_cnic = $_POST['passenger_cnic'];
    $submitted_to = $_POST['submitted_to'];
    $visa_status_id = $_POST['visa_status_id'];
    $visa_courier_date = $_POST['visa_courier_date'];
    $visa_courier_name = $_POST['visa_courier_name'];
    $visa_courier_no = $_POST['visa_courier_no'];
    $remarks = $_POST['remarks'];
    $current_date_submission = date("Y/m/d");

    $query = mysqli_query($con, "
        UPDATE `cases` SET `user_id`='$user_id', `agency_id`='$agency_id', `visa_file_no` = '$visa_file_no', `visa_no`='$visa_no',`visa_id_no`='$visa_id_no',`visa_sponsor_name`='$visa_sponsor_name',`visa_date`='$visa_date',`visa_profession_id`='$visa_profession_id', `visa_profession_urdu_id` = '$visa_profession_urdu_id', `visa_price_as_per_agency`='$visa_price_as_per_agency',`visa_price_as_per_regent`='$visa_price_as_per_regent',`passenger_name`='$passenger_name',`passenger_father_name`='$passenger_father_name',`passenger_eno`='$passenger_eno',`passenger_passport_no`='$passenger_passport_no',`passenger_dob`='$passenger_dob',`passenger_name_urdu`='$passenger_name_urdu',`passenger_father_name_urdu`='$passenger_father_name_urdu',`passenger_date_of_issue`='$passenger_date_of_issue',`passenger_date_of_expiry`='$passenger_date_of_expiry',`passenger_submit_date`='$passenger_submit_date', `passenger_cnic` = '$passenger_cnic',`submitted_to`='$submitted_to',`visa_status_id`='$visa_status_id',`visa_courier_date`='$visa_courier_date',`visa_courier_name`='$visa_courier_name',`visa_courier_no`='$visa_courier_no',`remarks`='$remarks',`current_date_submission`='$current_date_submission' WHERE case_id = '$case_id';
        ") or die(mysqli_error($con));

    if($query)
    {
        echo "<script>window.location.href='Agency-Entries-Visa-Details.php';</script>";
    }
    else
    {
        echo "<script>alert('Error');</script>";
    }
}


//DELETE WORK
if(isset($_GET['delete_id']))
{
  $delete_id = $_GET['delete_id'];
  $query = mysqli_query($con, "delete from cases where case_id = '$delete_id'");

  if($query)
  {
    echo "<script>window.location.href='Agency-Entries-Visa-Details.php';</script>";
  }

}


?>
<form action="#" method="post">
<section class="container-fluid">
    <h5> Visa Detail</h5>


    <section class="container-fluid">

            <section class="row">

                <section class="col-xl-3">
                    <input type="hidden" name="case_id" value="<?php echo @$std['case_id'] ?>">
                    <select required name="agency_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Agency Name</option>
                        <?php
                        $query = mysqli_query($con, "select * from users where role = 'agency'");
                        while($row = mysqli_fetch_array($query))
                        {
                            ?>
                            <option <?php if(@$std['agency_id'] == $row['user_id']) {echo "selected"; }?> value="<?php echo  $row['user_id']?>"><?php echo $row['name']?></option>
                            <?php
                        }
                        ?>

                      </select>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_file_no'] ?>" name="visa_file_no" required type="text"  class="form-control input-box" placeholder="Visa File No." maxlength="9"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_no'] ?>" name="visa_no" required type="text"  class="form-control input-box" placeholder="Visa No." maxlength="9"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_id_no'] ?>" name="visa_id_no" required type="text" class="form-control input-box" placeholder="ID No." maxlength="5"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_sponsor_name'] ?>" name="visa_sponsor_name" required type="text" class="form-control input-box" placeholder="Sponsor Name" />
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_date'] ?>" name="visa_date" required type="text" class="form-control input-box hijri-date-input" placeholder="Visa Date"/>
                </section>

                <section class="col-xl-3">
                    <select name="visa_profession_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Select Profession English</option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_profession");
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option <?php if(@$std['visa_profession_id'] == $row['visa_profession_id']){echo "selected";}?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }

                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <select name="visa_profession_urdu_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Select Profession Urdu</option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_profession_urdu");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option <?php if(@$std['visa_profession_urdu_id'] == $row[0] ){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>


                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_price_as_per_agency'] ?>" name="visa_price_as_per_agency" required type="number" class="form-control input-box " placeholder="Price As Per Agency"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_price_as_per_regent'] ?>" name="visa_price_as_per_regent" required type="number" class="form-control input-box " placeholder="Price As Per Regent"/>
                </section>
                
            </section>
        
    </section>

</section>


<hr>

<section class="container-fluid ">
    <h5> Passenger Details</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-3">
                    <input value="<?php echo @$std['passenger_name'] ?>" required name="passenger_name" type="text" class="form-control input-box" placeholder="Name" maxlength="15"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['passenger_father_name'] ?>" required name="passenger_father_name" type="text" class="form-control input-box" placeholder="Father Name" maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_eno'] ?>" required name="passenger_eno" type="text" class="form-control input-box" placeholder="E No." maxlength="10"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_passport_no'] ?>" required name="passenger_passport_no" type="text" class="form-control input-box" placeholder="Passport No." maxlength="9"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_dob'] ?>" required name="passenger_dob" type="text" class="form-control input-box" placeholder="Date Of Birth"/>
                </section>
                
               

                <section class="col-xl-3">
                    <input value="<?php echo @$std['passenger_name_urdu'] ?>" required name="passenger_name_urdu" id="passenger_name_urdu" type="text" class="form-control input-box" placeholder="Name In Urdu" dir="rtl" style="text-align: left"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['passenger_father_name_urdu'] ?>" required name="passenger_father_name_urdu" id="passenger_father_name_urdu" type="text" class="form-control input-box" placeholder="Father Name In Urdu" dir="rtl" style="text-align: left"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_date_of_issue'] ?>" required name="passenger_date_of_issue" type="text" class="form-control input-box" placeholder="Date Of Issue"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_date_of_expiry'] ?>" required name="passenger_date_of_expiry" type="text" class="form-control input-box" placeholder="Date of Expiry"/>
                </section>
                
                
                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_submit_date'] ?>" required name="passenger_submit_date" type="text" class="form-control input-box" placeholder="Submit Date"/>
                </section> 

                <section class="col-xl-2">
                    <input value="<?php echo @$std['passenger_cnic'] ?>" required name="passenger_cnic" type="text" class="form-control input-box" placeholder="CNIC"/>
                </section> 

            </section> 
            <hr>
    </section>

</section>

<hr>

<section class="container-fluid ">

    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-2">
                    <input value="<?php echo @$std['submitted_to'] ?>" required name="submitted_to" type="text" class="form-control input-box" placeholder="Submitted To"/>
                </section>

                <section class="col-xl-2">
                    <select name="visa_status_id" required class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Select Visa Status </option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_status");
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option <?php if(@$std['visa_status_id'] == $row['visa_status_id'] ){echo "selected"; } ?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }

                        ?>
                      </select>
                </section>

                <section class="col-xl-2">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 8px; font-size: 13px;">Courier Date</p></section>

                        <section class="col-9">
                            <input value="<?php echo @$std['visa_courier_date'] ?>" name="visa_courier_date" required type="date" class="form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/>
                        </section>
                    </section>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['visa_courier_name'] ?>" name="visa_courier_name" required type="text" class="form-control input-box" placeholder="Type Courier Name"/>
                </section>


                <section class="col-xl-2">
                    <input value="<?php echo @$std['visa_courier_no'] ?>" name="visa_courier_no" required type="text" class="form-control input-box" placeholder="Type Courier Number"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['remarks'] ?>" name="remarks" required type="text" class="form-control input-box" placeholder="Remarks"/>
                </section>


            </section>

        
    </section>

</section>

<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
          <br>
              <?php
              if(isset($_GET['edit_id']))
              {
                ?>
            <input name="update" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Update" />  
                <?php
              }
              else
              {
                ?>
            <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print Visa Form" />  
                <?php
              }
              ?>    

        </section>
    </section>
</section>
</form>

<br><br>

<section class="container-fluid">
    <!-- ============= -->
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
            <span >File No</span>
            <input id="search_file_no" name="search_file_no" type="text" class="form-control input-box" placeholder="File No." />
        </section>
        <section class="col-md-2">
            <span >Passport No.</span>
            <input id="search_passport_no" name="search_passport_no" type="text" class="form-control input-box" placeholder="Passport No" />
        </section>
        <section class="col-md-2">
            <span >Visa</span>
            <input id="search_visa_no" name="search_visa_no" type="text" class="form-control input-box" placeholder="Visa No." />
        </section>

        <section class="col-md-2">
        <span >Sponsor Name</span>
            <input type="text" id="txtType" class="form-control input-box" placeholder="Sponsor Name" />
        </section>

      

</section>
</section>
   

</section>
<br>

<section class="container-fluid text-center">
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Sample Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Import Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Export Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Print" />
</section>

<br>

<section class="container-fluid">

            <table class="table mb-5  table-responsive" style="padding-bottom:130px;">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Agency_Name</th>
                      <th scope="col">File_No</th>
                      <th scope="col">Visa_No</th>
                      <th scope="col">ID_No</th>

                      <th scope="col">Sponsor_Name</th>
                      <th scope="col">Visa_Date</th>
                      <th scope="col">Profession</th>
                      <th scope="col">Price_As_Per_Agency</th>
                      <th scope="col">Price_As_Per_Regent</th>
                      <th scope="col">Name</th>
                      <th scope="col">Father_Name</th>
                      <th scope="col">Name_Urdu</th>
                      <th scope="col">Father_Name_Urdu</th>

                      <th scope="col">E_No.</th>
                      <th scope="col">Passport_No.</th>
                      <th scope="col">Date_of_Birth</th>
                      <th scope="col">Date_of_Issue</th>
                      <th scope="col">Date_of_Expiry</th>
                      <th scope="col">CNIC_No.</th>
                      <th scope="col">Submit_Date</th>
                    </tr>
                  </thead>
                  <tbody>
                   
        
                   

                <?php
                $query = mysqli_query($con, "
SELECT cases.*, 
users.name as username,  
visa_status.name as visa_status_name,
visa_profession.name as visa_profession
FROM `cases` 
INNER JOIN users 
ON users.user_id = cases.agency_id
INNER JOIN visa_status
ON visa_status.visa_status_id = cases.visa_status_id
INNER JOIN visa_profession
ON visa_profession.visa_profession_id = cases.visa_profession_id
ORDER BY case_id ASC
                  ");
                $count=1;
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
                                            <a style="font-size: 13px; font-weight: bold;" href="Agency-Entries-Visa-Details.php?edit_id=<?php echo $row[0] ?>" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Agency-Entries-Visa-Details.php?delete_id=<?php echo $row[0] ?>" class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php?case_id=<?php echo $row[0] ?>" class="btn text-light bg-warning p-1 ">Permission Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Permission Form</a>
                            </div>
                    </div>
                    
                        </td>

                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['visa_file_no'] ?></td>
                    
                    <td><?php echo $row['visa_no'] ?></td>
                    <td><?php echo $row['visa_id_no'] ?></td>
                    <td><?php echo $row['visa_sponsor_name'] ?></td>
                    <td><?php echo $row['visa_date'] ?></td>
                    
                    <td><?php echo $row['visa_profession'] ?></td>
                    <td><?php echo $row['visa_price_as_per_agency'] ?></td>
                    <td><?php echo $row['visa_price_as_per_regent'] ?></td>

                    <td><?php echo $row['passenger_name'] ?></td>
                    <td><?php echo $row['passenger_father_name'] ?></td>
                    
                    <td><?php echo $row['passenger_name_urdu'] ?></td>
                    <td><?php echo $row['passenger_father_name_urdu'] ?></td>
                    <td><?php echo $row['passenger_eno'] ?></td>
                    <td><?php echo $row['passenger_passport_no'] ?></td>
                    
                    <td><?php echo $row['passenger_dob'] ?></td>
                    <td><?php echo $row['passenger_date_of_issue'] ?></td>
                    <td><?php echo $row['passenger_date_of_expiry'] ?></td>
                    <td><?php echo $row['passenger_cnic'] ?></td>
                    <td><?php echo $row['passenger_submit_date'] ?></td>
                   
                   
                </tr>
                  <?php
                  $count++;
                }
                ?>

                  </tbody>
            </table>
        
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done Visa Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
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
  });
</script>

<script src="js/jquery-fab-button.js"></script>
<script src="js/urdutextbox.js"></script>
<script type="text/javascript">
    window.onload = myOnload;

function myOnload(evt){
    MakeTextBoxUrduEnabled(passenger_name_urdu);//enable Urdu in html text box
    MakeTextBoxUrduEnabled(passenger_father_name_urdu);//enable Urdu in html text area
}
</script>