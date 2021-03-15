<?php

include_once('connect.php');

$output = '';

if(isset($_POST['search']))
{
	$query = mysqli_query($con, "
		select * from passenger_details
		where passenger_passport_no = '".$_POST['search']."' limit 1
		") or die(mysqli_error($con));

	if(mysqli_num_rows($query)>0)
	{
		while ($row= mysqli_fetch_array($query)) 
		{
			$output.='<input class="form-control" name="fetch_passenger_id" id="fetch_passenger_id" type="hidden" value="'.$row['passenger_id'].'">';
		}
	}
}

echo $output;

?>