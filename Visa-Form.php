<?php
include_once('connect.php');
if(isset($_GET['case_id']))
{
	$id = $_GET['case_id'];
	$query = mysqli_query($con, "
SELECT cases.*, 
users.name as username,  
visa_status.name as visa_status_name,
visa_profession.name as visa_profession
FROM `cases` 
INNER JOIN users 
ON users.user_id = cases.agency_id
INNER JOIN visa_status
ON visa_status.visa_status_id = cases.visa_status_id
INNER JOIN visa_profession
ON visa_profession.visa_profession_id = cases.visa_profession_id
where case_id = '$id'");
	$row = mysqli_fetch_array($query);
	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";

}

if(isset($_GET['passenger_id']))
{
	$id = $_GET['passenger_id'];
	$query = mysqli_query($con, "
SELECT regents.*, passenger_details.*, visa_profession.name as visa_profession FROM passenger_details 
INNER JOIN regents
ON
regents.regent_id = passenger_details.regent_id
INNER JOIN visa_profession
ON
regents.visa_profession_id = visa_profession.visa_profession_id
where passenger_id = '$id'
		");
	$row = mysqli_fetch_array($query);
	echo "<pre>";
	print_r($row);
	echo "</pre>";
}

?>

<!doctype html>
<html>
<head>

	<link rel="icon" href="" type="image/icon type">
	
<link href="css/Main StyleSheet.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="css/jquery-fab-button.css" rel="stylesheet">
<script src="jQuery/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/wow.min.js"></script>
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet" />
<script src="js/bootstrap-hijri-datepicker.js"></script>

<script>
	$(window).scroll(function(){
		$("nav").toggleClass("scrolled",$(this).scrollTop() > 570)
	});
</script>
<script>
     new WOW().init();
</script>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Visa Form</title>
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
        border: 1px solid rgb(190, 190, 190);
    }

    tr{
        width: 300px !important;
    }
    thead{
        background-color: #007BFF;
        color: white;
    }
    td{
        border: 1px solid gray;
        width: auto !important;
    }
    th{
        width: auto !important;
    }
</style>



</head>

<body>
		
	
<section class="container">
	<section class="main m-auto border" style=" padding: 40px;">

		<section class="row">
			<section class="col-md-3 ml-auto ">
					
			</section>
			<section class="col-md-6 ml-auto text-center ">
				<center><img src="assets/visa-form-logo.PNG" class="img-responsive m-auto" width="100px" height="auto" alt=""></center>
				<span><b>THE KINGDOM OF SAUDI ARABIA</b></span><br>
				<span>20-22, Khayaban-e-Hafiz, Phase-V, Defence Authority, Karachi-46, Pakistan</span><br>
				<span>Tel;021-35841154 – 56</span>
			</section>
			<section class="col-md-3 ml-auto ">
				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: عنوان الكفيل</span>
					</section>
				</section>

				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: الها تف </span>
					</section>
				</section>

				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: رقم الكفيل</span>
					</section>
				</section>


			</section>
		</section>

		<br>

		<section class="row" style="align-items: center;">
			<section class="col-md-4">
				<section class="photo m-auto" style="width: 200px;
				height: 250px;
				border-radius: 50px;
				border:1px solid black;
				text-align: center;">
				<br><br><br><br>
				<p><b>الصورة</b></p>
				<p><i>Photograph</i></p>	
			</section>
			</section>

			<section class="col-md-4 text-center">
				<section class="photo m-auto">
				
				<h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><b>طــلــب تأشــيرة</b></h2>
				<h4><u>VISA APPLICATION</u></h4>

				</section>
			</section>

			<section class="col-md-4">
				<input placeholder="Enter E No." type="text" class="form-control" style="color:black ;border-radius: 0px; border: 0px; border-bottom: 2px solid black; font-size: 25px; font-weight: bold;">
				<section class="photo "
				style="border:1px solid black ; margin-top: 10px;" >
					<section class="row" >
						<section class="col-12">
							<center><span>للاستعمال الرسمي</span></center>
							<hr>
						</section>
						<section class="col-12">
							<center><span>For Office Use</span></center>
							<hr>
						</section>
					</section>


					<section class="row" >
						<section class="col-6">
							<center><span><b>534232434</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span>رقم التأشيرة</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>1441-5-6</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span> تاريخ التأشيرة</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span> للعمل/للاقامة لدى</span></center>
						
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span>بتاريخ</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span>مدة التأشيرة</span></center>

						</section>
					</section>

				</section>
			</section>
		</section>


<br>

		<section class="row">
			<section class="col-md-2 col-4">
				<span>Name in Full: </span>
			</section>
			<section class="col-md-4 col-8 border-bottom">
				<span><b><?php echo $row['passenger_name'] ?></b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b><?php echo $row['passenger_name_urdu'] ?></b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>الاسم الكامل</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Father's Name: </span>
			</section>
			<section class="col-md-4 col-8 border-bottom">
				<span><b><?php echo $row['passenger_father_name'] ?></b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b><?php echo $row['passenger_father_name_urdu']?></b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>اسم الأب</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Husband's Name: </span>
			</section>
			<section class="col-md-4 col-8 border-bottom">
				<span><b></b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b></b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>اسم الزوج</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Place & Date of Birth: </span>
			</section>
			<section class="col-md-3 col-8 border-bottom">
				<span><b><?php echo $row['passenger_dob'] ?></b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b><?php echo $row['passenger_dob'] ?></b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>محل وتاريخ الميلاد</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Religion: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>Islam</b></span> <span class="float-right">الدين</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Occupation: <b><?php echo $row['visa_profession'] ?></b></span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b>سائق عموم المركبات</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>المهنة</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Material Status: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>Vela</b></span> <span class="float-right">الحالة الجنسية</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Sex: </span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b>MALE</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>الجنس</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Nationality: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>PAKISTANI</b></span> <span class="float-right">الجنسية</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Passport No: </span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b><?php echo $row['passenger_passport_no'] ?></b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>رقم الجواز</span>
			</section>
		</section>


		

		<section class="row">
			<section class="col-md-3 col-6">
				<span>Date & Place of Issue: </span>
			</section>
			<section class="col-md-3 col-6 border-bottom">
				<span><b><?php echo $row['passenger_date_of_issue']." " ?></b></span>
			</section>
			
			<section class="col-md-4 col-6 border-bottom ">
				<span><b>PAKISTAN</b></span>
			</section>
			<section class="col-md-2 col-6 text-right ">
				<span>محل  و تاريخ الإصدار</span>
			</section>
		</section>



		<section class="row">
			<section class="col-md-3 col-4">
				<span>Passport Valid Upto: </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span><b>Date</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>تاريخ انتهاء الصلاحية</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Permanent Address : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span><b>DIR</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>العنوان الدائم</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Purpose of Travel : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Work</span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Umra</span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Business</span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Hajj</span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Visit</span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span>Transit</span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>الغاية من السفر</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Port of Entry : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span><b>Jehhad</b></span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span><b>Riyadh</b></span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span><b>Damman</b></span>
				<span class="mr-2"><span class=" text-light mr-2" style="border:1px solid black;">oo</span><b>MED KSA</b></span>
				
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>ميناء الدخول</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Sponsor's Name: : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<!-- <span><b>مصنع سلمى محمد فرحان حجي للتصنيع</b></span> -->
				<span><b><?php echo $row['visa_sponsor_name'] ?></b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span> اسم الكفيل</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-6">
				<span>Address of Sponsor : </span>
			</section>
			<section class="col-md-3 col-6 border-bottom">
				<span><b>RIYADH  KSA</b></span>
			</section>
			
			<section class="col-md-4 col-6 border-bottom ">
				<span><b>ID NO# <span>56345346346</span></b></span>
			</section>
			<section class="col-md-2 col-6 text-right ">
				<span>عنوان الكفيل</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Sign. of Applicant : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span><b></b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>توقيع طالب التأشيرة</span>
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

