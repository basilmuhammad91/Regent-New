<?php

include('header.php');
include('connect.php');

if(isset($_POST['update_status']))
{
	$embassy_id = $_POST['embassy_id'];
	$status = $_POST['status'];

	$query=mysqli_query($con, "
update embassy_lists set status = '$status' where embassy_id = '$embassy_id'
		");

	if($query)
	{
		echo "<script>window.location.href='Daily-Embassy-Report.php';</script>";
	}

}

?>
	


	
<br>
 


<section class="container-fluid">



<section class="container-fluid">
    <!-- ============= -->
	<section class="row" style="align-items: center;">
		<section class="col-md-2">
			<span >From</span>
			<input id="date_from" name="date_from" type="date" class="form-control input-box" />
		</section>
		<section class="col-md-2">
			<span >To</span>
			<input id="date_to" name="date_to" type="date" class="form-control input-box" />
		</section>
		<section class="col-md-2">
			<span >Status</span>
			<input id="search_file_no" name="search_file_no" type="text" class="form-control input-box" placeholder="Status" />
		</section>
		

</section>
</section>
   

</section>
<br>

<section class="container-fluid text-center">
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Sample Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Import Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Export Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Print" />
</section>

<br>

<section class="container">

            <table class="table mb-5 ml-auto text-right " style="padding-bottom:130px;">
              
			<thead>
				  	<tr>
					  	<th scope="col">Update</th>
						<th scope="col">Status</th>
					  	<th scope="col" >Date</th>
						<th>رقم التا شیرا</th>
						<th>التاریخ</th>
						<th>رقم الجواز</th>
						<th>E Number</th>
						<th>المھنۃ</th>
						<th>اسم الکفیل</th>
						<th>اسم الجواز با العربی</th>
						<th>اسم المکتب</th>
						<th>العدد</th>
					</tr>
                  </thead>
                  <tbody>

			<?php 
			$query = mysqli_query($con, "
SELECT * FROM
((SELECT embassy_lists.*, passenger_details.passenger_name_urdu AS passenger_name_urdu, passenger_details.passenger_father_name_urdu AS passenger_father_name_urdu, regents.visa_sponsor_name AS visa_sponsor_name, passenger_details.passenger_eno AS passenger_eno
FROM `embassy_lists` 
INNER JOIN passenger_details
ON
embassy_lists.type = passenger_details.type
INNER JOIN regents
ON
regents.regent_id = passenger_details.regent_id
WHERE embassy_lists.table_id = passenger_details.passenger_id and (embassy_lists.status = 'printed' OR embassy_lists.status = 'Done' OR embassy_lists.status = 'Rejected'))
UNION
(SELECT embassy_lists.*, cases.passenger_name_urdu AS passenger_name_urdu, cases.passenger_father_name_urdu AS passenger_father_name_urdu, cases.visa_sponsor_name AS visa_sponsor_name, cases.passenger_eno AS passenger_eno
FROM embassy_lists
INNER JOIN cases
ON
embassy_lists.type = cases.type
WHERE embassy_lists.table_id = cases.case_id and (embassy_lists.status = 'printed' OR embassy_lists.status = 'Done' OR embassy_lists.status = 'Rejected'))) AS i
ORDER BY embassy_id DESC
				");
			$count=1;
			while ($row=mysqli_fetch_array($query)) {
				?>
				<form action="#" method="post">
					<tr id="highlight" style="background: <?php if($row['status'] == 'Done'){echo '#32CD32'; } if($row['status'] == 'Rejected'){echo '#e35b5b'; } if($row['status'] == 'printed'){echo '#FFFF00'; } ?>">
					<td>
						<input type="hidden" name="embassy_id" value="<?php echo $row[0] ?>">
						<input type="submit" name="update_status" value="Update">
					</td>
					<td>
					<!-- <button class="greenbtn">Green</button> -->
					<select name="status">
						<option <?php if($row['status'] == 'Rejected'){ echo 'selected'; } ?> value="Rejected">Rejected</option>
						<option <?php if($row['status'] == 'printed'){ echo 'selected'; } ?> value="printed">Pending</option>
						<option <?php if($row['status'] == 'Done'){ echo 'selected'; } ?> value="Done">Done</option>
					</select>
					</td>
					<td>xxxxxx</td>
					<td>xxxxxx</td>
					<td>xxxxxx</td>
					<td>xxxxxx</td>
					<td><?php echo $row['passenger_eno']  ?></td>
					<td>xxxxxx</td>
					<td><?php echo $row['visa_sponsor_name']  ?></td>
					<td><?php echo $row['passenger_father_name_urdu']  ?></td>
					<td><?php echo $row['passenger_name_urdu']  ?></td>
					<td><?php echo $count ?></td>
                
                </tr>
				</form>
				<?php
				$count++;
			}
			?> 
                  </tbody>
            </table>
        


   

</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done Visa Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
			<input name="" type="file" class="form-control " style="border:1px solid transparent" />
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
<script>
$(document).ready(function(){
  $(".greenbtn").click(function(){
    $("#highlight").css("background-color", "green");
  });
});
</script>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery-fab-button.js"></script>

