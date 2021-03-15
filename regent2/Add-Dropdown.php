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
		
<section class="container-fluid">

	<section class="container-fluid">

		<h3>Add Dropdown</h3>
		
		<section class="row">
			
			<section class="col-xl-6 border p-3" >
			
			
				<h5>Visa Details</h5>

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Embassy</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							<input name="add_embassy" type="submit" class="btn-primary btn" style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>	

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Permission Status</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							
							<input name="add_permission_status" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Profession</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							
							<input name="add_profession" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Agent From Pakistan</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							<input name="add_agent_from_pak" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Agent From Saudi Arabia</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							<input name="add_agent_from_saudia" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Visa Status</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							<input name="add_visa_status" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
						</section>
					</section>
				</form>
				

			</section>

					<section class="col-xl-6 border p-3">
						<h5>Passenger Details</h5>

						<form action="#" method="post">
							<section class="row" style="align-items: center;">
								<section class="col-md-9">
									<span>Medical Status</span>
									<input name="name" type="text" class="form-control input-box" placeholder="" />
								</section>

								<section class="col-3">
									<input name="add_medical_status" type="submit" class="btn-primary btn" style="width: 100%; margin-top: 28px;" value="Add">
								</section>
							</section>
						</form>

						<form action="#" method="post">
							<section class="row" style="align-items: center;">
								<section class="col-md-9">
									<span>Medical Center Name</span>
									<input name="name" type="text" class="form-control input-box" placeholder="" />
								</section>

								<section class="col-3">
									<input name="add_medical_center" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
								</section>
							</section>
						</form>

						<form action="#" method="post">
							<section class="row" style="align-items: center;">
								<section class="col-md-9">
									<span>Place of Issue</span>
									<input name="name" type="text" class="form-control input-box" placeholder="" />
								</section>

								<section class="col-3">
									<input name="add_place_of_issue" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
								</section>
							</section>
						</form>

						<form action="#" method="post">
							<section class="row" style="align-items: center;">
								<section class="col-md-9">
									<span>Place or Birth</span>
									<input name="name" type="text" class="form-control input-box" placeholder="" />
								</section>

								<section class="col-3">
									<input name="add_place_of_birth" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
								</section>
							</section>
						</form>

						<form action="#" method="post">
							<section class="row" style="align-items: center;">
								<section class="col-md-9">
									<span>District</span>
									<input name="name" type="text" class="form-control input-box" placeholder="" />
								</section>

								<section class="col-3">
									<input name="add_district" type="submit" class="btn-primary btn  " style="width: 100%; margin-top: 28px;" value="Add">
								</section>
							</section>
						</form>

					</section>

		</section>
		<hr>



		


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

