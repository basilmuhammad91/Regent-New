<?php

include('header.php');
include('connect.php');

$date = date("Y/m/d");
$query = mysqli_query($con, "select * from embassy_lists where date = '$date' or status = 'pending'");
$count_rows=mysqli_num_rows($query);
$button_status="enable";
if($count_rows >= 15)
{
	$button_status="disable";
}


if(isset($_POST['search_eno']))
{
	$passenger_eno = $_POST['passenger_eno'];

	$query = mysqli_query($con, "
		SELECT passenger_id, passenger_eno, type FROM passenger_details WHERE `passenger_eno` = '$passenger_eno'
		UNION 
		SELECT case_id, passenger_eno, type FROM cases WHERE passenger_eno = '$passenger_eno'
		") or die(mysqli_error($con));

	if($row=mysqli_fetch_array($query))
	{
		$table_id = $row[0];
		$type = $row['type'];
		$date = date("Y/m/d");
		$status = 'pending';
		$query2 = mysqli_query($con, "insert into embassy_lists (table_id, type, date, status) values('$table_id','$type','$date', '$status')") or die(mysqli_error($con));
		if($query2)
		{
			echo "<script>console.log('Submitted');</script>";
			// echo "<script>window.location.href='Embassy-list.php';</script>";
		}
	}

	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";

}

if(isset($_POST['print_and_save']))
{
	 $query2 = mysqli_query($con, "
SELECT embassy_lists.*, passenger_details.passenger_name_urdu AS passenger_name_urdu, passenger_details.passenger_father_name_urdu AS passenger_father_name_urdu, regents.visa_sponsor_name AS visa_sponsor_name, passenger_details.passenger_eno AS passenger_eno
FROM `embassy_lists` 
INNER JOIN passenger_details
ON
embassy_lists.type = passenger_details.type
INNER JOIN regents
ON
regents.regent_id = passenger_details.regent_id
WHERE embassy_lists.table_id = passenger_details.passenger_id and embassy_lists.status = 'pending'
UNION
SELECT embassy_lists.*, cases.passenger_name_urdu AS passenger_name_urdu, cases.passenger_father_name_urdu AS passenger_father_name_urdu, cases.visa_sponsor_name AS visa_sponsor_name, cases.passenger_eno AS passenger_eno
FROM embassy_lists
INNER JOIN cases
ON
embassy_lists.type = cases.type
WHERE embassy_lists.table_id = cases.case_id and embassy_lists.status = 'pending'
		  	");

	 while ($std=mysqli_fetch_array($query2)) {
	 	$query3=mysqli_query($con,"
update embassy_lists set status = 'printed' where embassy_id = '$std[0]';
	 		");
	 }

	 echo "<script>window.location.href='Embassy-list.php';</script>";
}


?>
	
<style>
	@import url(https://fonts.googleapis.com/earlyaccess/notonaskharabic.css);

	.list-link{
	
		line-height: 0.2 !important;
		transition: 1s;
	}

	.nav-item{
		margin-left: 10px;
	}
	.showhidebox{
		height: auto;
		display: none;
	}	
	.input-box{
        background-color: transparent !important;
       height: 35px !important;
        border: 0.5px solid #007BFF ;
        font-size: 15px;
        margin-top: 8px;
    }
    th{
        font-size: 13px !important;
        border: 1px solid black !important;
    }

    tr{
        width: 300px !important;
    }
    thead{
       padding: 0px !important;
	   background-color: white !important;
    }
    td{
		background-color: white !important;
        border: 1px solid black !important;
       padding: 1px !important;
    }
    th{
		color: black !important;
		border: 1px solid black !important;
        padding: 1px !important;
	
    }
</style>

	
<section class="container">
	<section class="row">
		<section class="col-md-6">
			<span>E-Number</span>
			<form action="#" method="post">
				<input type="text" name="passenger_eno" class="form-control input-box" placeholder="">
				<?php
				if($button_status=="disable")
				{
				?>
				<input type="submit" disabled="true" name="search_eno2" class="btn btn-primary mt-2">
				<?php
				}
				else
				{
					?>
					<input type="submit" name="search_eno" class="btn btn-primary mt-2">
					<?php
				}
				?>
			</form>
		</section>
	</section>

<br>

<center>
	<span style="border: 1px solid black; font-weight: bold; font-size:30px ;" class="pl-4 pr-4"><b>REGENT OVERSEAS GROUP DROP BOX NO 43</b></span>
</center>
<br>

	<table class="table ml-auto text-right">
		<thead>
		  <tr>
			<th scope="col" style="border-top: 1px solid transparent !important;  border-left: 1px solid transparent !important;  border-right: 1px solid transparent !important;"></th>
			<th scope="col" style="border-top: 1px solid transparent !important;  border-left: 1px solid transparent !important;"></th>
			<th scope="col">جنوری 2021</th>
			<th scope="col">المو افق 26</th>
			<th scope="col">1442</th>
			<th scope="col">الاسلام</th>
			<th scope="col">تاریخ</th>
			<th scope="col">رقم الصفحہ  6</th>
			<th scope="col">المجوعہ الکلی</th>
			

		  </tr>
		</thead>
		<tbody>
		<thead>
		  <tr>
			
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
		  <?php
		  $query = mysqli_query($con, "
SELECT embassy_lists.*, passenger_details.passenger_name_urdu AS passenger_name_urdu, passenger_details.passenger_father_name_urdu AS passenger_father_name_urdu, regents.visa_sponsor_name AS visa_sponsor_name, passenger_details.passenger_eno AS passenger_eno
FROM `embassy_lists` 
INNER JOIN passenger_details
ON
embassy_lists.type = passenger_details.type
INNER JOIN regents
ON
regents.regent_id = passenger_details.regent_id
WHERE embassy_lists.table_id = passenger_details.passenger_id and embassy_lists.status = 'pending'
UNION
SELECT embassy_lists.*, cases.passenger_name_urdu AS passenger_name_urdu, cases.passenger_father_name_urdu AS passenger_father_name_urdu, cases.visa_sponsor_name AS visa_sponsor_name, cases.passenger_eno AS passenger_eno
FROM embassy_lists
INNER JOIN cases
ON
embassy_lists.type = cases.type
WHERE embassy_lists.table_id = cases.case_id and embassy_lists.status = 'pending'
		  	");
		  $count=1;
		  // $count_rows = mysqli_num_rows($query);
		  // echo $count_rows;
	  	while ($row=mysqli_fetch_array($query)) {
	  		?>
			  <tr>
				  <td>xxxxx</td>
				  <td>xxxxx</td>
				  <td>xxxxx</td>
				  <td><?php echo $row['passenger_eno']?></td>
				  <td>xxxxx</td>
				  <td><?php echo $row['visa_sponsor_name'] ?></td>
				  <td><?php echo $row['passenger_father_name_urdu'] ?></td>
				  <td><?php echo $row['passenger_name_urdu'] ?></td>
				  <td><?php echo $count?></td>
			  </tr>
	  		<?php
	  		$count++;
	  		}
		  ?>
		
		</tbody>
	  </table>






</section>
  

</section>


<br>


<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
              <form action="#" method="post">
              	<input type="submit" name="print_and_save" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Print And Save" />
              </form>

        </section>
    </section>
</section>

<br> <br>


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

