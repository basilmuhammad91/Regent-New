<?php
  @session_start();

$role = @$_SESSION['role'];

if($role !== "Employee" && $role !== "Admin")
{
    header("location: index.php");
}
include('header.php');
include('connect.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($con, "
SELECT regents.*, visa_embassy.name AS visa_embassy, visa_permission_status.name AS visa_permission_status, visa_profession.name AS visa_profession, visa_co_agent_pak.name AS visa_co_agent_pak, visa_status.name AS visa_status, visa_agent_from_saudia.name AS visa_agent_from_saudia,passenger_district.name AS passenger_district, passenger_medical_center.name AS passenger_medical_center, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_medical_status.name AS passenger_medical_status, passenger_place_of_birth.name AS passenger_place_of_birth FROM regents
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
INNER JOIN passenger_district
ON
regents.passenger_district_id = passenger_district.passenger_district_id
INNER JOIN passenger_medical_center
ON
regents.passenger_medical_center_id = passenger_medical_center.passenger_medical_center_id
INNER JOIN passenger_place_of_issue
ON
regents.passenger_place_of_issue_id = passenger_place_of_issue.passenger_place_of_issue_id
INNER JOIN passenger_medical_status
ON
regents.passenger_medical_status_id = passenger_medical_status.passenger_medical_status_id
INNER JOIN passenger_place_of_birth
ON
regents.passenger_place_of_birth_id = passenger_place_of_birth.passenger_place_of_birth_id
where regent_id = '$id'
		");
	$row = mysqli_fetch_array($query);
}

?>

<style>
	p{
		color:#007BFF !important;
	}
</style>
		
<section class="container  border p-5">

	
<h3>Regent Report View</h3>


<br>
<h5>Visa Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Date</p>
					<h5><?php echo date("d-m-Y", strtotime($row['visa_date'])) ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>File No.</p>
					<h5><?php echo $row['visa_file_no'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Embassy</p>
					<h5><?php echo $row['visa_embassy'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Visa No.</p>
					<h5><?php echo $row['visa_no'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Sponsor ID</p>
					<h5><?php echo $row['visa_sponsor_id'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Sponsor Name</p>
					<h5><?php echo $row['visa_sponsor_name'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Sponsor Address</p>
					<h5><?php echo $row['visa_sponsor_address'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Visa Date In Hijri</p>
					<h5><?php echo date("d-m-Y", strtotime($row['visa_date2'])) ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Permission Status</p>
					<h5><?php echo $row['visa_permission_status'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Profession</p>
					<h5><?php echo $row['visa_profession'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>C/O Agent From Pakistan</p>
					<h5><?php echo $row['visa_co_agent_pak'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Agent From Saudi Arabia</p>
					<h5><?php echo $row['visa_agent_from_saudia'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Contact No. Pakistan</p>
					<h5><?php echo $row['visa_contact_pak'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Contact No. Saudia</p>
					<h5><?php echo $row['visa_contact_saudia'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Visa Status</p>
					<h5><?php echo $row['visa_status'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Remarks</p>
					<h5><?php echo $row['visa_remarks'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Registration Date</p>
					<h5><?php echo date("d-m-Y", strtotime($row['visa_reg_date'])) ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Registration No.</p>
					<h5><?php echo $row['visa_reg_no'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Price</p>
					<h5><?php echo $row['visa_price'] ?></h5>
					<hr>
				</section>

				

				


		</section>
	


<br>
<h5>Passenger Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Name</p>
					<h5><?php echo $row['passenger_name'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Father Name</p>
					<h5><?php echo $row['passenger_father_name'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>E No.</p>
					<h5><?php echo $row['passenger_eno'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Passport No.</p>
					<h5><?php echo $row['passenger_passport_no'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Medical Status</p>
					<h5><?php echo $row['passenger_medical_status'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Name In Urdu</p>
					<h5><?php echo $row['passenger_name_urdu'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Father Name In Urdu</p>
					<h5><?php echo $row['passenger_father_name_urdu'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Date Of Birth</p>
					<h5><?php echo date("d-m-Y", strtotime($row['passenger_dob'])) ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Issue</p>
					<h5><?php echo date("d-m-Y", strtotime($row['passenger_date_of_issue'])) ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Expiry</p>
					<h5><?php echo date("d-m-Y", strtotime($row['passenger_date_of_expiry'])) ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>National Identity No.</p>
					<h5><?php echo $row['passenger_national_identity_no'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Medical Center Name</p>
					<h5><?php echo $row['passenger_medical_center'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Place Of Issue</p>
					<h5><?php echo $row['passenger_place_of_issue'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Place Of Birth</p>
					<h5><?php echo @$row['passenger_place_of_birth'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>District</p>
					<h5><?php echo $row['passenger_district'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Qualification</p>
					<h5><?php echo $row['passenger_qualification'] ?></h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Address</p>
					<h5><?php echo $row['passenger_address'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Country</p>
					<h5><?php echo $row['passenger_country'] ?></h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Submit Date</p>
					<h5><?php echo date("d-m-Y", strtotime($row['passenger_submit_date'])) ?></h5>
					<hr>
				</section>

				
	


		</section>
	

<br>



<br>
<h5>Agreements And Permission No.</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Contract</p>
					<h5><?php echo $row['agreements_contract'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Salary</p>
					<h5><?php echo $row['agreements_salary'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Permission No.</p>
					<h5><?php echo $row['agreements_permission_number'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Permission Date</p>
					<h5><?php echo date("d-m-Y", strtotime($row['agreements_permission_date'])) ?></h5>
					<hr>
				</section>

		</section>


<br>
<h5>Nominee Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Nominee Full Name</p>
					<h5><?php echo $row['nominee_full_name'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Nominee Age In Year</p>
					<h5><?php echo $row['nominee_age'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Relation</p>
					<h5><?php echo $row['nominee_relation'] ?></h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Nominee CNIC No.</p>
					<h5><?php echo $row['nominee_cnic'] ?></h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Address</p>
					<h5><?php echo $row['nominee_address'] ?></h5>
					<hr>
				</section>

		</section>
</section>

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