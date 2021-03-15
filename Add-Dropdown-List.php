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
	
	<h1>Embassy</h1>
		<section class="row">


			<section class="col-xl-3 border ">
				<h5>Embassy</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Embassy</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from visa_embassy");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count ?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_embassy_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
						
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border ">
				<h5>Permission Status</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Permission</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from visa_permission_status");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_permission_status_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
						
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border ">
				<h5>Profession</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Profession</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from visa_profession");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_profession_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border ">
				<h5>Agent From Pakistan</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Agent Pak</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from 	visa_co_agent_pak");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_co_agent_pak_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border  mt-3">
				<h5>Agent From Saudi Arabia</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Agent Arabia</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from visa_agent_from_saudia");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_agent_from_saudia_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border mt-3">
				<h5>Visa Status</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Visa Status</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from visa_status");
						while ($row=mysqli_fetch_array($query)) {

							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?visa_status_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>


			<section class="col-xl-3 border mt-3">
				<h5>Medical Status</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Medical Status</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count =1;
						$query = mysqli_query($con, "select * from passenger_medical_status");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?passenger_medical_status_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border mt-3">
				<h5>Medical Center Name</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Medical Center</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count = 1;
						$query = mysqli_query($con, "select * from passenger_medical_center");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?passenger_medical_center_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;	
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border mt-3">
				<h5>Place Of Birth</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Birth Place</th>
						  <th scope="col">Action</th>
						 
						</tr>
					  </thead>
					  <tbody>
						<?php
						$count=1;
						$query = mysqli_query($con, "select * from passenger_place_of_birth");
						while ($row=mysqli_fetch_array($query)) {
								?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?passenger_place_of_birth_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border mt-3">
				<h5>Place Of Issue</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">Issue Place</th>
						  <th scope="col">Action</th>
						
 						</tr>
					  </thead>
					  <tbody>
						<?php
						$count=1;
						$query = mysqli_query($con, "select * from passenger_place_of_issue");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?passenger_place_of_issue_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>

			<section class="col-xl-3 border mt-3">
				<h5>District</h5>
				<table class="table m-auto ">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">District</th>
						  <th scope="col">Action</th>
						</tr>
					  </thead>	
					  <tbody>
						<?php
						$count=1;
						$query = mysqli_query($con, "select * from passenger_district");
						while ($row=mysqli_fetch_array($query)) {
							?>
								<tr>
									 <th scope="row"><?php echo $count?></th>
									 <td><?php echo $row['name'] ?></td>
									 <td>
										<center>
											<a href="Add-Dropdown-List.php?passenger_district_id=<?php echo $row[0] ?>" class="btn bg-danger text-light pl-1 pr-1 pt-0 pb-0">Delete</a>
										</center>
									 </td>
								</tr>
							<?php
							$count++;
						}
						?>
					  </tbody>
				</table>
			</section>
		
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

