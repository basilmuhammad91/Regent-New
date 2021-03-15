<?php

include_once('connect.php');


$output = '';

if(isset($_POST['search']))
{
	$query = "
	SELECT cases.*, 
	users.name as username,  
	visa_status.name as visa_status_name
	FROM `cases` 
	INNER JOIN users 
	ON users.user_id = cases.agency_id
	INNER JOIN visa_status
	ON visa_status.visa_status_id = cases.visa_status_id
	WHERE passenger_passport_no LIKE '%".$_POST['search']."%'
	";
}

if(isset($_POST['search2']))
{
	$query = "
	SELECT cases.*, 
	users.name as username,  
	visa_status.name as visa_status_name
	FROM `cases` 
	INNER JOIN users 
	ON users.user_id = cases.agency_id
	INNER JOIN visa_status
	ON visa_status.visa_status_id = cases.visa_status_id
	WHERE visa_sponsor_name LIKE '%".$_POST['search2']."%'
	";
}

if(isset($_POST['search']) && isset($_POST['search2']))
{
	$query = "
	SELECT cases.*, 
	users.name as username,  
	visa_status.name as visa_status_name
	FROM `cases` 
	INNER JOIN users 
	ON users.user_id = cases.agency_id
	INNER JOIN visa_status
	ON visa_status.visa_status_id = cases.visa_status_id
	WHERE passenger_passport_no LIKE '%".$_POST['search']."%'
	OR visa_sponsor_name LIKE '%".$_POST['search2']."%'
	";
}


	// $query = "
	// SELECT * from cases
	// WHERE visa_file_no LIKE '%".$_POST['search']."%'
	// OR passenger_passport_no LIKE '%".$_POST['search2']."%'
	// OR visa_no LIKE '%".$_POST['search3']."%'
	// ";


$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = 1;
if(mysqli_num_rows($result) > 0)
{
	while ($row=mysqli_fetch_array($result)) {
		$output .="
		<tr>
								<th scope='row'>".$count."</th>
								<td>".$row['passenger_name']."</td>
								<td>".$row['passenger_father_name']."</td>
								<td>".$row['username']."</td>
								<td>".$row['visa_no']."</td>
								<td>".$row['visa_id_no']."</td>
								<td>".$row['visa_sponsor_name']."</td>
								<td>".$row['passenger_passport_no']."</td>
								<td>".$row['visa_courier_name']."</td>
								<td>".$row['visa_courier_no']."</td>
								<td>".$row['visa_status_name']."</td>

						   		<td>
									<div class='dropdown show'>
										<a class='btn btn-primary dropdown-toggle'  style='font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
										  Action
										</a>
										<div class='dropdown-menu  wow fadeInDown animated' aria-labelledby='dropdownMenuLink'>
											<a class='dropdown-item' href='All-Case-Enteries.php?edit_id=<?php echo $row[0] ?>'>Edit</a>
											<a class='dropdown-item' href='All-Case-Reports.php?delete_id=<?php echo $row[0] ?>'>Delete</a>
											<a class='dropdown-item' href='#'>View</a>
										</div>
									</div>
								</td>
							</tr>
		";
		$count++;
	}
	echo $output;
}

?>