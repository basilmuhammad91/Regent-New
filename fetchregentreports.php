<?php

include_once('connect.php');


$output = '';



if(isset($_POST['search']) && !isset($_POST['search2']) && !isset($_POST['search3']))
{
	$query = "
	SELECT * from regents
	WHERE visa_file_no LIKE '%".$_POST['search']."%'
	";
}
else if(isset($_POST['search2']) && !isset($_POST['search']) && !isset($_POST['search3']))
{
	$query = "
	SELECT * from regents
	WHERE passenger_passport_no LIKE '%".$_POST['search2']."%'
	";
}
else if(isset($_POST['search3']) && !isset($_POST['search']) && !isset($_POST['search2']))
{
	$query = "
	SELECT * from regents
	WHERE visa_no LIKE '%".$_POST['search3']."%'
	";
}
else if(isset($_POST['search']) && isset($_POST['search2']) && !isset($_POST['search3']))
{
	$query = "
	SELECT * from regents
	WHERE visa_file_no LIKE '%".$_POST['search']."%'
	OR passenger_passport_no LIKE '%".$_POST['search2']."%'
	";
}
else if(isset($_POST['search']) && isset($_POST['search3']) && !isset($_POST['search2']))
{
	$query = "
	SELECT * from regents
	WHERE visa_file_no LIKE '%".$_POST['search']."%'
	OR visa_no LIKE '%".$_POST['search3']."%'
	";
}

else if(isset($_POST['search2']) && isset($_POST['search3']) && !isset($_POST['search']))
{
	$query = "
	SELECT * from regents
	WHERE passenger_passport_no LIKE '%".$_POST['search2']."%'
	OR visa_no LIKE '%".$_POST['search3']."%'
	";
}

else if(isset($_POST['search']) && isset($_POST['search2']) && isset($_POST['search3']))
{
	$query = "
	SELECT * from regents
	WHERE visa_file_no LIKE '%".$_POST['search']."%'
	OR passenger_passport_no LIKE '%".$_POST['search2']."%'
	OR visa_no LIKE '%".$_POST['search3']."%'
	";
}

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = 1;
if(mysqli_num_rows($result) > 0)
{
	while ($row=mysqli_fetch_array($result)) {
		$output .="
		<tr>
								<th scope='row'>".$count."</th>
								<td>".$row['visa_no']."</td>
								<td>".$row['visa_file_no']."</td>
								<td>".$row['visa_sponsor_id']."</td>
								<td>".$row['visa_sponsor_name']."</td>
								<td>".$row['visa_sponsor_address']."</td>
								<td>".$row['visa_date2']."</td>
								<td>".$row['passenger_name']."</td>
								<td>".$row['passenger_father_name']."</td>
								<td>".$row['passenger_passport_no']."</td>
								<td>".$row['passenger_eno']."</td>

						   		<td>
									<div class='dropdown show'>
										<a class='btn btn-primary dropdown-toggle'  style='font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
										  Action
										</a>
										<div class='dropdown-menu wow fadeInDown animated' aria-labelledby='dropdownMenuLink'>
											
											
											
											<a class='dropdown-item' href='#''>View</a>
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