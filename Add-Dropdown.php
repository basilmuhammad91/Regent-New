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

if(isset($_POST['add_visa_profession_urdu']))
{
	$name = $_POST['name'];

	$query = mysqli_query($con, "insert into visa_profession_urdu (name) values ('$name')") or die(mysqli_error($con));

	if($query>0)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

// ==============DELETE===============
if(isset($_GET['visa_embassy_id']))
{
	$visa_embassy_id = $_GET['visa_embassy_id'];
	$query = mysqli_query($con, "delete from visa_embassy where visa_embassy_id = '$visa_embassy_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['visa_permission_status_id']))
{
	$visa_permission_status_id = $_GET['visa_permission_status_id'];
	$query = mysqli_query($con, "delete from visa_permission_status where visa_permission_status_id = '$visa_permission_status_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['visa_profession_id']))
{
	$visa_profession_id = $_GET['visa_profession_id'];
	$query = mysqli_query($con, "delete from visa_profession where visa_profession_id = '$visa_profession_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['visa_co_agent_pak_id']))
{
	$visa_co_agent_pak_id = $_GET['visa_co_agent_pak_id'];
	$query = mysqli_query($con, "delete from visa_co_agent_pak where visa_co_agent_pak_id = '$visa_co_agent_pak_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['visa_agent_from_saudia_id']))
{
	$visa_agent_from_saudia_id = $_GET['visa_agent_from_saudia_id'];
	$query = mysqli_query($con, "delete from visa_agent_from_saudia where visa_agent_from_saudia_id = '$visa_agent_from_saudia_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['visa_status_id']))
{
	$visa_status_id = $_GET['visa_status_id'];
	$query = mysqli_query($con, "delete from visa_status where visa_status_id = '$visa_status_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_medical_status_id']))
{
	$passenger_medical_status_id = $_GET['passenger_medical_status_id'];
	$query = mysqli_query($con, "delete from passenger_medical_status where passenger_medical_status_id = '$passenger_medical_status_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_medical_center_id']))
{
	$passenger_medical_center_id = $_GET['passenger_medical_center_id'];
	$query = mysqli_query($con, "delete from passenger_medical_center where passenger_medical_center_id = '$passenger_medical_center_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_place_of_birth_id']))
{
	$passenger_place_of_birth_id = $_GET['passenger_place_of_birth_id'];
	$query = mysqli_query($con, "delete from passenger_place_of_birth where passenger_place_of_birth_id = '$passenger_place_of_birth_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_place_of_issue_id']))
{
	$passenger_place_of_issue_id = $_GET['passenger_place_of_issue_id'];
	$query = mysqli_query($con, "delete from passenger_place_of_issue where passenger_place_of_issue_id = '$passenger_place_of_issue_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_place_of_issue_id']))
{
	$passenger_place_of_issue_id = $_GET['passenger_place_of_issue_id'];
	$query = mysqli_query($con, "delete from passenger_place_of_issue where passenger_place_of_issue_id = '$passenger_place_of_issue_id'") or die(mysqli_error($con));

	if($query)
	{
		@header('location: Add-Dropdown.php');
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}

if(isset($_GET['passenger_district_id']))
{
	$passenger_district_id = $_GET['passenger_district_id'];
	$query = mysqli_query($con, "delete from passenger_district where passenger_district_id = '$passenger_district_id'") or die(mysqli_error($con));

	if($query)
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

				<form action="#" method="post">
					<section class="row" style="align-items: center;">
						<section class="col-md-9">
							<span>Visa Profession Urdu</span>
							<input name="name" type="text" class="form-control input-box" placeholder="" />
						</section>

						<section class="col-3">
							<input name="add_visa_profession_urdu" type="submit" class="btn-primary btn" style="width: 100%; margin-top: 28px;" value="Add">
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

