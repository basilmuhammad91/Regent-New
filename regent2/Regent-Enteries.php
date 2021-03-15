<?php

  include('connect.php');
  include('header.php');

if(isset($_POST['submit']))
{
    $user_id = 10;
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

    $query = mysqli_query($con, "INSERT INTO `regents`(`user_id`, `visa_date`, `visa_file_no`, `visa_embassy_id`, `visa_sponsor_name`, `visa_permission_status_id`, `visa_profession_id`, `visa_contact_pak`, `visa_contact_saudia`, `visa_reg_date`, `visa_reg_no`, `visa_no`, `visa_sponsor_address`, `visa_co_agent_pak_id`, `visa_status_id`, `visa_price`, `visa_sponsor_id`, `visa_date2`, `visa_agent_from_saudia_id`, `visa_remarks`, `passenger_name`, `passenger_name_urdu`, `passenger_national_identity_no`, `passenger_district_id`, `passenger_father_name`, `passenger_father_name_urdu`, `passenger_medical_center_id`, `passenger_qualification`, `passenger_eno`, `passenger_dob`, `passenger_place_of_issue_id`, `passenger_address`, `passenger_passport_no`, `passenger_date_of_issue`, `passenger_medical_status_id`, `passenger_date_of_expiry`, `passenger_place_of_birth_id`, `passenger_country`, `passenger_submit_date`, `agreements_contract`, `agreements_salary`, `agreements_permission_number`, `agreements_permission_date`, `nominee_full_name`, `nominee_age`, `nominee_relation`, `nominee_cnic`, `nominee_address`) VALUES (
         '$user_id', '$visa_date', '$visa_file_no', '$visa_embassy_id', '$visa_sponsor_name', '$visa_permission_status_id', '$visa_profession_id', '$visa_contact_pak', '$visa_contact_saudia', '$visa_reg_date', '$visa_reg_no', '$visa_no', '$visa_sponsor_address', '$visa_co_agent_pak_id', '$visa_status_id', '$visa_price', '$visa_sponsor_id', '$visa_date2', '$visa_agent_from_saudia_id', '$visa_remarks', '$passenger_name', '$passenger_name_urdu', '$passenger_national_identity_no', '$passenger_district_id', '$passenger_father_name', '$passenger_father_name_urdu', '$passenger_medical_center_id', '$passenger_qualification', '$passenger_eno', '$passenger_dob', '$passenger_place_of_issue_id', '$passenger_address', '$passenger_passport_no', '$passenger_date_of_issue', '$passenger_medical_status_id', '$passenger_date_of_expiry', '$passenger_place_of_birth_id', '$passenger_country', '$passenger_submit_date', '$agreements_contract', '$agreements_salary', '$agreements_permission_number', '$agreements_permission_date', '$nominee_full_name', '$nominee_age', '$nominee_relation', '$nominee_cnic', '$nominee_address'
)");

    if($query>0)
    {
        echo "<script>alert('Submitted !');</script>";
    }
    else
    {
        echo "<script>alert('Submitted !');</script>";
    }

}
 
?>



			
			
            <section class="mr-auto text-center">
                <i class="fas fa-user-circle" style="font-size: 30px; color: white;"></i>
                <a class="nav-link text-light list-link" href="#" >Admin</a>
                <section class="main1 showhidebox" >
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Profile</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s bg-dark" href="#" > Logout</a>
                </section>
            </section>	
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light showhide1"><i class="fas fa-user"></i> User</a>
                  <section class="main1 showhidebox" >
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Employe-list.html" ><b>o</b> Employee</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Field-employe-list.html" ><b>o</b> Field Employee</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-list.html" ><b>o</b> Agancy</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Client.html" ><b>o</b> Client</a>
                  </section>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light showhide1"><i class="fas fa-list"></i> Enteries</a>
                  <section class="main1 showhidebox" >
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Enteries.html" ><b>o</b> Regent Enteries</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Enteries.html" ><b>o</b> All Case Enteries</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-Balance.html" ><b>o</b> Expenses</a>
                  </section>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light showhide1"><i class="fa fa-chart-bar"></i> Reports</a>
                  <section class="main1 showhidebox" >
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Reporrts.html" ><b>o</b> Regent Reports</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Reports.html" ><b>o</b> All Reports</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-balance-list.html" ><b>o</b> Expense Reports</a>
                    
                  </section>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light showhide1" ><i class="fa fa-paste"></i> Ledger</a>
                    <section class="main1 showhidebox" >
                        <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-ledger.html" ><b>o</b> Agency Ledger</a>
                        <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-ledger.html" ><b>o</b> Regent Ledger</a>
                        <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Embassy.html" ><b>o</b> Embassy</a> 
                        <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="doc.html" ><b>o</b> Open Visa Form</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="export.html" ><b>o</b> Export Excel </a>
                    </section>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="help.html"><i class="fas fa-question-circle"></i> Help</a>
                </li>
                
              </ul>
              
                  <button class="btn text-primary main bg-light showhide1 ml-auto"  >
                  <i class="fas fa-arrows-alt-v " style="font-size: 15px; line-height: 0;"></i>
                </button>
    
            </div>
        </nav>
	
	
		<!--------------------------------------------------------->
		<br>

	
