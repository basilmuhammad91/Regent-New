<?php

include('connect.php');
include('header.php');

$role = $_SESSION['role'];

if($role !== 'Admin' && $role !== 'Employee')
{
	echo "<script>window.location.href='index.php';</script>";
}

if(isset($_POST['add_passenger_details']))
{
    $regent_id = $_POST['regent_id'];
    $user_id = $_SESSION['user_id'];
    $passenger_name = $_POST['passenger_name'];
    $passenger_name_urdu = $_POST['passenger_name_urdu'];
    $passenger_national_identity_no = $_POST['passenger_national_identity_no'];
    $passenger_district_id = $_POST['passenger_district_id'];
    $passenger_father_name = $_POST['passenger_father_name'];
    $passenger_father_name_urdu = $_POST['passenger_father_name_urdu'];
    $passenger_medical_center_id = $_POST['passenger_medical_center_id'];
    $passenger_qualification = $_POST['passenger_qualification'];
    $passenger_eno = $_POST['passenger_eno'];
    $passenger_dob = $_POST['passenger_dob'];
    $passenger_place_of_issue_id = $_POST['passenger_place_of_issue_id'];
    $passenger_address = $_POST['passenger_address'];
    $passenger_passport_no = $_POST['passenger_passport_no'];
    $passenger_date_of_issue = $_POST['passenger_date_of_issue'];
    $passenger_medical_status_id = $_POST['passenger_medical_status_id'];
    $passenger_date_of_expiry = $_POST['passenger_date_of_expiry'];
    $passenger_place_of_birth_id = $_POST['passenger_place_of_birth_id'];
    $passenger_country = $_POST['passenger_country'];
    $passenger_submit_date = $_POST['passenger_submit_date'];
    $current_date_submission = date("Y/m/d");
    $type = 'regents';

    $query = mysqli_query($con, "INSERT INTO `passenger_details`(`regent_id`, `user_id`, `passenger_name`, `passenger_name_urdu`, `passenger_national_identity_no`, `passenger_district_id`, `passenger_father_name`, `passenger_father_name_urdu`, `passenger_medical_center_id`, `passenger_qualification`, `passenger_eno`, `passenger_dob`, `passenger_place_of_issue_id`, `passenger_address`, `passenger_passport_no`, `passenger_date_of_issue`, `passenger_medical_status_id`, `passenger_date_of_expiry`, `passenger_place_of_birth_id`, `passenger_country`, `passenger_submit_date`, `current_date_submission`, `type`, `status`) VALUES (
         '$regent_id', '$user_id', '$passenger_name', '$passenger_name_urdu', '$passenger_national_identity_no', '$passenger_district_id', '$passenger_father_name', '$passenger_father_name_urdu', '$passenger_medical_center_id', '$passenger_qualification', '$passenger_eno', '$passenger_dob', '$passenger_place_of_issue_id', '$passenger_address', '$passenger_passport_no', '$passenger_date_of_issue', '$passenger_medical_status_id', '$passenger_date_of_expiry', '$passenger_place_of_birth_id', '$passenger_country', '$passenger_submit_date', '$current_date_submission','$type','Not Deleted'
)") or die(mysqli_error($con));

if($query>0)
    {
      $query2 = mysqli_query($con, "select * from regents where regent_id = '$regent_id'") or die(mysqli_error($con));
      $row2=mysqli_fetch_array($query2);
      $visa_quantity_no1 = $row2['visa_quantity_no']-1;
      $query3 = mysqli_query($con, "
                UPDATE `regents` SET visa_quantity_no = '$visa_quantity_no1' WHERE regent_id = '$regent_id';
                ") or die(mysqli_error($con));

              if($query3>0)
              {
                echo "<script>window.location.href='Regent-Entry-Passenger-Detail.php';</script>";
              }
      

    }
    else
    {
        echo "<script>alert('Error !');</script>";
    }

}


// ==========DELETE WORK FOR PASSENGER===========
if(isset($_GET['delete_id']))
{
    $id = $_GET['delete_id'];

    //AUTHENTICATION
    $check_query = mysqli_query($con, "select * from passenger_details where passenger_id = '$id'");
    $std = mysqli_fetch_array($check_query);

    if(@$std['user_id'] !== $_SESSION['user_id'])
    {
        header('location: index.php');
    }
    
    $query = mysqli_query($con, "update passenger_details set status = 'Deleted' where passenger_id = '$id'");
    if($query)
    {
        echo "<script>window.location.href='Regent-Entry-Passenger-Detail.php';</script>";
    }

}


//EDIT WORK
if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    $query = mysqli_query($con, "select * from passenger_details where passenger_id = '$id'");   
    $std = mysqli_fetch_array($query);

    //AUTHENTICATION
    if(@$std['user_id'] !== $_SESSION['user_id'] && $role !== "Admin")
    {
        header('location: index.php');
    }
}


