<?php

include('header.php');
include('connect.php');

if(isset($_POST['add_embassy']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_embassy (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_permission_status']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_permission_status (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_profession']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_profession (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_agent_from_pak']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_co_agent_pak (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_agent_from_saudia']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_agent_from_saudia (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_visa_status']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_status (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_medical_status']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into passenger_medical_status (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

if(isset($_POST['add_medical_center']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into passenger_medical_center (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}


if(isset($_POST['add_place_of_issue']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into passenger_place_of_issue (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_POST['add_place_of_birth']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into passenger_place_of_birth (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}


if(isset($_POST['add_district']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into passenger_district (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
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
					<h5>xxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>File No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Embassy</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Visa No.</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Sponsor ID</p>
					<h5>xxxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Sponsor Name</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Sponsor Address</p>
					<h5>xxxxxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Visa Date In Hijri</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Permission Status</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Profession</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>C/O Agent From Pakistan</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Agent From Saudi Arabia</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Contact No. Pakistan</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Contact No. Saudia</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Visa Status</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Remarks</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Registration Date</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Registration No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Price</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				

				


		</section>
	


<br>
<h5>Passenger Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Name</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Father Name</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>E No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Passport No.</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Medical Status</p>
					<h5>xxxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Name In Urdu</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Father Name In Urdu</p>
					<h5>xxxxxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Date Of Birth</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Issue</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Expiry</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>National Identity No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Medical Center Name</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Place Of Issue</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Place Of Birth</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>District</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Qualification</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Address</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Country</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Submit Date</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
	


		</section>
	

<br>
<h5>Passenger Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Name</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Father Name</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>E No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Passport No.</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Medical Status</p>
					<h5>xxxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Name In Urdu</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Father Name In Urdu</p>
					<h5>xxxxxxxxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Date Of Birth</p>
					<h5>xxxxxxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Issue</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Date Of Expiry</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>National Identity No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Medical Center Name</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Place Of Issue</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Place Of Birth</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>District</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Qualification</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				
				<section class="col-sm-4">
					<p>Address</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Country</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Submit Date</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>

				
	


		</section>


<br>
<h5>Agreements And Permission No.</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Contract</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Salary</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Permission No.</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Permission Date</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

		</section>


<br>
<h5>Nominee Details</h5>
<br>

		<section class="row">
				<section class="col-sm-4">
					<p>Nominee Full Name</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Nominee Age In Year</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Relation</p>
					<h5>xxxxxxx</h5>
					<hr>
				</section>


				<section class="col-sm-4">
					<p>Nominee CNIC No.</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				
				<section class="col-sm-4">
					<p>Address</p>
					<h5>xxxxxxxx</h5>
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

