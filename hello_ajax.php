<?php

include_once('connect.php');

$output = '';

if(isset($_POST['search']))
{
	$query = mysqli_query($con, "
		select * from regents
		where passenger_eno = '".$_POST['search']."'
		") or die(mysqli_error($con));

	if(mysqli_num_rows($query)>0)
	{
		while ($row= mysqli_fetch_array($query)) 
		{
			$output.="
			<input type='text' class='form-control' name='val2' value='".$row[5]."' /><br>
			<input type='submit' name='submit' class='btn btn-primary'>
			";
		}
	}
}

echo $output;

?>