// UPDATE WORK
if(isset($_POST['update_passenger_details']))
{
    $passenger_id = $_POST['passenger_id'];
    $user_id = $_SESSION['user_id'];
    $passenger_name = $_POST['passenger_name'];
    $passenger_name_urdu = $_POST['passenger_name_urdu'];
    $passenger_national_identity_no = $_POST['passenger_national_identity_no'];
    $passenger_district_id = $_POST['passenger_district_id'];
    $passenger_father_name = $_POST['passenger_father_name'];
    $passenger_father_name_urdu = $_POST['passenger_father_name_urdu'];
    $passenger_medical_center_id = $_POST['passenger_medical_center_id'];
    $passenger_qualification = $_POST['passenger_qualification'];
    $passenger_eno = $_POST['passenger_eno'];
    $passenger_dob = $_POST['passenger_dob'];
    $passenger_place_of_issue_id = $_POST['passenger_place_of_issue_id'];
    $passenger_address = $_POST['passenger_address'];
    $passenger_passport_no = $_POST['passenger_passport_no'];
    $passenger_date_of_issue = $_POST['passenger_date_of_issue'];
    $passenger_medical_status_id = $_POST['passenger_medical_status_id'];
    $passenger_date_of_expiry = $_POST['passenger_date_of_expiry'];
    $passenger_place_of_birth_id = $_POST['passenger_place_of_birth_id'];
    $passenger_country = $_POST['passenger_country'];
    $passenger_submit_date = $_POST['passenger_submit_date'];


    $query = mysqli_query($con, "
        UPDATE `passenger_details` SET `user_id`='$user_id',`passenger_name`='$passenger_name',`passenger_name_urdu`='$passenger_name_urdu',`passenger_national_identity_no`='$passenger_national_identity_no',`passenger_district_id`='$passenger_district_id',`passenger_father_name`='$passenger_father_name',`passenger_father_name_urdu`='$passenger_father_name_urdu',`passenger_medical_center_id`='$passenger_medical_center_id',`passenger_qualification`='$passenger_qualification',`passenger_eno`='$passenger_eno',`passenger_dob`='$passenger_dob',`passenger_place_of_issue_id`='$passenger_place_of_issue_id',`passenger_address`='$passenger_address',`passenger_passport_no`='$passenger_passport_no',`passenger_date_of_issue`='$passenger_date_of_issue',`passenger_medical_status_id`='$passenger_medical_status_id',`passenger_date_of_expiry`='$passenger_date_of_expiry',`passenger_place_of_birth_id`='$passenger_place_of_birth_id',`passenger_country`='$passenger_country',`passenger_submit_date`='$passenger_submit_date' WHERE passenger_id = '$passenger_id';
        ") or die(mysqli_error($con));

    if($query)
    {
        echo "<script>window.location.href='Regent-Entry-Passenger-Detail.php';</script>";
    }
    else
    {
        echo "<script>alert('Error');</script>";
    }

}

//SEARCH PASSENGER
if(isset($_POST['search_passenger']))
{
    $date_from = date("Y/m/d", strtotime($_POST['date_from']));
    $date_to = date("Y/m/d", strtotime($_POST['date_to']));
    $search_passport_no = $_POST['search_passport_no'];

if($date_to !== '' && $date_from !== '' && $search_passport_no !== '')
{
    $search_query = mysqli_query($con, "
SELECT passenger_details.*, passenger_medical_status.name AS passenger_medical_status, passenger_medical_center.name AS passenger_medical_center, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_place_of_birth.name AS passenger_place_of_birth, passenger_district.name AS passenger_district FROM `passenger_details` 
INNER JOIN passenger_medical_status
ON
passenger_medical_status.passenger_medical_status_id = passenger_details.passenger_medical_status_id
INNER JOIN passenger_medical_center
ON
passenger_medical_center.passenger_medical_center_id = passenger_details.passenger_medical_center_id
INNER JOIN passenger_place_of_issue
ON
passenger_place_of_issue.passenger_place_of_issue_id = passenger_details.passenger_place_of_issue_id
INNER JOIN passenger_place_of_birth
ON
passenger_place_of_birth.passenger_place_of_birth_id = passenger_details.passenger_place_of_birth_id
INNER JOIN passenger_district
ON
passenger_district.passenger_district_id = passenger_details.passenger_district_id
WHERE passenger_details.current_date_submission BETWEEN '$date_from' AND '$date_to' AND passenger_passport_no = '$search_passport_no' AND status = 'Not Deleted'
    ") or die(mysqli_error($con));
}
else if($date_to !== '' && $date_from !== '' && $search_passport_no == '')
{
    $search_query = mysqli_query($con, "
SELECT passenger_details.*, passenger_medical_status.name AS passenger_medical_status, passenger_medical_center.name AS passenger_medical_center, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_place_of_birth.name AS passenger_place_of_birth, passenger_district.name AS passenger_district FROM `passenger_details` 
INNER JOIN passenger_medical_status
ON
passenger_medical_status.passenger_medical_status_id = passenger_details.passenger_medical_status_id
INNER JOIN passenger_medical_center
ON
passenger_medical_center.passenger_medical_center_id = passenger_details.passenger_medical_center_id
INNER JOIN passenger_place_of_issue
ON
passenger_place_of_issue.passenger_place_of_issue_id = passenger_details.passenger_place_of_issue_id
INNER JOIN passenger_place_of_birth
ON
passenger_place_of_birth.passenger_place_of_birth_id = passenger_details.passenger_place_of_birth_id
INNER JOIN passenger_district
ON
passenger_district.passenger_district_id = passenger_details.passenger_district_id
WHERE passenger_details.current_date_submission BETWEEN '$date_from' AND '$date_to' AND status = 'Not Deleted'
    ") or die(mysqli_error($con));
}
else if($date_to == '' && $date_from == '' && $search_passport_no !== '')
{
      $search_query = mysqli_query($con, "
SELECT passenger_details.*, passenger_medical_status.name AS passenger_medical_status, passenger_medical_center.name AS passenger_medical_center, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_place_of_birth.name AS passenger_place_of_birth, passenger_district.name AS passenger_district FROM `passenger_details` 
INNER JOIN passenger_medical_status
ON
passenger_medical_status.passenger_medical_status_id = passenger_details.passenger_medical_status_id
INNER JOIN passenger_medical_center
ON
passenger_medical_center.passenger_medical_center_id = passenger_details.passenger_medical_center_id
INNER JOIN passenger_place_of_issue
ON
passenger_place_of_issue.passenger_place_of_issue_id = passenger_details.passenger_place_of_issue_id
INNER JOIN passenger_place_of_birth
ON
passenger_place_of_birth.passenger_place_of_birth_id = passenger_details.passenger_place_of_birth_id
INNER JOIN passenger_district
ON
passenger_district.passenger_district_id = passenger_details.passenger_district_id
WHERE passenger_passport_no = '$search_passport_no' AND status = 'Not Deleted'
    ") or die(mysqli_error($con));
}

}

?>
		

        <section class="container-fluid ">
        <section class="container-fluid">
        <form action="" class="">
            <section class="row">

                <section class="col-xl-3">
                    <span>Search File No.</span>
                    <input type="text" id="search_visa_file_no" name="search_visa_file_no" class="form-control input-box" placeholder="File.No" maxlength="15"/>
                </section>


                <div class=".showAll" id="showAll">
                  
                </div>

        


                

            </section>
        </form>
        </section>

    <br>

    
<section class="container-fluid">
    <section class="row">
        <section class="col-md-6"><h5 class=""> Passenger Details</h5></section>
        <section class="col-md-6 text-right"> <input type="button" class="btn-primary btn   " value="Add New Passenger" /></section>
    </section>
</section>    


    <section class="container-fluid">
        <form action="#" method="post" class="">
            <section class="row">

                <section class="col-xl-3 mt-2">
                  <input type="hidden" name="regent_id" id="regent_id" value="">
                  <input type="hidden" name="passenger_id" value="<?php echo @$std[0]?>">
                    <input value="<?php echo @$std['passenger_name'] ?>" name="passenger_name" type="text" class="mt-0 form-control input-box" placeholder="Name" maxlength="15"/>
                    
                    


                </section>

                <section class="col-xl-3 mt-2">
                    <input value="<?php echo @$std['passenger_father_name'] ?>" name="passenger_father_name" type="text" class="mt-0 form-control input-box" placeholder="Father Name" maxlength="15"/>
                    
                </section>

                <section class="col-xl-2 mt-2">
                    
                   <input value="<?php echo @$std['passenger_eno'] ?>" name="passenger_eno" type="text" class="mt-0 form-control input-box" placeholder="E No." maxlength="10"/>

                </section>

                <section class="col-xl-2 mt-2">
                    
                    <input value="<?php echo @$std['passenger_passport_no'] ?>" name="passenger_passport_no" type="text" class="mt-0 form-control input-box" placeholder="Passport No." maxlength="9"/>

                </section>

                <section class="col-xl-2 mt-2">
                    
                      <select name="passenger_medical_status_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                <option>Medical Status</option>
                                <?php
                                $query = mysqli_query($con, "select * from passenger_medical_status");    
                                while ($row=mysqli_fetch_array($query)) {
                                    ?>
                                    <option <?php if(@$std['passenger_medical_status_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                    <?php
                                }
                                ?>
                              </select>
                </section>

                 <section class="col-xl-3 mt-2">
                    
                    <input value="<?php echo @$std['passenger_name_urdu'] ?>" name="passenger_name_urdu" id="passenger_name_urdu" type="text" class="mt-0 form-control input-box" placeholder="Name In Urdu" dir="rtl" style="text-align: left"/>
                </section>

                <section class="col-xl-3 mt-2">
                    <input value="<?php echo @$std['passenger_father_name_urdu'] ?>" name="passenger_father_name_urdu" id="passenger_father_name_urdu" type="text" class="mt-0 form-control input-box" placeholder="Father Name In Urdu" dir="rtl" style="text-align: left"/>
                </section>

                <section class="col-md-2 mt-2">
                    
                     <input value="<?php echo @$std['passenger_dob'] ?>" name="passenger_dob" type="text" class="mt-0 form-control input-box" placeholder="Date Of Birth"/>
                </section>

                <section class="col-xl-2 mt-2">
                    
                    <input value="<?php echo @$std['passenger_date_of_issue'] ?>" name="passenger_date_of_issue" type="text" class="mt-0 form-control input-box" placeholder="Date Of Issue"/>

                </section>

                <section class="col-xl-2 mt-2">
                    
                     <input value="<?php echo @$std['passenger_date_of_expiry'] ?>" name="passenger_date_of_expiry" type="text" class="mt-0 form-control input-box" placeholder="Date of Expiry"/>

                </section>
              

                <section class="col-xl-3 mt-2">
                    
                    <input value="<?php echo @$std['passenger_national_identity_no'] ?>" name="passenger_national_identity_no" type="text" class="mt-0 form-control input-box" placeholder="National Identity No." maxlength="14"/>

                </section>

               

                <section class="col-xl-3 mt-2">
                    
                      <select name="passenger_medical_center_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                    <option>Medical Center Name</option>
                                    <?php
                                    $query = mysqli_query($con, "select * from passenger_medical_center");    
                                    while ($row=mysqli_fetch_array($query)) {
                                        ?>
                                        <option <?php if(@$std['passenger_medical_center_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                        <?php
                                    }
                                    ?>
                                  </select>
                </section>

               


                <section class="col-xl-3 mt-2">
                    
                     <select name="passenger_place_of_issue_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                    <option>Place Of Issue</option>
                                    <?php
                                    $query = mysqli_query($con, "select * from passenger_place_of_issue");    
                                    while ($row=mysqli_fetch_array($query)) {
                                        ?>
                                        <option <?php if(@$std['passenger_place_of_issue_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                        <?php
                                    }
                                    ?>
                                  </select>
                </section>


                <section class="col-xl-3 mt-2">
                    
                      <select name="passenger_place_of_birth_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                    <option>Place Of Birth</option>
                                    <?php
                                    $query = mysqli_query($con, "select * from passenger_place_of_birth");    
                                    while ($row=mysqli_fetch_array($query)) {
                                        ?>
                                        <option <?php if(@$std['passenger_place_of_birth_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                        <?php
                                    }
                                    ?>
                                  </select>
                </section>

                <section class="col-xl-3 mt-2">
                    
                     <select name="passenger_district_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                    <option>District</option>
                                    <?php
                                    $query = mysqli_query($con, "select * from passenger_district");    
                                    while ($row=mysqli_fetch_array($query)) {
                                        ?>
                                        <option <?php if(@$std['passenger_district_id'] == $row[0]){echo "selected"; }?> value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                                        <?php
                                    }
                                    ?>
                                  </select>

                </section>

                <section class="col-xl-3 mt-2">
                    
                    <input value="<?php echo @$std['passenger_qualification'] ?>" name="passenger_qualification" type="text" class="mt-0 form-control input-box" placeholder="Qualification" maxlength="14"/>
                </section>

                <section class="col-xl-3 mt-2">
                    
                    <input value="<?php echo @$std['passenger_address'] ?>" name="passenger_address" type="text" class="mt-0 form-control input-box" placeholder="Address"/>
                </section>
                <section class="col-xl-3 mt-2" >
                    
                    <input value="<?php echo @$std['passenger_country'] ?>" name="passenger_country" type="text" class="mt-0 form-control input-box" placeholder="Country" maxlength="14"/>

                </section>


                <section class="col-xl-3 mt-2">
                    
                    <input value="<?php echo @$std['passenger_submit_date'] ?>" name="passenger_submit_date" type="text" class="mt-0 form-control input-box" placeholder="Submit Date" maxlength="14"/>

                </section>
         </section>
         <section class="row" style="align-items: center;">
              <section class="col-5 m-auto text-center">
                    <!-- <a href="Visa-Form.php"> -->
                    
                    <!-- </a>-->
                    <?php
                    if(isset($_GET['edit_id']))
                    {
?>
<input type="submit" id ="update_passenger_details" name="update_passenger_details" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Update & Print Visa Form" />
<?php
                    }
                    else
                    {
?>
<input type="submit" id ="add_passenger_details" name="add_passenger_details" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print Visa Form" />
<?php
                    }
                    ?>

              </section>
          </section>
        </form>
    </section>
</section>
<hr>



<section class="container">
    
</section>

<br><br>
 


<section class="container-fluid">



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
            <span >Passport No.</span>
            <input id="search_passport_no" name="search_passport_no" type="text" class="form-control input-box" placeholder="Passport No" />
        </section>
        <section class="col-md-2">
            <input type="submit" name="search_passenger" value="Search" class="btn btn-primary mt-4">
        </section>
    </section>   
    </form>
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

            <table class="table table-responsive mb-5  " style="padding-bottom:130px;">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Name</th>
                      <th scope="col">Father_Name</th>
                      <th scope="col">Name_Urdu</th>
                      <th scope="col">Father_Name_Urdu</th>

                      <th scope="col">E_No.</th>
                      <th scope="col">Passport_No.</th>
                      <th scope="col">Medical_Status</th>
                      <th scope="col">Date_of_Birth</th>
                      <th scope="col">Date_of_Issue</th>
                      <th scope="col">Date_of_Expiry</th>
                      <th scope="col">CNIC_No.</th>
                      <th scope="col">Medical_Center</th>
                      <th scope="col">Place_of_Issue</th>
                      <th scope="col">Place_of_Birth</th>
                      <th scope="col">District</th>
                      <th scope="col">Qualification</th>
                      <th scope="col">Address</th>
                      <th scope="col">Country</th>
                      <th scope="col">Submit_Date</th>
                      <th scope="col">Marital_Status</th>

                      
                    </tr>
                  </thead>
                  <tbody>
                   
        
            <?php
           if(isset($_POST['search_passenger']))
           {
            $row_count=mysqli_num_rows($search_query);
            if($row_count>0)
            {
                $count=1;
                while ($std=mysqli_fetch_array($search_query)) {
                    ?>
                    <tr>
                     <th scope="row"><?php echo $count ?></th>

                     <td>

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                <?php
                                if($std['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                                {
                                    ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Passenger-Detail.php?edit_id=<?php echo $std[0] ?>" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Passenger-Detail.php?delete_id=<?php echo $std[0] ?>"  class="text-dark p-2">Delete</a><br>
                                    <?php
                                }
                                ?>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php?passenger_id=<?php echo $std[0] ?>" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            
                            </div>
                    </div>
                        </td>
                        
                     <td><?php echo $std['passenger_name'] ?></td>
                     <td><?php echo $std['passenger_father_name'] ?></td>
                     <td><?php echo $std['passenger_name_urdu'] ?></td>
                     <td><?php echo $std['passenger_father_name_urdu'] ?></td>
                     <td><?php echo $std['passenger_eno'] ?></td>
                    
                     <td><?php echo $std['passenger_passport_no'] ?></td>
                     <td><?php echo $std['passenger_medical_status'] ?></td>
                     <td><?php echo $std['passenger_dob'] ?></td>
                     <td><?php echo $std['passenger_date_of_issue'] ?></td>
                    
                    <td><?php echo $std['passenger_date_of_expiry'] ?></td>
                    <td><?php echo $std['passenger_national_identity_no'] ?></td>
                    <td><?php echo $std['passenger_medical_center'] ?></td>
                    <td><?php echo $std['passenger_place_of_issue'] ?></td>
                    
                    <td><?php echo $std['passenger_place_of_birth'] ?></td>
                    <td><?php echo $std['passenger_district'] ?></td>
                    <td><?php echo $std['passenger_qualification'] ?></td>
                    <td><?php echo $std['passenger_address'] ?></td>
                    
                    <td><?php echo $std['passenger_country'] ?></td>
                    <td><?php echo $std['passenger_submit_date'] ?></td>
                    <td><?php echo "Marital Status" ?></td>
                   
                </tr>
                    <?php
                    $count++;
                }
            }
            else
            {
                echo "<script>alert('Please input right fields')</script>";
            }
           }
           else
           {
         $query = mysqli_query($con, "
SELECT passenger_details.*, passenger_medical_status.name AS passenger_medical_status, passenger_medical_center.name AS passenger_medical_center, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_place_of_birth.name AS passenger_place_of_birth, passenger_district.name AS passenger_district FROM `passenger_details` 
INNER JOIN passenger_medical_status
ON
passenger_medical_status.passenger_medical_status_id = passenger_details.passenger_medical_status_id
INNER JOIN passenger_medical_center
ON
passenger_medical_center.passenger_medical_center_id = passenger_details.passenger_medical_center_id
INNER JOIN passenger_place_of_issue
ON
passenger_place_of_issue.passenger_place_of_issue_id = passenger_details.passenger_place_of_issue_id
INNER JOIN passenger_place_of_birth
ON
passenger_place_of_birth.passenger_place_of_birth_id = passenger_details.passenger_place_of_birth_id
INNER JOIN passenger_district
ON
passenger_district.passenger_district_id = passenger_details.passenger_district_id
WHERE status = 'Not Deleted'
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
                                <?php
                                if($row['user_id'] == $_SESSION['user_id'] || $role == 'Admin')
                                {
                                    ?>
                                    <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Passenger-Detail.php?edit_id=<?php echo $row[0] ?>" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Regent-Entry-Passenger-Detail.php?delete_id=<?php echo $row[0] ?>"  class="text-dark p-2">Delete</a><br>
                                    <?php
                                }
                                ?>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php?passenger_id=<?php echo $row[0] ?>" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                            </div>
                    </div>
                        </td>
                        
                     <td><?php echo $row['passenger_name'] ?></td>
                     <td><?php echo $row['passenger_father_name'] ?></td>
                     <td><?php echo $row['passenger_name_urdu'] ?></td>
                     <td><?php echo $row['passenger_father_name_urdu'] ?></td>
                     <td><?php echo $row['passenger_eno'] ?></td>
                    
                     <td><?php echo $row['passenger_passport_no'] ?></td>
                     <td><?php echo $row['passenger_medical_status'] ?></td>
                     <td><?php echo $row['passenger_dob'] ?></td>
                     <td><?php echo $row['passenger_date_of_issue'] ?></td>
                    
                    <td><?php echo $row['passenger_date_of_expiry'] ?></td>
                    <td><?php echo $row['passenger_national_identity_no'] ?></td>
                    <td><?php echo $row['passenger_medical_center'] ?></td>
                    <td><?php echo $row['passenger_place_of_issue'] ?></td>
                    
                    <td><?php echo $row['passenger_place_of_birth'] ?></td>
                    <td><?php echo $row['passenger_district'] ?></td>
                    <td><?php echo $row['passenger_qualification'] ?></td>
                    <td><?php echo $row['passenger_address'] ?></td>
                    
                    <td><?php echo $row['passenger_country'] ?></td>
                    <td><?php echo $row['passenger_submit_date'] ?></td>
                    <td><?php echo "Marital Status" ?></td>
                   
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



<script src="js/jquery-fab-button.js">
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#search_visa_file_no').on('keyup', function(){
      var search_visa_file_no = $('#search_visa_file_no').val();
      
      if(search_visa_file_no !== '')
      {
       
        $.ajax({
        url: 'fetchfileno.php',
          method: 'post',
          data: {"search": search_visa_file_no},
          dataType: "text",
          success: function(data)
          {
            $('#showAll').html(data);
            var fetch_regent_id = $("#fetch_regent_id").val();
            var fetch_visa_quantity_no = $("#fetch_visa_quantity_no").val();
            if(fetch_visa_quantity_no<1)
            {
              $("#add_passenger_details").prop('disabled', true);
            }
            else
            {
            $("#add_passenger_details").prop('disabled', false);
            }
            $("#regent_id").val(fetch_regent_id);
          },
          error: function(error)
          {
            console.log(error);
          }
        });
        
        

      }
      else
      {
        $('#showAll').html("");
      }

    });




  });
</script>

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
<script src="js/urdutextbox.js"></script>
<script type="text/javascript">
    window.onload = myOnload;

function myOnload(evt){
    MakeTextBoxUrduEnabled(passenger_name_urdu);//enable Urdu in html text box
    MakeTextBoxUrduEnabled(passenger_father_name_urdu);//enable Urdu in html text area
}
</script>