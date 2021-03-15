<?php

include_once('connect.php');

$output = '';

if(isset($_POST['search']))
{
	$query = mysqli_query($con, "
		select * from regents
		where visa_file_no = '".$_POST['search']."'
		") or die(mysqli_error($con));

	if(mysqli_num_rows($query)>0)
	{
		while ($row= mysqli_fetch_array($query)) 
		{
			$fetch_regent_id = $row[0];
			$output.='<section class="col-xl-1">
	                      <span>Remaining</span>
	                      <input type="hidden" id="fetch_regent_id" value="'.$fetch_regent_id.'">
	                      <input type="text" id="fetch_visa_quantity_no" style="width: fit-content;" disabled="disabled" class="form-control input-box" placeholder="05" value="'.$row["visa_quantity_no"].'" maxlength="15"/>
	                  </section>';
		}
	}
}

echo $output;

?>