<form action="#" method="post" class="">
<section class="container-fluid">
    <h5> Visa Detail</h5>


    <section class="container-fluid">
      
            <section class="row">

                <section class="col-xl-2">
                    <input name="visa_date" type="date"  class="form-control input-box" placeholder="File No." maxlength="5"/>
                </section>

                <section class="col-xl-2">
                    <input name="visa_file_no" type="text"  class="form-control input-box" placeholder="File No." maxlength="5"/>
                </section>

                <section class="col-xl-2">
                    <select name="visa_embassy_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <?php
                        $query = mysqli_query($con, "select * from visa_embassy");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <input name="visa_no" type="text" class="form-control input-box" placeholder="Visa No." maxlength="10"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_sponsor_id" type="text" class="form-control input-box" placeholder="Sponsor ID" maxlength="10"/>
                </section>

                <section class="col-xl-6">
                    <input name="visa_sponsor_name" type="text" class="form-control input-box" placeholder="Sponsor Name"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_sponsor_address" type="text" class="form-control input-box" placeholder="Sponsor Address"/>
                </section>

                <section class="col-xl-3">                   
                      <input name="visa_date2" type="text" class="form-control input-box hijri-date-input" placeholder="Visa Date"/>    
                </section>


                <section class="col-xl-3">
                    <select name="visa_permission_status_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Select Permission Status</option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_permission_status");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
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
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <select name="visa_co_agent_pak_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>C/O Agent From Pakistan</option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_co_agent_pak");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
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
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <input name="visa_contact_pak" type="text" class="form-control input-box" maxlength="15" placeholder="Contact No. Pakistan"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_contact_saudia" type="text" class="form-control input-box" maxlength="15" placeholder="Contact No. Saudia"/>
                </section>


                <section class="col-xl-3">
                    <select name="visa_status_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Visa Status</option>
                        <?php
                        $query = mysqli_query($con, "select * from visa_status");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>


                <section class="col-xl-3">
                    <input name="visa_remarks" type="text" class="form-control input-box"  placeholder="Remarks"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_reg_date" type="text" class="form-control input-box"  placeholder="Registration Date"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_reg_no" type="text" class="form-control input-box" placeholder="Registration No."/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_price" type="text" class="form-control input-box"  placeholder="Price"/>
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
                    <input name="passenger_name" type="text" class="form-control input-box" placeholder="Name" maxlength="15"/>
                </section>

                <section class="col-xl-3">
                    <input name="passenger_father_name" type="text" class="form-control input-box" placeholder="Father Name" maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_eno" type="text" class="form-control input-box" placeholder="E No." maxlength="10"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_passport_no" type="text" class="form-control input-box" placeholder="Passport No." maxlength="9"/>
                </section>

                <section class="col-xl-2">
                    <select name="passenger_medical_status_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Medical Status</option>
                        <?php
                        $query = mysqli_query($con, "select * from passenger_medical_status");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                 <section class="col-xl-3">
                    <input name="passenger_name_urdu" type="text" class="form-control input-box" placeholder="Name In Urdu"/>
                </section>

                <section class="col-xl-3">
                    <input name="passenger_father_name_urdu" type="text" class="form-control input-box" placeholder="Father Name In Urdu"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_dob" type="text" class="form-control input-box" placeholder="Date Of Birth"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_date_of_issue" type="text" class="form-control input-box" placeholder="Date Of Issue"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_date_of_expiry" type="text" class="form-control input-box" placeholder="Date of Expiry"/>
                </section>
              

                <section class="col-xl-3">
                    <input name="passenger_national_identity_no" type="text" class="form-control input-box" placeholder="National Identity No." maxlength="14"/>
                </section>

               

                <section class="col-xl-3">
                    <select name="passenger_medical_center_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Medical Center Name</option>
                        <?php
                        $query = mysqli_query($con, "select * from passenger_medical_center");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

               


                <section class="col-xl-3">
                    <select name="passenger_place_of_issue_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Place Of Issue</option>
                        <?php
                        $query = mysqli_query($con, "select * from passenger_place_of_issue");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>


                <section class="col-xl-3">
                    <select name="passenger_place_of_birth_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Place Of Birth</option>
                        <?php
                        $query = mysqli_query($con, "select * from passenger_place_of_birth");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <select name="passenger_district_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>District</option>
                        <?php
                        $query = mysqli_query($con, "select * from passenger_district");    
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
                            <?php
                        }
                        ?>
                      </select>
                </section>

                <section class="col-xl-3">
                    <input name="passenger_qualification" type="text" class="form-control input-box" placeholder="Qualification" maxlength="14"/>
                </section>

                <section class="col-xl-3">
                    <input name="passenger_address" type="text" class="form-control input-box" placeholder="Address"/>
                </section>
                <section class="col" >
                    <input name="passenger_country" type="text" class="form-control input-box" placeholder="Country" maxlength="14"/>
                </section>


                <section class="col">
                    <input name="passenger_submit_date" type="text" class="form-control input-box" placeholder="Submit Date" maxlength="14"/>
                </section>
         </section>
    </section>

