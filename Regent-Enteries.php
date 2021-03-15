<?php

  include('connect.php');
  @session_start();

$role = @$_SESSION['role'];

if($role !== "Employee" && $role !== "Admin")
{
    header("location: index.php");
}


if(isset($_POST['submit']))
{
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

    $query = mysqli_query($con, "INSERT INTO `regents`(`user_id`, `visa_date`, `visa_file_no`, `visa_embassy_id`, `visa_sponsor_name`, `visa_permission_status_id`, `visa_profession_id`, `visa_contact_pak`, `visa_contact_saudia`, `visa_reg_date`, `visa_reg_no`, `visa_no`, `visa_sponsor_address`, `visa_co_agent_pak_id`, `visa_status_id`, `visa_price`, `visa_sponsor_id`, `visa_date2`, `visa_agent_from_saudia_id`, `visa_remarks`, `passenger_name`, `passenger_name_urdu`, `passenger_national_identity_no`, `passenger_district_id`, `passenger_father_name`, `passenger_father_name_urdu`, `passenger_medical_center_id`, `passenger_qualification`, `passenger_eno`, `passenger_dob`, `passenger_place_of_issue_id`, `passenger_address`, `passenger_passport_no`, `passenger_date_of_issue`, `passenger_medical_status_id`, `passenger_date_of_expiry`, `passenger_place_of_birth_id`, `passenger_country`, `passenger_submit_date`, `agreements_contract`, `agreements_salary`, `agreements_permission_number`, `agreements_permission_date`, `nominee_full_name`, `nominee_age`, `nominee_relation`, `nominee_cnic`, `nominee_address`, `current_date_submission`, `type`) VALUES (
         '$user_id', '$visa_date', '$visa_file_no', '$visa_embassy_id', '$visa_sponsor_name', '$visa_permission_status_id', '$visa_profession_id', '$visa_contact_pak', '$visa_contact_saudia', '$visa_reg_date', '$visa_reg_no', '$visa_no', '$visa_sponsor_address', '$visa_co_agent_pak_id', '$visa_status_id', '$visa_price', '$visa_sponsor_id', '$visa_date2', '$visa_agent_from_saudia_id', '$visa_remarks', '$passenger_name', '$passenger_name_urdu', '$passenger_national_identity_no', '$passenger_district_id', '$passenger_father_name', '$passenger_father_name_urdu', '$passenger_medical_center_id', '$passenger_qualification', '$passenger_eno', '$passenger_dob', '$passenger_place_of_issue_id', '$passenger_address', '$passenger_passport_no', '$passenger_date_of_issue', '$passenger_medical_status_id', '$passenger_date_of_expiry', '$passenger_place_of_birth_id', '$passenger_country', '$passenger_submit_date', '$agreements_contract', '$agreements_salary', '$agreements_permission_number', '$agreements_permission_date', '$nominee_full_name', '$nominee_age', '$nominee_relation', '$nominee_cnic', '$nominee_address', '$current_date_submission', '$type'
)");

    if($query>0)
    {
        echo "<script>window.location.href='Regent-Reporrts.php';</script>";
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


include('header.php');
//FOR UPDATE
if(isset($_POST['updateall']))
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
        UPDATE `regents` SET `user_id`='$user_id',`visa_date`='$visa_date',`visa_file_no`='$visa_file_no',`visa_embassy_id`='$visa_embassy_id',`visa_sponsor_name`='$visa_sponsor_name',`visa_permission_status_id`='$visa_permission_status_id',`visa_profession_id`='$visa_profession_id',`visa_contact_pak`='$visa_contact_pak',`visa_contact_saudia`='$visa_contact_saudia',`visa_reg_date`='$visa_reg_date',`visa_reg_no`='$visa_reg_no',`visa_no`='$visa_no',`visa_sponsor_address`='$visa_sponsor_address',`visa_co_agent_pak_id`='$visa_co_agent_pak_id',`visa_status_id`='$visa_status_id',`visa_price`='$visa_price',`visa_sponsor_id`='$visa_sponsor_id',`visa_date2`='$visa_date2',`visa_agent_from_saudia_id`='$visa_agent_from_saudia_id',`visa_remarks`='$visa_remarks',`passenger_name`='$passenger_name',`passenger_name_urdu`='$passenger_name_urdu',`passenger_national_identity_no`='$passenger_national_identity_no',`passenger_district_id`='$passenger_district_id',`passenger_father_name`='$passenger_father_name',`passenger_father_name_urdu`='$passenger_father_name_urdu',`passenger_medical_center_id`='$passenger_medical_center_id',`passenger_qualification`='$passenger_qualification',`passenger_eno`='$passenger_eno',`passenger_dob`='$passenger_dob',`passenger_place_of_issue_id`='$passenger_place_of_issue_id',`passenger_address`='$passenger_address',`passenger_passport_no`='$passenger_passport_no',`passenger_date_of_issue`='$passenger_date_of_issue',`passenger_medical_status_id`='$passenger_medical_status_id',`passenger_date_of_expiry`='$passenger_date_of_expiry',`passenger_place_of_birth_id`='$passenger_place_of_birth_id',`passenger_country`='$passenger_country',`passenger_submit_date`='$passenger_submit_date',`agreements_contract`='$agreements_contract',`agreements_salary`='$agreements_salary',`agreements_permission_number`='$agreements_permission_number',`agreements_permission_date`='$agreements_permission_date',`nominee_full_name`='$nominee_full_name',`nominee_age`='$nominee_age',`nominee_relation`='$nominee_relation',`nominee_cnic`='$nominee_cnic',`nominee_address`='$nominee_address' WHERE regent_id = '$regent_id';
        ") or die(mysqli_error($con));

    if($query)
    {
        echo "<script>window.location.href='Regent-Reporrts.php';</script>";
    }
    else
    {
        echo "<script>alert('Error');</script>";
    }
}
 
?>
	

<?php
if(!isset($_GET['edit_id']))
{
?>

<form action="#" method="post" class="">
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
                    <input value="<?php echo @$std['visa_reg_date'] ?>" name="visa_reg_date" type="text" class="form-control input-box"  placeholder="Registration Date"/>
                </section>

                <section class="col-xl-3">
                    <input value="<?php echo @$std['visa_reg_no'] ?>" name="visa_reg_no" type="text" class="form-control input-box" placeholder="Registration No."/>
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

<hr>

<section class="container-fluid ">
    <h5> Passenger Details</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-3 mt-2">
                    <span class="lock ">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <!-- <input type="text" placeholder="'Unlock' me by clicking the lock icon" /> -->
                            <input value="<?php echo @$std['passenger_name'] ?>" name="passenger_name" type="text" class="mt-0 form-control input-box" placeholder="Name" maxlength="15"/>
                        </div>
                    </span>
                    


                </section>

                <section class="col-xl-3 mt-2">
                    
                    <span class="lock ">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_father_name'] ?>" name="passenger_father_name" type="text" class="mt-0 form-control input-box" placeholder="Father Name" maxlength="15"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_eno'] ?>" name="passenger_eno" type="text" class="mt-0 form-control input-box" placeholder="E No." maxlength="10"/>
                        </div>
                    </span>

                </section>

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_passport_no'] ?>" name="passenger_passport_no" type="text" class="mt-0 form-control input-box" placeholder="Passport No." maxlength="9"/>
                        </div>
                    </span>

                </section>

                <section class="col-xl-2 mt-2">
                    
                      <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <select style="border: none;" name="passenger_medical_status_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                        </div>
                    </span>
                </section>

                 <section class="col-xl-3 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_name_urdu'] ?>" name="passenger_name_urdu" type="text" class="mt-0 form-control input-box" placeholder="Name In Urdu"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3 mt-2">
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_father_name_urdu'] ?>" name="passenger_father_name_urdu" type="text" class="mt-0 form-control input-box" placeholder="Father Name In Urdu"/>
                        </div>
                    </span>
                </section>

                <section class="col-md-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="false" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_dob'] ?>" name="passenger_dob" type="text" class="mt-0 form-control input-box" placeholder="Date Of Birth"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="false" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_date_of_issue'] ?>" name="passenger_date_of_issue" type="text" class="mt-0 form-control input-box" placeholder="Date Of Issue"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2 mt-2">
                    
                     <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="false" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_date_of_expiry'] ?>" name="passenger_date_of_expiry" type="text" class="mt-0 form-control input-box" placeholder="Date of Expiry"/>
                        </div>
                    </span>
                </section>
              

                <section class="col-xl-3 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="false" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_national_identity_no'] ?>" name="passenger_national_identity_no" type="text" class="mt-0 form-control input-box" placeholder="National Identity No." maxlength="14"/>
                        </div>
                    </span>
                </section>

               

                <section class="col-xl-3 mt-2">
                    
                      <span class="lock">
                            <div class=" input-box p-0 " style="height: 35px !important">
                                <input type="checkbox" disabled="true" />
                                <span></span>
                                <select style="border: none;" name="passenger_medical_center_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>

               


                <section class="col-xl-3 mt-2">
                    
                      <span class="lock">
                            <div class=" input-box p-0 " style="height: 35px !important">
                                <input type="checkbox" disabled="true" />
                                <span></span>
                                <select style="border: none;" name="passenger_place_of_issue_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>


                <section class="col-xl-3 mt-2">
                    
                      <span class="lock">
                            <div class=" input-box p-0 " style="height: 35px !important">
                                <input type="checkbox" disabled="true" />
                                <span></span>
                                <select style="border: none;" name="passenger_place_of_birth_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>

                <section class="col-xl-3 mt-2">
                    
                      <span class="lock">
                            <div class=" input-box p-0 " style="height: 35px !important">
                                <input type="checkbox" disabled="true" />
                                <span></span>
                                <select style="border: none;" name="passenger_district_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>

                <section class="col-xl-3 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_qualification'] ?>" name="passenger_qualification" type="text" class="mt-0 form-control input-box" placeholder="Qualification" maxlength="14"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_address'] ?>" name="passenger_address" type="text" class="mt-0 form-control input-box" placeholder="Address"/>
                        </div>
                    </span>
                </section>
                <section class="col-xl-3 mt-2" >
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_country'] ?>" name="passenger_country" type="text" class="mt-0 form-control input-box" placeholder="Country" maxlength="14"/>
                        </div>
                    </span>
                </section>


                <section class="col-xl-3 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['passenger_submit_date'] ?>" name="passenger_submit_date" type="text" class="mt-0 form-control input-box" placeholder="Submit Date" maxlength="14"/>
                        </div>
                    </span>
                </section>
         </section>
    </section>

</section>

<hr>

<section class="container-fluid ">
    <h5>Agreements And Permission No.</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['agreements_contract'] ?>" name="agreements_contract" type="text" class="mt-0 form-control input-box" placeholder="Contract" maxlength="10"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input style="border: none;" value="<?php echo @$std['agreements_salary'] ?>" name="agreements_salary" type="number" class="mt-0 form-control input-box" placeholder="Salary" maxlength="10"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2 mt-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 " style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['agreements_permission_number'] ?>" name="agreements_permission_number" type="text" class="mt-0 form-control input-box" placeholder="Permission No." maxlength="10"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 10px; font-size: 12px;">Permission Date</p></section>

                        <section class="col-9 mt-2">
                            
                            <span class="lock">
                                <div class=" input-box p-0 " style="height: 35px !important">
                                    <input type="checkbox" disabled="true" />
                                    <span></span>
                                    <input value="<?php echo @$std['agreements_permission_date'] ?>" name="agreements_permission_date" type="date" class="mt-0 form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/>
                                </div>
                            </span>
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
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['nominee_full_name'] ?>" name="nominee_full_name" type="text" class="mt-0 form-control input-box" placeholder="Nominee Full Name" maxlength="15"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input style="border: none;" value="<?php echo @$std['nominee_age'] ?>" name="nominee_age" type="number" class=" mt-0 form-control input-box" placeholder="Nominee Age In Years" maxlength="2"/>
                        </div>
                    </span>
                </section>

               

                <section class="col-xl-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <select style="border: none;" name="nominee_relation" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
                                <option>Select Relation</option>
                                <option <?php if(@$std['nominee_relation'] == "Father" ){echo "selected";}?> value="Father">Father</option>
                                <option <?php if(@$std['nominee_relation'] == "Mother" ){echo "selected";}?> value="Mother">Mother</option>
                                <option <?php if(@$std['nominee_relation'] == "Sister" ){echo "selected";}?> value="Sister">Sister</option>
                                <option <?php if(@$std['nominee_relation'] == "Brother" ){echo "selected";}?> value="Brother">Brother</option>
                                <option <?php if(@$std['nominee_relation'] == "Wife" ){echo "selected";}?> value="Wife">Wife</option>
                                <option <?php if(@$std['nominee_relation'] == "Son" ){echo "selected";}?> value="Son">Son</option>
                                <option <?php if(@$std['nominee_relation'] == "Daughter" ){echo "selected";}?> value="Daughter">Daughter</option>
                            </select>
                        </div>
                    </span>
                </section>


                <section class="col-xl-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['nominee_cnic'] ?>" name="nominee_cnic" type="text" class="mt-0 form-control input-box" placeholder="Nominee CNIC No." maxlength="15"/>
                        </div>
                    </span>
                </section>

               

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" disabled="true" />
                            <span></span>
                            <input value="<?php echo @$std['nominee_address'] ?>" name="nominee_address" type="text" class="mt-0 form-control input-box" placeholder="Address"/>
                        </div>
                    </span>
                </section>


                

            </section>
    </section>
    

</section>

<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
          <!--   <div class="form-check form-check-inline"  style="position: relative; top: 30px;" >
                <input class="form-check-input "type="checkbox" id="inlineCheckbox1" value="option1" style="transform: scale(1.5); ">
                <label class="form-check-label" for="inlineCheckbox1" style="font-size: larger; font-weight: bold;">Barcode</label>
              </div>
              
              <div class="form-check form-check-inline" style="position: relative; top: 30px;" >
                <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2" style="transform: scale(1.5);">
                <label class="form-check-label " for="inlineCheckbox2" style="font-size: larger; font-weight: bold;">Visa Form</label>
              </div> -->
              <hr>
              <?php
              if(isset($_GET['edit_id']))
              {
                ?>
                <input name="updateall" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Update & Print" />  
                <?php
              }
              else
              {
                ?>
                <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />  
                <?php
              }
              ?>		

        </section>
    </section>
</section>
</form>
<?php
}
else
{
    ?>
<!-- =========EDIT WORK======= -->
<form action="#" method="post" class="">
<section class="container-fluid">
    <h5> Visa Detail</h5>

    <section class="container-fluid">
      
            <section class="row">

                <section class="col-xl-3">
                    <input type="hidden" name="id" value="<?php echo @$std[0]?>">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required name="visa_date" value="<?php echo @$std['visa_date'] ?>" type="date" class="mt-0 form-control input-box" placeholder="File No." maxlength="5"/>
                        </div>
                    </span>

                </section>

                <section class="col-xl-2">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required name="visa_file_no" value="<?php echo @$std['visa_file_no'] ?>" type="text"  class="mt-0 form-control input-box" placeholder="File No." maxlength="5"/>
                        </div>
                    </span>
                </section>

                <section required class="col-xl-2">
                    
                      <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <select style="border: none;" name="visa_embassy_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required value="<?php echo @$std['visa_no'] ?>" name="visa_no" type="text" class="mt-0 form-control input-box" placeholder="Visa No." maxlength="10"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required value="<?php echo @$std['visa_sponsor_id'] ?>" name="visa_sponsor_id" type="text" class="mt-0 form-control input-box" placeholder="Sponsor ID" maxlength="10"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-6">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required value="<?php echo @$std['visa_sponsor_name'] ?>" name="visa_sponsor_name" type="text" class="mt-0 form-control input-box" placeholder="Sponsor Name"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input required value="<?php echo @$std['visa_sponsor_address'] ?>" name="visa_sponsor_address" type="text" class="mt-0 form-control input-box" placeholder="Sponsor Address"/>
                        </div>
                    </span>

                </section>

                <section class="col-xl-3">                   
                      
                      <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <input value="<?php echo @$std['visa_date2'] ?>" name="visa_date2" type="text" class="mt-0 form-control input-box hijri-date-input" placeholder="Visa Date"/>    
                        </div>
                    </span>
                </section>


                <section class="col-xl-3">
                    
                      <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <select style="border: none;" name="visa_permission_status_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                      <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                            <select style="border: none;" name="visa_profession_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                      <span class="lock">
                            <div class=" input-box p-0 mt-2" style="height: 35px !important">
                                <input type="checkbox" />
                                <span></span>
                                <select style="border: none;" name="visa_co_agent_pak_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>

                <section class="col-xl-3">
                    
                      <span class="lock">
                            <div class=" input-box p-0 mt-2" style="height: 35px !important">
                                <input type="checkbox" />
                                <span></span>
                                <select style="border: none;" name="visa_agent_from_saudia_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                            </div>
                        </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                            <div class=" input-box p-0 mt-2" style="height: 35px !important">
                                <input type="checkbox" />
                                <span></span>
                                <input value="<?php echo @$std['visa_contact_pak'] ?>" name="visa_contact_pak" type="text" class="mt-0 form-control input-box" maxlength="15" placeholder="Contact No. Pakistan"/>
                            </div>
                        </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                           <input value="<?php echo @$std['visa_contact_saudia'] ?>" name="visa_contact_saudia" type="text" class="mt-0 form-control input-box" maxlength="15" placeholder="Contact No. Saudia"/>
                        </div>
                    </span>
                </section>


                <section class="col-xl-3">
                    
                      <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                           <select style="border: none;" name="visa_status_id" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                        </div>
                    </span>
                </section>


                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                           <input value="<?php echo @$std['visa_remarks'] ?>" name="visa_remarks" type="text" class="mt-0 form-control input-box"  placeholder="Remarks"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                           <input value="<?php echo @$std['visa_reg_date'] ?>" name="visa_reg_date" type="text" class="mt-0 form-control input-box"  placeholder="Registration Date"/>
                        </div>
                    </span>
                </section>

                <section class="col-xl-3">
                    
                    <span class="lock">
                        <div class=" input-box p-0 mt-2" style="height: 35px !important">
                            <input type="checkbox" />
                            <span></span>
                           <input value="<?php echo @$std['visa_reg_no'] ?>" name="visa_reg_no" type="text" class="mt-0 form-control input-box" placeholder="Registration No."/>
                        </div>
                    </span>
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

<hr>

<section class="container-fluid ">
    <h5> Passenger Details</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-3 mt-2">
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
    </section>

</section>

<hr>

<section class="container-fluid ">
    <h5>Agreements And Permission No.</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-2 mt-2">
                    
                    <input value="<?php echo @$std['agreements_contract'] ?>" name="agreements_contract" type="text" class="mt-0 form-control input-box" placeholder="Contract" maxlength="10"/>

                </section>

                <section class="col-xl-2 mt-2">
                    <input value="<?php echo @$std['agreements_salary'] ?>" name="agreements_salary" type="number" class="mt-0 form-control input-box" placeholder="Salary" maxlength="10"/>

                </section>

                <section class="col-xl-2 mt-2">
                    
                    <input value="<?php echo @$std['agreements_permission_number'] ?>" name="agreements_permission_number" type="text" class="mt-0 form-control input-box" placeholder="Permission No." maxlength="10"/>

                </section>

                <section class="col-xl-3">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 10px; font-size: 12px;">Permission Date</p></section>

                        <section class="col-9 mt-2">
                            
                            <input value="<?php echo @$std['agreements_permission_date'] ?>" name="agreements_permission_date" type="date" class="mt-0 form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/>
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
                    
                    <input value="<?php echo @$std['nominee_full_name'] ?>" name="nominee_full_name" type="text" class="mt-0 form-control input-box" placeholder="Nominee Full Name" maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <input value="<?php echo @$std['nominee_age'] ?>" name="nominee_age" type="number" class=" mt-0 form-control input-box" placeholder="Nominee Age In Years" maxlength="2"/>
                </section>

               

                <section class="col-xl-2">
                    
                    <select name="nominee_relation" class="mt-0 form-control input-box" id="exampleFormControlSelect1">
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
                    
                    <input value="<?php echo @$std['nominee_cnic'] ?>" name="nominee_cnic" type="text" class="mt-0 form-control input-box" placeholder="Nominee CNIC No." maxlength="15"/>
                </section>

               

                <section class="col-xl-3">
                     <input value="<?php echo @$std['nominee_address'] ?>" name="nominee_address" type="text" class="mt-0 form-control input-box" placeholder="Address"/>
                </section>


                

            </section>
    </section>
    

</section>

<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
          <!--   <div class="form-check form-check-inline"  style="position: relative; top: 30px;" >
                <input class="form-check-input "type="checkbox" id="inlineCheckbox1" value="option1" style="transform: scale(1.5); ">
                <label class="form-check-label" for="inlineCheckbox1" style="font-size: larger; font-weight: bold;">Barcode</label>
              </div>
              
              <div class="form-check form-check-inline" style="position: relative; top: 30px;" >
                <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2" style="transform: scale(1.5);">
                <label class="form-check-label " for="inlineCheckbox2" style="font-size: larger; font-weight: bold;">Visa Form</label>
              </div> -->
              <hr>
              <?php
              if(isset($_GET['edit_id']))
              {
                ?>
                <input name="updateall" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Update & Print" />  
                <?php
              }
              else
              {
                ?>
                <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />  
                <?php
              }
              ?>        

        </section>
    </section>
</section>
</form>

    <?php
}
?>


<br>

<hr>	









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

