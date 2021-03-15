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
<title>View Dashboard</title>
<style>
	p{
		color:#007BFF !important;
	}
</style>
		
<section class="container-fluid">



	

		<h3>Embassy View</h3>
<br>
		<h5>Opening Balance</h5>
<br>

			<section class="row">

				<section class="col-sm-4">
					<p>Opening Balance</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Date</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				

			</section>



			<br>
		<h5>Expanse</h5>
<br>

			<section class="row">

				<section class="col-sm-4">
					<p>Date</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Amount</p>
					<h5>xxxxxxxx</h5>
					<hr>
				</section>

				<section class="col-sm-4">
					<p>Description</p>
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