</section>

<hr>

<section class="container-fluid ">
    <h5>Agreements And Permission No.</h5>


    <section class="container-fluid">
            <section class="row">

                <section class="col-xl-2">
                    <input name="agreements_contract" type="text" class="form-control input-box" placeholder="Contract" maxlength="10"/>
                </section>

                <section class="col-xl-2">
                    <input name="agreements_salary" type="number" class="form-control input-box" placeholder="Salary" maxlength="10"/>
                </section>

                <section class="col-xl-2">
                    <input name="agreements_permission_number" type="text" class="form-control input-box" placeholder="Permission No." maxlength="10"/>
                </section>

                <section class="col-xl-3">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 10px; font-size: 12px;">Permission Date</p></section>

                        <section class="col-9"><input name="agreements_permission_date" type="date" class="form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/></section>
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
                    <input name="nominee_full_name" type="text" class="form-control input-box" placeholder="Nominee Full Name" maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <input name="nominee_age" type="number" class="form-control input-box" placeholder="Nominee Age In Years" maxlength="2"/>
                </section>

               

                <section class="col-xl-2">
                    <select name="nominee_relation" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Relation</option>
                        <option>Father</option>
                        <option>Mother</option>
                        <option>Sister</option>
                        <option>Brother</option>
                        <option>Wife</option>
                        <option>Son</option>
                        <option>Daughter</option>

                       
                      </select>
                </section>


                <section class="col-xl-2">
                    <input name="nominee_cnic" type="text" class="form-control input-box" placeholder="Nominee CNIC No." maxlength="15"/>
                </section>

               

                <section class="col-xl-3">
                    <input name="nominee_address" type="text" class="form-control input-box" placeholder="Address"/>
                </section>


                

            </section>
    </section>
    

</section>

<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
            <div class="form-check form-check-inline"  style="position: relative; top: 30px;" >
                <input class="form-check-input "type="checkbox" id="inlineCheckbox1" value="option1" style="transform: scale(1.5); ">
                <label class="form-check-label" for="inlineCheckbox1" style="font-size: larger; font-weight: bold;">Barcode</label>
              </div>
              
              <div class="form-check form-check-inline" style="position: relative; top: 30px;" >
                <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2" style="transform: scale(1.5);">
                <label class="form-check-label " for="inlineCheckbox2" style="font-size: larger; font-weight: bold;">Visa Form</label>
              </div>
              <br> <br>
              <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />			

        </section>
    </section>
</section>
</form>

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

