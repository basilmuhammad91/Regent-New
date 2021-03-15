<?php

include('header.php');
include('connect.php');

if(isset($_POST['submit']))
{
    $agency_id = $_POST['agency_id'];
    $visa_no = $_POST['visa_no'];
    $visa_id_no = $_POST['visa_id_no'];
    $visa_sponsor_name = $_POST['visa_sponsor_name'];
    $visa_date = $_POST['visa_date'];
    $visa_profession = $_POST['visa_profession'];
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
    $submitted_to = $_POST['submitted_to'];
    $visa_status = $_POST['visa_status'];
    $visa_courier_date = $_POST['visa_courier_date'];
    $visa_courier_name = $_POST['visa_courier_name'];
    $visa_courier_no = $_POST['visa_courier_no'];
    $remarks = $_POST['remarks'];

    $query = mysqli_query($con, "
        INSERT INTO `cases`(`agency_id`, `visa_no`, `visa_id_no`, `visa_sponsor_name`, `visa_date`, `visa_profession`, `visa_price_as_per_agency`, `visa_price_as_per_regent`, `passenger_name`, `passenger_father_name`, `passenger_eno`, `passenger_passport_no`, `passenger_dob`, `passenger_name_urdu`, `passenger_father_name_urdu`, `passenger_date_of_issue`, `passenger_date_of_expiry`, `passenger_submit_date`, `submitted_to`, `visa_status`, `visa_courier_date`, `visa_courier_name`, `visa_courier_no`, `remarks`) VALUES (

            '$agency_id', '$visa_no', '$visa_id_no', '$visa_sponsor_name', '$visa_date', '$visa_profession', '$visa_price_as_per_agency', '$visa_price_as_per_regent', '$passenger_name', '$passenger_father_name', '$passenger_eno', '$passenger_passport_no', '$passenger_dob', '$passenger_name_urdu', '$passenger_father_name_urdu', '$passenger_date_of_issue', '$passenger_date_of_expiry', '$passenger_submit_date', '$submitted_to', '$visa_status', '$visa_courier_date', '$visa_courier_name', '$visa_courier_no', '$remarks'

        )
        ");

        if($query>0)
        {
            echo "<script>alert('Submitted')</script>";
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }


}

?>
			
			
            <section class="mr-auto text-center">
                <i class="fas fa-user-circle" style="font-size: 30px; color: white;"></i>
                <a class="nav-link text-light list-link" href="#" >Admin</a>
                <section class="main1 showhidebox" >
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Profile</a>
                    <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Logout</a>
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

	
<form action="#" method="post">
<section class="container-fluid">
    <h5> Visa Detail</h5>


    <section class="container-fluid">

            <section class="row">

                <section class="col-xl-3">
                    <select name="agency_id" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Agency Name</option>
                        <?php
                        $query = mysqli_query($con, "select * from users where role = 'agency'");
                        while($row = mysqli_fetch_array($query))
                        {
                            ?>
                            <option value="<?php echo  $row['user_id']?>"><?php echo $row['name']?></option>
                            <?php
                        }
                        ?>

                      </select>
                </section>

                <section class="col-xl-3">
                    <input name="visa_no" type="text"  class="form-control input-box" placeholder="Visa No." maxlength="9"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_id_no" type="text" class="form-control input-box" placeholder="ID No." maxlength="5"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_sponsor_name" type="text" class="form-control input-box" placeholder="Sponsor Name" />
                </section>

                <section class="col-xl-3">
                    <input name="visa_date" type="text" class="form-control input-box hijri-date-input" placeholder="Visa Date"/>
                </section>

                <section class="col-xl-3">
                    <select name="visa_profession" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Profession</option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>

                <section class="col-xl-3">
                    <input name="visa_price_as_per_agency" type="number" class="form-control input-box " placeholder="Price As Per Agency"/>
                </section>

                <section class="col-xl-3">
                    <input name="visa_price_as_per_regent" type="number" class="form-control input-box " placeholder="Price As Per Regent"/>
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
                    <input name="passenger_dob" type="text" class="form-control input-box" placeholder="Date Of Birth"/>
                </section>
                
               

                <section class="col-xl-3">
                    <input id="yourTextArea" name="passenger_name_urdu" type="text" class="form-control input-box" placeholder="Name In Urdu"/>
                </section>

                <section class="col-xl-3">
                    <input name="passenger_father_name_urdu" type="text" class="form-control input-box" placeholder="Father Name In Urdu"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_date_of_issue" type="text" class="form-control input-box" placeholder="Date Of Issue"/>
                </section>

                <section class="col-xl-2">
                    <input name="passenger_date_of_expiry" type="text" class="form-control input-box" placeholder="Date of Expiry"/>
                </section>
                
                
                <section class="col-xl-2">
                    <input name="passenger_submit_date" type="text" class="form-control input-box" placeholder="Submit Date"/>
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
                    <select name="submitted_to" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Submited To </option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>

                <section class="col-xl-2">
                    <select name="visa_status" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Visa Status </option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>


                <section class="col-xl-2">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 8px; font-size: 13px;">Courier Date</p></section>

                        <section class="col-9"><input name="visa_courier_date" type="date" class="form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/></section>
                    </section>
                </section>

                <section class="col-xl-2">
                    <select name="visa_courier_name" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Courier Name </option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>

                <section class="col-xl-2">
                    <select name="visa_courier_no" class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Courier No</option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>

                <section class="col-xl-2">
                    <input name="remarks" type="text" class="form-control input-box" placeholder="Remarks"/>
                </section>


            </section>

        
    </section>

</section>

<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
            <div class="form-check form-check-inline"  style="position: relative; top: 30px;" >
                <input class="form-check-input mr-3"type="checkbox" id="inlineCheckbox1" value="option1" style="transform: scale(1.5); ">
                <label class="form-check-label" for="inlineCheckbox1" style="font-size: larger; font-weight: bold;">Barcode</label>
              </div>
              
              <div class="form-check form-check-inline" style="position: relative; top: 30px;" >
                <input class="form-check-input mr-3" type="checkbox" id="inlineCheckbox2" value="option2" style="transform: scale(1.5);">
                <label class="form-check-label " for="inlineCheckbox2" style="font-size: larger; font-weight: bold;">Visa Form</label>
              </div>
              <br> <br>
              <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />			

        </section>
    </section>
</section>
</form>

<br>


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


<script type="text/javascript">
    $('#yourTextArea').bind('keydown',function(evt){
    evt.stopPropagation(); // stop propagating the key pressed
    var TextAreaVal = $('#yourTextArea').val()
    var urduRegex = /[\u0600-\u06FF]|[\u0750-\u077F]|[\uFB50-\uFDFF]|[\uFE70-\uFEFF]/;
    CharToTest = String.fromCharCode(evt.keyCode); // get the char related to the key pressed
    if(urduRegex.test(CharToTest)) // if urdu
    {$('#yourTextArea').val(TextAreaVal + ChartoTest )} // add char to the textarea
    else
    {return;} // do nothing
});

    // $('#passenger_name_urdu').bind('keydown',function(evt){
    // evt.stopPropagation(); // stop propagating the key pressed
    // var TextAreaVal = $('#passenger_name_urdu').val()
    // var urduRegex = /[\u0600-\u06FF]|[\u0750-\u077F]|[\uFB50-\uFDFF]|[\uFE70-\uFEFF]/;
    // CharToTest = String.fromCharCode(evt.keyCode); // get the char related to the key pressed
    // if(urduRegex.test(CharToTest)) // if urdu
    // {
    //     $('#passenger_name_urdu').val(TextAreaVal + ChartoTest )} // add char to the textarea
    //     else
    //     {return;} // do nothing
    // });     

</script>