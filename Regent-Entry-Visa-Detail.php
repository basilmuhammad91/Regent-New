<?php

include('connect.php');
include('header.php');

$role = @$_SESSION['role'];

if($role !== 'Admin' && $role !== 'Employee')
{
	echo "<script>window.location.href='index.php';</script>";
}


if(isset($_POST['add_visa']))
{
    $user_id = $_SESSION['user_id'];
    $visa_date = $_POST['visa_date'];
    $visa_file_no = $_POST['visa_file_no'];
    $visa_embassy_id = $_POST['visa_embassy_id'];
    $visa_quantity_no = $_POST['visa_quantity_no'];
    $visa_sponsor_name = $_POST['visa_sponsor_name'];
    $visa_permission_status_id = $_POST['visa_permission_status_id'];
    $visa_profession_id = $_POST['visa_profession_id'];
    $visa_contact_pak = $_POST['visa_contact_pak'];
    $visa_contact_saudia = $_POST['visa_contact_saudia'];
    $visa_reg_date = $_POST['visa_reg_date'];
    $visa_reg_no = $_POST['visa_reg_no'];
    $visa_no = $_POST['visa_no'];
    $visa_sponsor_address = $_POST['visa_sponsor_address'];
    $visa_co_agent_pak_id = $_POST['visa_co_agent_pak_id'];
    $visa_status_id = $_POST['visa_status_id'];
    $visa_price = $_POST['visa_price'];
    $visa_sponsor_id = $_POST['visa_sponsor_id'];
    $visa_date2 = $_POST['visa_date2'];
    $visa_agent_from_saudia_id = $_POST['visa_agent_from_saudia_id'];
    $visa_remarks = $_POST['visa_remarks'];
    $current_date_submission = date("Y/m/d");
    $type = 'regents';

     $query = mysqli_query($con, "INSERT INTO `regents`(`user_id`, `visa_date`, `visa_file_no`, `visa_embassy_id`, `visa_quantity_no`, `visa_sponsor_name`, `visa_permission_status_id`, `visa_profession_id`, `visa_contact_pak`, `visa_contact_saudia`, `visa_reg_date`, `visa_reg_no`, `visa_no`, `visa_sponsor_address`, `visa_co_agent_pak_id`, `visa_status_id`, `visa_price`, `visa_sponsor_id`, `visa_date2`, `visa_agent_from_saudia_id`, `visa_remarks`, `current_date_submission`, `type`) VALUES (
         '$user_id', '$visa_date', '$visa_file_no', '$visa_embassy_id', '$visa_quantity_no', '$visa_sponsor_name', '$visa_permission_status_id', '$visa_profession_id', '$visa_contact_pak', '$visa_contact_saudia', '$visa_reg_date', '$visa_reg_no', '$visa_no', '$visa_sponsor_address', '$visa_co_agent_pak_id', '$visa_status_id', '$visa_price', '$visa_sponsor_id', '$visa_date2', '$visa_agent_from_saudia_id', '$visa_remarks','$current_date_submission', '$type'
      )");

        if($query>0)
        {
            echo "<script>window.location.href='Regent-Entry-Visa-Detail.php';</script>";
        }
        else
        {
            echo "<script>alert('Error !');</script>";
        }
}


//EDIT WORK
if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    $query = mysqli_query($con, "select * from regents where regent_id = '$id'");   
    $std = mysqli_fetch_array($query);


    //AUTHENTICATION
    if(@$std['user_id'] !== $_SESSION['user_id'] && $role !== "Admin")
    {
        header('location: index.php');
    }
    
}

//UPDATE WORK
if(isset($_POST['update_visa']))
{
    $regent_id = $_POST['id'];
    $user_id = $_SESSION['user_id'];
    $visa_date = $_POST['visa_date'];
    $visa_file_no = $_POST['visa_file_no'];
    $visa_embassy_id = $_POST['visa_embassy_id'];
    $visa_sponsor_name = $_POST['visa_sponsor_name'];
    $visa_permission_status_id = $_POST['visa_permission_status_id'];
    $visa_profession_id = $_POST['visa_profession_id'];
    $visa_contact_pak = $_POST['visa_contact_pak'];
    $visa_contact_saudia = $_POST['visa_contact_saudia'];
    $visa_reg_date = $_POST['visa_reg_date'];
    $visa_reg_no = $_POST['visa_reg_no'];
    $visa_no = $_POST['visa_no'];
    $visa_sponsor_address = $_POST['visa_sponsor_address'];
    $visa_co_agent_pak_id = $_POST['visa_co_agent_pak_id'];
    $visa_status_id = $_POST['visa_status_id'];
    $visa_price = $_POST['visa_price'];
    $visa_sponsor_id = $_POST['visa_sponsor_id'];
    $visa_date2 = $_POST['visa_date2'];
    $visa_agent_from_saudia_id = $_POST['visa_agent_from_saudia_id'];
    $visa_remarks = $_POST['visa_remarks'];
    $visa_quantity_no = $_POST['visa_quantity_no'];

     $query = mysqli_query($con, "
        UPDATE `regents` SET `user_id`='$user_id',`visa_date`='$visa_date',`visa_file_no`='$visa_file_no',`visa_embassy_id`='$visa_embassy_id',`visa_sponsor_name`='$visa_sponsor_name',`visa_permission_status_id`='$visa_permission_status_id',`visa_profession_id`='$visa_profession_id',`visa_contact_pak`='$visa_contact_pak',`visa_contact_saudia`='$visa_contact_saudia',`visa_reg_date`='$visa_reg_date',`visa_reg_no`='$visa_reg_no',`visa_no`='$visa_no',`visa_sponsor_address`='$visa_sponsor_address',`visa_co_agent_pak_id`='$visa_co_agent_pak_id',`visa_status_id`='$visa_status_id',`visa_price`='$visa_price',`visa_sponsor_id`='$visa_sponsor_id',`visa_date2`='$visa_date2',`visa_agent_from_saudia_id`='$visa_agent_from_saudia_id',`visa_remarks`='$visa_remarks', `visa_quantity_no` = '$visa_quantity_no' WHERE regent_id = '$regent_id';
        ") or die(mysqli_error($con));

     if($query)
    {
        echo "<script>window.location.href='Regent-Entry-Visa-Detail.php';</script>";
    }
    else
    {
        echo "<script>alert('Error');</script>";
    }

}

// ==========DELETE WORK FOR REGENTS===========
if(isset($_GET['delete_id']))
{
  $id = $_GET['delete_id'];

  
  //AUTHENTICATION
  $check_query = mysqli_query($con, "select * from regents where regent_id = '$id'");
  $std = mysqli_fetch_array($check_query);

    if(@$std['user_id'] !== $_SESSION['user_id'])
    {
        header('location: index.php');
    }
    
  $query = mysqli_query($con, "delete from regents where regent_id = '$id'");

  if($query)
  {
    echo "<script>window.location.href='Regent-Entry-Visa-Detail.php';</script>";
  }

}

// SEARCH REGENTS WORK
if(isset($_POST['search_regent']))
{
    $date_from = date("Y/m/d", strtotime($_POST['date_from']));
    $date_to = date("Y/m/d", strtotime($_POST['date_to']));
    $search_file_no = $_POST['search_file_no'];

    $search_query = mysqli_query($con, "
SELECT regents.*, visa_embassy.name AS visa_embassy, visa_permission_status.name AS visa_permission_status, visa_profession.name AS visa_profession, visa_co_agent_pak.name AS visa_co_agent_pak, visa_status.name AS visa_status, visa_agent_from_saudia.name AS visa_agent_from_saudia FROM regents
INNER JOIN visa_embassy
ON
regents.visa_embassy_id = visa_embassy.visa_embassy_id
INNER JOIN visa_permission_status
ON
regents.visa_permission_status_id = visa_permission_status.visa_permission_status_id
INNER JOIN visa_profession
ON
regents.visa_profession_id = visa_profession.visa_profession_id
INNER JOIN visa_co_agent_pak
ON
regents.visa_co_agent_pak_id = visa_co_agent_pak.visa_co_agent_pak_id
INNER JOIN visa_status
ON
regents.visa_status_id = visa_status.visa_status_id
INNER JOIN visa_agent_from_saudia
ON
visa_agent_from_saudia.visa_agent_from_saudia_id = regents.visa_agent_from_saudia_id
WHERE current_date_submission BETWEEN '$date_from' AND 'date_to' AND visa_file_no = '$search_file_no'
");


}   

?>
  

<form action="#" method="post">	
  <section class="container-fluid">
      <h5> Visa Detail</h5>

        <section class="container-fluid">
          
                <section class="row">

                    <section class="col-xl-2">
                        <input type="hidden" name="id" value="<?php echo @$std[0]?>">
                        <input required name="visa_date" value="<?php echo @$std['visa_date'] ?>" type="date" class="form-control input-box" placeholder="File No." maxlength="5"/>
                    </section>

                    <section class="col-xl-2">
                        <input required name="visa_file_no" value="<?php echo @$std['visa_file_no'] ?>" type="text"  class="form-control input-box" placeholder="File No." maxlength="5"/>
                    </section>

                    <section required class="col-xl-2">
                        <select name="visa_embassy_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Select Visa Embassy</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_embassy");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option 
                                <?php 
                                if(@$std['visa_embassy_id'] == $row[0])
                                {echo "selected"; }
                                ?>
                                value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }
                            ?>
                          </select>
                    </section>

                    <section class="col-xl-3">
                        <select name="visa_quantity_no" id=""  class=" form-control input-box">
                            <option value="">Visa Quantity</option>
                            <option <?php if(@$std['visa_quantity_no'] == '1'){echo "selected";} ?> value="1">1</option>
                            <option <?php if(@$std['visa_quantity_no'] == '2'){echo "selected";} ?> value="2">2</option>
                            <option <?php if(@$std['visa_quantity_no'] == '3'){echo "selected";} ?> value="3">3</option>
                            <option <?php if(@$std['visa_quantity_no'] == '4'){echo "selected";} ?> value="4">4</option>
                            <option <?php if(@$std['visa_quantity_no'] == '5'){echo "selected";} ?> value="5">5</option>
                            <option <?php if(@$std['visa_quantity_no'] == '6'){echo "selected";} ?> value="6">6</option>
                            <option <?php if(@$std['visa_quantity_no'] == '7'){echo "selected";} ?> value="7">7</option>
                            <option <?php if(@$std['visa_quantity_no'] == '8'){echo "selected";} ?> value="8">8</option>
                            <option <?php if(@$std['visa_quantity_no'] == '9'){echo "selected";} ?> value="9">9</option>
                            <option <?php if(@$std['visa_quantity_no'] == '10'){echo "selected";} ?> value="10">10</option>
                        </select>
                    </section>

                    <section class="col-xl-3">
                        <input required value="<?php echo @$std['visa_no'] ?>" name="visa_no" type="text" class="form-control input-box" placeholder="Visa No." maxlength="10"/>
                    </section>

                    <section class="col-xl-3">
                        <input required value="<?php echo @$std['visa_sponsor_id'] ?>" name="visa_sponsor_id" type="text" class="form-control input-box" placeholder="Sponsor ID" maxlength="10"/>
                    </section>

                    <section class="col-xl-6">
                        <input required value="<?php echo @$std['visa_sponsor_name'] ?>" name="visa_sponsor_name" type="text" class="form-control input-box" placeholder="Sponsor Name"/>
                    </section>

                    <section class="col-xl-3">
                        <input required value="<?php echo @$std['visa_sponsor_address'] ?>" name="visa_sponsor_address" type="text" class="form-control input-box" placeholder="Sponsor Address"/>
                    </section>

                    <section class="col-xl-3">                   
                          <input value="<?php echo @$std['visa_date2'] ?>" name="visa_date2" type="text" class="form-control input-box hijri-date-input" placeholder="Visa Date"/>    
                    </section>


                    <section class="col-xl-3">
                        <select name="visa_permission_status_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Select Permission Status</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_permission_status");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option <?php if(@$std['visa_permission_status_id'] == $row[0] ){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }
                            ?>
                          </select>
                    </section>

                    <section class="col-xl-3">
                        <select name="visa_profession_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Select Profession</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_profession");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option <?php if(@$std['visa_profession_id'] == $row[0] ){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }
                            ?>
                          </select>
                    </section>

                    <section class="col-xl-3">
                        <select name="visa_co_agent_pak_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Select C/O Agent From Pakistan</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_co_agent_pak");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option <?php if(@$std['visa_co_agent_pak_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }
                            ?>
                          </select>
                    </section>

                    <section class="col-xl-3">
                        <select name="visa_agent_from_saudia_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Agent From Saudi Arabia</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_agent_from_saudia");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option <?php if(@$std['visa_agent_from_saudia_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }

                            ?>
                          </select>
                    </section>

                    <section class="col-xl-3">
                        <input value="<?php echo @$std['visa_contact_pak'] ?>" name="visa_contact_pak" type="text" class="form-control input-box" maxlength="15" placeholder="Contact No. Pakistan"/>
                    </section>

                    <section class="col-xl-3">
                        <input value="<?php echo @$std['visa_contact_saudia'] ?>" name="visa_contact_saudia" type="text" class="form-control input-box" maxlength="15" placeholder="Contact No. Saudia"/>
                    </section>


                    <section class="col-xl-3">
                        <select name="visa_status_id" class="form-control input-box" id="exampleFormControlSelect1">
                            <option>Visa Status</option>
                            <?php
                            $query = mysqli_query($con, "select * from visa_status");    
                            while ($row=mysqli_fetch_array($query)) {
                                ?>
                                <option <?php if(@$std['visa_status_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                <?php
                            }
                            ?>
                          </select>
                    </section>


                    <section class="col-xl-3">
                        <input value="<?php echo @$std['visa_remarks'] ?>" name="visa_remarks" type="text" class="form-control input-box"  placeholder="Remarks"/>
                    </section>

                    <section class="col-xl-3">
                        <input disabled="disabled" value="<?php echo @$std['visa_reg_date'] ?>" name="visa_reg_date" type="text" class="form-control input-box"  placeholder="Registration Date"/>
                    </section>

                    <section class="col-xl-3">
                        <input disabled="disabled" value="<?php echo @$std['visa_reg_no'] ?>" name="visa_reg_no" type="text" class="form-control input-box" placeholder="Registration No."/>
                    </section>

                    <section class="col-xl-3 mt-2">
                        
                        <span class="lock ">
                            <div class=" input-box p-0 " style="height: 35px !important">
                                <input type="checkbox" disabled="true" />
                                <span></span>
                                <input value="<?php echo @$std['visa_price'] ?>" name="visa_price" type="text" class="mt-0 form-control input-box"  placeholder="Price"/>
                            </div>
                        </span>
                    </section>
        </section>
            </section>

  </section>
  <section class="container">
      <section class="row" style="align-items: center;">
          <section class="col-5 m-auto text-center">
                <!--     <a href="permission.php">
                    
                    </a>   -->    
                <?php
                if(isset($_GET['edit_id']))
                {
                  ?>
                  <input type="Submit" name="update_visa" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Update & Print Permission Form" />
                  <?php
                }
                else
                {
                  ?>
                    <input type="Submit" name="add_visa" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print Permission Form" />
                  <?php
                }
                ?>
              </section>
      </section>
  </section>
 </form>

<hr>





<br><br>

<form action="#" method="post">
    <section class="container-fluid">
   
    <!-- ============= -->
        <section class="row" style="align-items: center;">
            <section class="col-md-2">
                <span >From</span>
                <input required id="date_from" name="date_from" type="date" class="form-control input-box" />
            </section>
            <section class="col-md-2">
                <span >To</span>
                <input required id="date_to" name="date_to" type="date" class="form-control input-box" />
            </section>
            <section class="col-md-2">
                <span >File No</span>
                <input required id="search_file_no" name="search_file_no" type="text" class="form-control input-box" placeholder="File No." />
            </section>
            <!-- <section class="col-md-2">
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
            </section> -->
            <section class="col-md-2">
                <input type="submit" name="search_regent" value="Search" class="btn btn-primary mt-4">
            </section>

          

    </section>

</form>

<br>

<section class="container-fluid text-center">
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Sample Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Import Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Export Excel" />
<input type="button" id="print_table" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Print" />
</section>

<br>

<section class="container-fluid">

    <div id="print_div">
        <table class="table table-responsive mb-5" style="padding-bottom:130px">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th class="tbl1" scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Date</th>
                      <th scope="col">File_No</th>
                      <th scope="col">Embassy</th>
                      <th scope="col">Visa_Quantity</th>
                      <th scope="col">Visa_No</th>
                      <th scope="col">Sponsor_ID</th>
                      <th scope="col">Sponsor_Name</th>
                      <th scope="col">Sponsor_Address</th>
                      <th scope="col">Visa_Date</th>
                      <th scope="col">Permission_status</th>
                      <th scope="col">Profession</th>
                      <th scope="col">Agent_of_Pakistan</th>
                      <th scope="col">Agent_of_Saudia</th>
                      <th scope="col">Contact_No_Pakistan</th>
                      <th scope="col">Contact_No_Saudia</th>
                      <th scope="col">Visa_Status</th>
                      <th scope="col">Remarks</th>
                      <th scope="col">Registration_Date</th>
                      <th scope="col">Registration_No</th>
                      <th scope="col">Price</th>
                     
                    </tr>
                  </thead>
                  <tbody>

<?php
if(isset($_POST['search_regent']))
{
$row_count=mysqli_num_rows($search_query);
if($row_count>0)
{
    $count = 1;
                  while ($std=mysqli_fetch_array($search_query)) {
                    ?>
                        <tr>
                          <th scope="row"><?php echo $count ?></th>
                          <td class="tbl1">

                          <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                  Action
                              </button>
                              <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                  
                                  <?php
                                  if($std['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                                  {
                                    ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Visa-Detail.php?edit_id=<?php echo $std[0] ?>" class="text-dark p-2">Edit</a><br>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Visa-Detail.php?delete_id=<?php echo $std[0] ?>"  class="text-dark p-2">Delete</a><br>
                                    <?php
                                  }
                                  ?>

                                  
                                  <a style="font-size: 13px; font-weight: bold;" href="permission.php?regent_id=<?php echo $std[0] ?>" class="btn text-light bg-warning p-1 ">Permission</a> <br>
                                  <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" onClick="hello();">Done Permission</a>
                                 <!--  <script type="text/javascript">$(document).ready(function(){
                                    $("#update_permission_id").val(<?php echo $std[0]?>);
                                  });</script> -->
                               </div>
                          </div>
                        </td>
                          <td><?php echo $std['visa_date'] ?></td>
                          <td><?php echo $std['visa_file_no'] ?></td>
                          <td><?php echo $std['visa_embassy'] ?></td>
                          <td><?php echo $std['visa_quantity_no'] ?></td>
                          <td><?php echo $std['visa_no'] ?></td>
                          
                          <td><?php echo $std['visa_sponsor_id'] ?></td>
                          <td><?php echo $std['visa_sponsor_name'] ?></td>
                          <td><?php echo $std['visa_sponsor_address'] ?></td>
                          <td><?php echo $std['visa_date2'] ?></td>
                          
                          <td><?php echo $std['visa_permission_status'] ?></td>
                          <td><?php echo $std['visa_profession'] ?></td>
                          <td><?php echo $std['visa_co_agent_pak'] ?></td>
                          <td><?php echo $std['visa_agent_from_saudia'] ?></td>
                          
                          <td><?php echo $std['visa_contact_pak'] ?></td>
                          <td><?php echo $std['visa_contact_saudia'] ?></td>
                          <td><?php echo $std['visa_status'] ?></td>
                          <td><?php echo $std['visa_remarks'] ?></td>
                          
                          <td><?php echo $std['visa_reg_date'] ?></td>
                          <td><?php echo $std['visa_reg_no'] ?></td>
                          <td><?php echo $std['visa_price'] ?></td>
                      </tr>
                    <?php
                    $count++;
                  }
}
else
{
    echo "<script>alert('Please input right fields !')</script>";
}

}
else
{
$query = mysqli_query($con, "
SELECT regents.*, visa_embassy.name AS visa_embassy, visa_permission_status.name AS visa_permission_status, visa_profession.name AS visa_profession, visa_co_agent_pak.name AS visa_co_agent_pak, visa_status.name AS visa_status, visa_agent_from_saudia.name AS visa_agent_from_saudia FROM regents
INNER JOIN visa_embassy
ON
regents.visa_embassy_id = visa_embassy.visa_embassy_id
INNER JOIN visa_permission_status
ON
regents.visa_permission_status_id = visa_permission_status.visa_permission_status_id
INNER JOIN visa_profession
ON
regents.visa_profession_id = visa_profession.visa_profession_id
INNER JOIN visa_co_agent_pak
ON
regents.visa_co_agent_pak_id = visa_co_agent_pak.visa_co_agent_pak_id
INNER JOIN visa_status
ON
regents.visa_status_id = visa_status.visa_status_id
INNER JOIN visa_agent_from_saudia
ON
visa_agent_from_saudia.visa_agent_from_saudia_id = regents.visa_agent_from_saudia_id
  ");
$count = 1;
                  while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                          <th scope="row"><?php echo $count ?></th>
                          <td class="tbl1">

                          <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                  Action
                              </button>
                              <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                  
                                  <?php
                                  if($row['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                                  {
                                    ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Visa-Detail.php?edit_id=<?php echo $row[0] ?>" class="text-dark p-2">Edit</a><br>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Visa-Detail.php?delete_id=<?php echo $row[0] ?>"  class="text-dark p-2">Delete</a><br>
                                    <?php
                                  }
                                  ?>

                                  
                                  <a style="font-size: 13px; font-weight: bold;" href="permission.php?regent_id=<?php echo $row[0] ?>" class="btn text-light bg-warning p-1 ">Permission</a> <br>
                                  <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" onClick="hello();">Done Permission</a>
                                 <!--  <script type="text/javascript">$(document).ready(function(){
                                    $("#update_permission_id").val(<?php echo $row[0]?>);
                                  });</script> -->
                               </div>
                          </div>
                        </td>
                          <td><?php echo $row['visa_date'] ?></td>
                          <td><?php echo $row['visa_file_no'] ?></td>
                          <td><?php echo $row['visa_embassy'] ?></td>
                          <td><?php echo $row['visa_quantity_no'] ?></td>
                          <td><?php echo $row['visa_no'] ?></td>
                          
                          <td><?php echo $row['visa_sponsor_id'] ?></td>
                          <td><?php echo $row['visa_sponsor_name'] ?></td>
                          <td><?php echo $row['visa_sponsor_address'] ?></td>
                          <td><?php echo $row['visa_date2'] ?></td>
                          
                          <td><?php echo $row['visa_permission_status'] ?></td>
                          <td><?php echo $row['visa_profession'] ?></td>
                          <td><?php echo $row['visa_co_agent_pak'] ?></td>
                          <td><?php echo $row['visa_agent_from_saudia'] ?></td>
                          
                          <td><?php echo $row['visa_contact_pak'] ?></td>
                          <td><?php echo $row['visa_contact_saudia'] ?></td>
                          <td><?php echo $row['visa_status'] ?></td>
                          <td><?php echo $row['visa_remarks'] ?></td>
                          
                          <td><?php echo $row['visa_reg_date'] ?></td>
                          <td><?php echo $row['visa_reg_no'] ?></td>
                          <td><?php echo $row['visa_price'] ?></td>
                      </tr>
                    <?php
                    $count++;
                  }

}
            ?>      
                  </tbody>
            </table>
    </div>
            
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
      <form action="#" method="post">
        <input type="text" name="" value="hello" id="update_permission_id">
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


<!-- =====SCRIPTS FOR PRINT===== -->
<script src="printMe-master/jquery.min.js"></script>
<script src="printMe-master/jquery-printme.js"></script>
<script src="printMe-master/printMe-master/jquery-printme.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="print">
<link rel="stylesheet" type="text/css" href="css/style2.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">    

<script type="text/javascript">
$(document).ready(function(){

    $('#print_table').click(function(){
        $('.tbl1').hide();
        $("#print_div table").css("overflow","hidden");
        
        $("#print_div").printMe({
            "path" : ["css/style.css","css/style2.css","css/bootstrap.min.css","Main StyleSheet.css", "css/animate.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "https://fonts.googleapis.com/css?family=Droid+Sans:400,700", "https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css", "https://use.fontawesome.com/releases/v5.4.1/css/all.css", "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "css/jquery-fab-button.css"]
        });
        $('.tbl1').show();
        $("#print_div table").css("overflow","auto");
    });
});
</script>
<script type="text/javascript">
    
</script>