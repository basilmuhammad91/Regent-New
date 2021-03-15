<?php

include('connect.php');
session_start();
if($_SESSION['role'] !== 'Admin' && $_SESSION['role'] !== 'Employee')
{
	echo "<script>window.location.href='index.php';</script>";
}


if(isset($_GET['agreement_id']))
{
	$agreement_id = $_GET['agreement_id'];
	$query = mysqli_query($con, "
SELECT *, visa_embassy.name AS visa_embassy, visa_permission_status.name AS visa_permission_status, visa_profession.name AS visa_profession, visa_co_agent_pak.name AS visa_co_agent_pak, visa_status.name AS visa_status, visa_agent_from_saudia.name AS visa_agent_from_saudia, passenger_details.passenger_name AS passenger_name, passenger_details.passenger_father_name AS passenger_father_name, passenger_details.passenger_national_identity_no AS passenger_national_identity_no, passenger_details.passenger_address AS passenger_address, passenger_district.name AS passenger_district, passenger_details.passenger_dob AS passenger_dob, passenger_place_of_birth.name AS passenger_place_of_birth, passenger_details.passenger_passport_no AS passenger_passport_no, passenger_details.passenger_date_of_issue AS passenger_date_of_issue, passenger_place_of_issue.name AS passenger_place_of_issue, passenger_details.passenger_country AS passenger_country, agreement_details.agreements_contract AS agreements_contract, agreement_details.agreements_salary AS agreements_salary, agreement_details.agreements_permission_number AS agreements_permission_number, agreement_details.agreements_permission_date AS agreements_permission_date, passenger_details.passenger_name_urdu AS passenger_name_urdu,
passenger_details.passenger_father_name_urdu AS passenger_father_name_urdu, agreement_details.nominee_full_name AS nominee_full_name, agreement_details.nominee_cnic AS nominee_cnic
FROM agreement_details
INNER JOIN passenger_details
ON
passenger_details.passenger_id = agreement_details.passenger_id
INNER JOIN regents
ON
passenger_details.regent_id = regents.regent_id
INNER JOIN visa_embassy
ON
regents.visa_embassy_id = visa_embassy.visa_embassy_id
INNER JOIN visa_permission_status
ON
regents.visa_permission_status_id = visa_permission_status.visa_permission_status_id
INNER JOIN visa_profession
ON
regents.visa_profession_id = visa_profession.visa_profession_id
INNER JOIN visa_co_agent_pak
ON
regents.visa_co_agent_pak_id = visa_co_agent_pak.visa_co_agent_pak_id
INNER JOIN visa_status
ON
regents.visa_status_id = visa_status.visa_status_id
INNER JOIN visa_agent_from_saudia
ON
visa_agent_from_saudia.visa_agent_from_saudia_id = regents.visa_agent_from_saudia_id
INNER JOIN passenger_district
ON
passenger_district.passenger_district_id = passenger_details.passenger_district_id
INNER JOIN passenger_place_of_birth
ON
passenger_place_of_birth.passenger_place_of_birth_id = passenger_details.passenger_place_of_birth_id
INNER JOIN passenger_place_of_issue
ON
passenger_details.passenger_place_of_issue_id = passenger_place_of_issue.passenger_place_of_issue_id
WHERE agreement_details.agreement_id= '$agreement_id'
") or die(mysqli_error($con));

	$row=mysqli_fetch_array($query);
	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";
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

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Home</title>
<style>
	.main{
		width: 1000px;
		border: 1px solid black;
		height: auto;
		padding: 50px !important;
		
	}
	.main-header{
		width: 750px;
	}
	.main-footer{
		width: 750px;
	}
	p{
		font-size: medium;
		line-height: 1;
	}
	th{
		border: 1px solid black !important;
		padding: 0px !important;
		padding-left: 2px !important; 
		padding-right:2px !important;
		font-size: 12px !important;
		text-align: center;
	}
	td{
		border: 1px solid black !important;
		padding: 0px !important;
		padding-left: 2px !important; 
		padding-right:2px !important;
		font-size: 12px !important;
	}
	.textbox{
		color: transparent;
		border: 1px solid black;
	}
	.br{
		border-right: 1px solid black;
		margin: 0px !important;
	 
	}

	.bl{
		border-left: 1px solid black;
		margin: 0px !important;
	
	}

	.bt{
		border-top: 1px solid black;
		margin: 0px !important;
	
	}

	.bb{
		border-bottom: 1px solid black;
		margin: 0px !important;
	}
	
</style>
</head>

<body>
	<br><br>

	<section class="container-fluid">
		<input id="print_table" type="button" class="btn-primary btn" value="Print Report" />
	</section>
<br><br>

<div id="print_div">
		<section class="main m-auto p-5">


		<section class="row" style="align-items: center;">
			<section class="col-5">
				<h4><b>M/S REGENT OVERSEAS</b></h4><br>
				<h4><b>EMPLOYMENT PROMOTION</b></h4><br>
				<h4><b>OP & HR/3952/KAR/2016</b></h4>
			</section>
			<section class="col-1 m-auto">
				<img src="assets/gf.jpg" class="img-fluid" style="transform: scale(2);" alt="">
			</section>
			<section class="col-5 ml-auto">
				<p><b>Office No. F-40</b></p>
				<p><b>GLASS TOWER 1st FLOOR NEAR TEEN TALLWAI</b></p>
				<p><b>CLIFTON KARACHI</b></p>
				<p><b>Phone: <span>+92 21 356555052</span></b></p>
				<p><b>fax: <span>+92 21 356555051</span></b></p>
				<p><b>Email: <span>regentoverseas3952@hotmail.com</span></b></p>
				<p><b>Web: <span>www.regentoverseas.com</span></b></p>
			
			</section>
		</section>	


		<br>
	<br>
		<center>
			<h5 style="margin-right: 200px;"><b><u>SERVICE CARD OF SELECTED EMIGRANT</u></b></h5>
		</center>
	<br>
		<section class="row" style="align-items: center;">

			<section style="height: 155px; width: 120px; border: 4px solid white; position: absolute; right: 40px; background-color: white; z-index: 10000;">
				<section style="height: 100%; width: 100%; border: 2px solid black;"></section>
			</section>

			<section class="">
				<p>1. NAME : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_name']; ?></p>
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="">
				<p>2. FATHER'S NAME : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_father_name'] ?></p>
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="">
				<p>3. N.I.C # </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_national_identity_no'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>4. ADDRESS : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_address'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>5. DISTRICT : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_district'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>6. DATE OF BIRTH : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_dob'] ?></p>
			</section>
			<section class="">
				<p>PLACE OF BIRTH : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_place_of_birth'] ?></p>
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="">
				<p>7. PASSPORT #  : </p>
			</section>
			<section class="col-5" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_passport_no'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>8. DATE OF ISSUE : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_date_of_issue'] ?></p>
			</section>
			<section class="">
				<p>PLACE OF ISSUE : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_place_of_issue'] ?></p>
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="">
				<p>9. COUNTRY : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['passenger_country'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>10. CONTRACT : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['agreements_contract'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>11. CATEGORY : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['visa_profession'] ?></p>
			</section>
		</section>
		
		<section class="row" style="align-items: center;">
			<section class="">
				<p>12. SALARY : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['agreements_salary'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>13. PERMISSION #  : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['agreements_permission_number'] ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>14. DATED : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo date("d-m-Y", strtotime($row['agreements_permission_date'])) ?></p>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="">
				<p>15. NAME OF EMPLOYER : </p>
			</section>
			<section class="col" style="border-bottom: 2px solid black; height: 10px; padding-bottom: 15px; ">
				<p style="line-height: 0px;"><?php echo $row['visa_sponsor_name'] ?></p>
			</section>
		</section>


		<p>RES. NO.</p>	<br>
		<p>DATE:</p> <br>
		<p>PREVIOUS AGREEMENT NO.__________________________________DATED:___________________ ___________________________________________</p>
		<p style="float: left;">(IF RENEWAL CASE)</p>
		<p style="float: right; margin-right: 50px ">SIGNATURE OF PROMOTOR</p>
		<br><br>
		<p>DATE:____________________________</p>



	</section>

	<br><br>

	<section class="main m-auto p-5">


		<section class="row">
			<section class="col-6">
				<p>TO,</p>
				<p>The Protector of Emigrants,</p>
				<p>Government of Pakistan</p>
				<p><u>Karachi.</u></p>
			</section>
			<section class="col-6 text-right">
				<p>Dated : <u>20-2-2021</u></p>
			</section>
		</section>

		<section class="row">
			<section class="col-3">
				<p style="font-size: 16px;"><b>SUBJECT:- </b></p>
			</section>

			<section class="col-7">
				<span style="font-size: 16px;"><b><u>REGISTRATION OF PASSPORT (S) AGAINST PERMISSION NO.</u></b></span><br>	
				<span style="font-size: 16px;"><b><u>DATED</u></b></span><br>
			</section>
		</section>
		<br>

		<p>We hereby submit (1) passport (s) against the permission No., <span class="ml-4 mr-4"><b>4353234</b></span> dated <span class="ml-4 mr-4"><b>20-2-2021</b></span> recruitedd by us</p>

		<p class="float-left">our M/S. <span><b>M/S NAIF ABED OBAID AL SAMADNI K K.S.A</b></span>
		<br>
		is as per list attached. We hereby undertake as under:-
		</p>
		<p class="float-right mr-5">This may please be registered. His det</p>
	<br>
	<table class="table table-bordered text-canter">
		<thead>
			<tr>
			  <th scope="col">S.#</th>
			  <th scope="col">NAME</th>
			  <th scope="col">FATHER NAME</th>
			  <th scope="col" class="text-center">CATEGORY</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td><?php echo $row['passenger_name'] ?></td>
			  <td><?php echo $row['passenger_father_name'] ?></td>
			  <td class="text-center"><?php echo $row['visa_profession'] ?></td>
			</tr>
			
			
		  </tbody>
	</table>


	<table class="table table-bordered text-canter m-auto " style="width: 700px;">
		<thead>
			<tr>
			  <th scope="col">Service</th>
			  <th scope="col">OPF</th>
			  <th scope="col">State life insurance</th>
			  <th scope="col">registration Fees</th>
			  <th scope="col">OEC</th>

			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td><b>6000/=</b></td>
			  <td><b>2000/=</b></td>
			  <td><b>2500/=</b></td>
			  <td><b>500/=</b></td>
			  <td><b>200/=</b></td>
			</tr>
			
			
		  </tbody>
	</table>

	<br>
	<section class="container text-center">
		<h6 style="line-height: 1.5;">That all the required document as required under the Emigration ordinance, 1979 & rules <br> 
			made there under are complete for the purpose of registration. All the decuments are genuine <br>
			for all purpose & intent as stated above. Further more, we hereby take the responsibility of <br>
			the fulfillment of terms 6 conditions of employment ordinance, 1979, rules 1979 and the procedure <br>
			issued by the Federal Government from time to time. <br>
			That at any stage if the above information is proved incorrect/false,
			we shall be held responsible for all legal <br>
			consequences/punitive action under the relevant law <br>
			You are requested to kindly register the aforementioned <br>
			Passport/s & oblige 
		</h6>
	</section>

	<br><br>

	<section class="container-fluid text-right">

		<span>
			Your Sincerely, <br>
			Proprietor <br>	
			<i style="font-size: 20px;">REGENT OVERSEAS</i>
		</span>

	</section>



	</section>




	<br><br>

	<section class="main m-auto p-5">

		<center>
			<h4><b>STATE LIFE INSURANCE CORPORATION OF PAKISTAN</b></h4>	

		</center>
		<br>

		<section class="text-right">
			<p style="font-weight: normal; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 25px; line-height: 30px;">
				میں مسمی   <b><?php echo $row['passenger_name_urdu'] ?></b> ولد   <b><?php echo $row['passenger_father_name_urdu'] ?></b>  حلفیہ بیان کرتا / کرتی ہوں کہ میں میسرز ۔۔۔۔۔۔۔۔۔۔۔ لائسنس نمبر ۔ 3952 کے ذریعے بطور ۔ <?php echo "<span style='display: inline-block; margin-left: 10px;'> ".$row["visa_profession"]."</span>" ?>ملازمت کیلئے <?php echo "<span style='display: inline-block; margin-left: 10px;'> ".$row["passenger_country"]."</span>" ?>(ملک) جارہا / ری ہوں ۔ کمپنی / کفیل کا نام ۔<?php echo "<span style='display: inline-block; margin-left: 10px;'> ".$row["visa_sponsor_name"]."</span>" ?>ہے ۔ میری ماہانہ  تنخوا <?php echo "<span style='display: inline-block; margin-left: 10px;'> ".$row["agreements_salary"]."</span>" ?>ہے  اور  باقی مراعات میں ۔۔۔۔۔۔۔۔۔۔۔ (کھانا،  رہائش، میڑیکل وغیرہ) شامل ہیں ۔ میری ملازمت کا کنٹریکٹ ۔۔۔۔۔۔۔ کے عرصے کیلئے ہے ۔ ملازمت کی شرائط سے مجھے مکمل طور پر آگاہ کر دیا گیا ہے اور مجھے کسی جنگ زدہ علاقے میں تعینات نہیں  کیا جائے گا۔
			
				<br><br>

				میں نے اس ملازمت کے حصول کیلئے ریکروٹنگ ایجنسی کو مبلغ ۔۔۔۔۔۔۔۔۔۔۔۔۔۔ روپے ادائگی کی ہے جس کی اصل رسید میں نے حاصل کرلی ہے ۔ میرا ریکروٹنگ

				ایجنسی سے اس ملازمت کے اخراجات کا کونی تنازعہ، کلیم یا شرط نہیں ہے ۔ میں نے اپنا فارن سروس ایگریمنٹ اچھی طرح پڑھنے اور سمجھنے کے بعد خود اس پر  دستخط کیے ہیں ۔

				پروٹیکٹر آف ایمیگر انڑس میں بھی مجھے جمع بریفنگ دی گئی ہے ۔ میں نے اس ملازمت کیلئے سب ایجنٹ و غیرو کوئی رقم ادا نہیں کی ہے ۔ میرا ویزہ آزاد ویزہ نہیں ہے ۔ میں اپنی جائے ملازمت کو  غیر قانونی طور پر چھوڑ  کر دوسری ملازمت اختیار  نہیں

				کروں گا / گی  اور  ایسا کرنے کی صورت میں اس کے  نتائج کا میں خود ذمیدار ہوں گا / گی ۔ میں میزبان  ملک کے قوانین وروایات اور

				ایمیگریشن آرٹیننس 1979 اور اس کے تحت بننے والے قوانین  کا / کی پا بند رہوں گا/ گی۔ میری اس ملازمت سے متعلق
				
				میزبان ملک کے قانون کے مطابق اگر کوئی امتحان (سیکورٹی گارڈ وغیرہ کی صورت میں ہو تو اگر میں اسے پاس نہ  کر سکا تو اس صورت میں نقصان کا ذمے دار میں  خود  ہوں گا ۔ کوئی ایسی شکایت جس کا تعلق خالصتا ریکروٹنگ ایجنسی سے  ہو  لیکن کمپنی یا  کفیل سے  نہ ہو ، اسے میزبان  ملک پہنچنے کے چھ ماہ کے اندر تحریری طور  پر بیورو آف ایمیگریشن اینڑ اوور سیز ایمپلائمنٹ ، ایمیگریشن ٹاور پلاٹ نمبر 10 ، ماووایریا

				، سیکٹر جی ایٹ ون اسلام آباد کو بھجوانے کا حقدار ہوگا ۔ تاہم کمپنی یا  کفیل کی طرف سے مدت ملازمت کے دوران معاہدہ ملازمت کی خلاف ورزی کی  صرورت میں  ریکروٹنگ ایجنسی کو فوری طور پر آگاہ کروں گا ۔ اگر اس کے باوجود مسئلہ حل نہ ہوا تو  میزبان ملک میں موجود پاکستانی سفار تخانے ، لیبر کورٹ یا بیورو آف ایمیگریشن اینڑ اوور سیز ایمپلائمنٹ کو تحریر  طور پر شکایت کرنے کا حقدار ہوں گا ۔
				
				<br> <br>

				میں نے ریکروٹنگ ایجنسی کے علاؤہ ویزہ کے حصول کیلئے ۔۔۔۔۔۔۔۔۔۔۔۔۔۔ روپے خرچ کیے ہیں  جو کہ  مسمی ۔<b><?php echo $row['passenger_name_urdu'] ?></b> ولد <b><?php echo $row['passenger_father_name_urdu'] ?></b> کو اپنے طور پر ادا کۓ ہیں اور اس کا ریکروٹنگ ایجنسی سے کوئی تعلق نہیں ہے ۔ مندرجہ بالا بیان میں ، میں نے کوئی بات جان بوجھ کر پوشیدہ نہیں رکھی ہے  اور

				 اس کو پوشیدہ رکھنے کے نتائج کا میں خود ذمیدار ہوں۔ میں نے اس بیان کو بحوش و حواس اچھی طرح
				 پڑھ اور سمجھ لیا ہے ۔

				 <br><br>


					 <span>دستخط / انگو ٹھا</span>					<span class="mr-5 pr-5">تاریخ</span>

				<br><br>

				
					<span>پاسپورٹ نمبر </span>					<span class="mr-5 pr-5">شناختی کرڈ نمبر</span>	
				<br><br>
				<span>مکمل پتا </span>
			</p>
		</section>

	</section>


	<br><br>

	<section class="main m-auto p-5">

		<center>
			<h4><b>STATE LIFE INSURANCE CORPORATION OF PAKISTAN</b></h4>
			<p>State Life Building No. 9, 7th Floor, Dr, Ziauddin Ahmed Road, Karachi</p>
			<br>
			<p><b>GROUP AND PENSIONS DIVISION</b></p>
		</center>


		<section class="pl-1 pt-4 " style="	border: 1px solid black;" >
			<section class="row">
				<section class="col-3"><span>Certificate No.</span></section>
				<section class="col-3"><span>Date:</span></section>
				<section class="col-3"><span>Registration No.</span></section>
				<section class="col-3"><span>Date:</span></section>
			</section>

		</section>

		<span>Please Tick</span><br><br>

		<span style="width: 80px; font-size: large; color: transparent; border: 1px solid black;">ooi</span> <span class="ml-4">Application for Insurance of Pakistan Emigrants Proceeding abroad for employment.</span> <br>

		<span style="width: 80px; font-size: large; color: transparent; border: 1px solid black;">ooi</span> <span class="ml-4">Application for Insurance of Pakistan Emigrants Registered abroad by Pakistani Mission.</span><br>

		<span style="width: 80px; font-size: large; color: transparent; border: 1px solid black;">ooi</span> <span class="ml-4">Application for Renewal of Insurance of Pakistani Emigrants working abroad.</span><br>
	<br>


		<table class="table table-bordered text-canter m-auto " style="width: 800px; ">
			<tbody>
				<tr>
					<td>Name of the Applicant</td>
					<td><b><?php echo $row["passenger_name"] ?></b></td>
				</tr>
			  
			 
				<tr>
				  <td>Father's Husband's Name</td>
				  <td><b><?php echo $row["passenger_father_name"] ?></b></td>
				</tr>

				<tr>
					<td>Date & Playe of Birth</td>
					<td><b><span><?php echo $row["passenger_dob"] ?></span> , <span class="ml-3"><?php echo $row["passenger_place_of_birth"] ?></span></b></td>
				</tr>

				<tr>
					<td>N.I.C No.</td>
					<td><b><?php echo $row["passenger_national_identity_no"] ?></b></td>
				</tr>

				<tr>
					<td>Particulars of Passport</td>
					<td>
						<b><span>No.</span><span class="ml-2"><u><?php echo $row["passenger_passport_no"] ?></u></span></b>	<b><span class="ml-5">Issued At </span><span class="ml-2"><u><?php echo $row["passenger_place_of_issue"] ?></u></span></b><br>
						<b><span>Date. </span><span class="ml-2"><u><?php echo $row["visa_date"]?></u></span></b>	<b><span class="ml-5">Place </span><span class="ml-2"><u>RAWAPINDI</u></span></b><br>
						<b><span>Occupation</span><span class="ml-2"><u>56768</u></span></b>	<b><span class="ml-5">Driver </span><span class="ml-2"><u>RAWAPINDI</u></span></b>
					</td>
				</tr>
				

				<tr>
					<td>Postal Address in Pakistan for dispatch of insurance <br>Certificate</td>
					<td><b>4634634363463</b></td>
				</tr>
				

				<tr>
					<td>Address Abroad</td>
					<td><b>K.S.A</b></td>
				</tr>

				<tr>
					<td>Name and address of the Emplyer abroad</td>
					<td><b><?php echo $row["visa_sponsor_name"].$row["passenger_address"] ?></b></td>
				</tr>

				<tr>
					<td>Particulars of the Person to whom Insred Amount <br>
						is payable in the event of death of the Insured <br>
						Person.
					</td>
					<td>
						<section class="row">
							<section class="col-2">Name: </section>
							<section class="col-4 " style="border-bottom: 1px solid black; width: 95%;"> <span>Navin</span></section>
							<section class="col-5 ml-auto" style="border-bottom: 1px solid black; width: 95%;"></section>

							<section class="col-5">Relation with Egrement: </section>
							<section class="col-7 " style="border-bottom: 1px solid black; width: 95%;"><span>Dushman</span></section>

							<section class="col-4">N.I.C No. </section>
							<section class="col-8 " style="border-bottom: 1px solid black; width: 95%;"></section>

							<section class="col-4">Address. </section>
							<section class="col-8 " style="border-bottom: 1px solid black; width: 95%;"></section>

						</section>
					</td>
				</tr>


				<tr>
					<td>Amount of Insurance</td>
					<td>Rs. <span>130403/-</span> (Rupees Ten Hundred Thousend Only)</td>
				</tr>

				<tr>
					<td>Period of Insurance</td>
					<td><b>Two Years</b></td>
				</tr>

				<tr>
					<td>Date of Commecemant/Renwal of Insurance</td>
					<td><b></b></td>
				</tr>

				<tr>
					<td>Amount of Premium Paid</td>
					<td><b>Rs. 2000/-(Two Thousand only)</b></td>
				</tr>

				<tr>
					<td>Details of Previous Insurance Certificate</td>
					<td><b>Reg. No.</b></td>
				</tr>



			  </tbody>
		</table>

		<br>
		<p>I here by declare that the perticulars given in the Application Form are tune & Correct. In case of any
			Misstatment STATE LIFE/BUREAU shall have the right to cancel Certificate issued of the cases of this
			Form 'G' and take any legal action which it may deep fit. I understand that in case of issuance of two or
			more insurance Certificate to me the claim will be payable on only one Insurance Certificate.
			<br><br>
			Note:- In case of registration abroad the coverage will commence from date of issuance of Insurance Certification
			by State Life Insurance Corporation.
		</p>
		<br><br>
		<p>Signed on _________________________ this day _________________________ of _________________________ at _________________________
			<br> <br>
			in presence of witness
		</p>
	<br>
		<span class="text-center float-right">Signature/ L.T.L <br>
				of the Emigrant with date
		</span>
		<br>
	<br>

		<p>Witness Name _________________________ Sign. _________________________ N.I.C.No. ______________________________________
			<br><br> Attested by

		</p>

		<p class="ml-5 pl-5">CWA/Seat and Signature</p>

	</section>

	<br><br>

	<section class="main m-auto p-5">
		
		<section class="row">
			<section class="col-6">
				<p>Certified thr Mr. <b><u><?php echo $row["passenger_name"]?></u></b></p>
			</section>
			<section class="col-6">
				.The Intend
			</section>
		</section>

		<p>Emigrant referred to in the Certificate on the reverse here of has been Provided employment</p>
 	<br>

		<p class="text-center float-right">(Signature With Seal)
			<br><br>
			<b>PROMOTER</b>
		</p>
		<br><br>

		<section class="container"><hr></section>


		<p>Certified that Foreign Service Agreement of Mr <span><b><u><?php echo $row["passenger_name"]?></u></b></span></p>

		<span><b><u>S/O</u></b></span> <span class="ml-5"><b><u><?php echo $row["passenger_father_name"]?></u></b></span>

		<br><br>

		<p>has been registered with this office vide our</p>

		<br><br>

		<p>KL.No._________________ Date._________________ and that the entery o visa has been made in the passport of that the 
			Embassy of country of Emigration has Certified that visa  shall be endorsed on arrival in that country
		</p>

		<br><br>

		<p class="text-center float-right">
			Signature with Seal <br><br>
			<b>PROTECTOR OFMIGRANTS</b> <br><br>
			<b>GOVERNMENT OF PAKISTAN</b>
		</p>

		
	<br><br><br><br>

		<section class="container"><hr></section>

		<br>

		<p>Certified that Mr. <span>_________________________</span> the Intending Emigrant Referret to in the Certificate on the 
			reverse has not been Provided job overseas
		</p>

	<br><br><br>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p>Signature with Seal</p> 
				<p><b>PRITECTOR OFEMIGRANTS</b></p>
				<p><b>GOVERNMENT OF PAKISTAN</b></p>

			</section>
			<section class="col-6 text-center">
				<p>( Signature with Seal )</p>
				<p><b>PROMOTER</b></p>
			</section>
		</section>


	</section>	

	<br><br>

	<section class="main m-auto p-5">
		
		<center>
			<h4><b><u>NEW FORM</u></b></h4>
			<h4>REGISTRATION OF FOREIGN SERVICE <br>
				AGREEMENT
			</h4>
		</center>

		<br><br>


		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>1. PROMOTERS LICENCE TITLES : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Regent Overseas
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>2. VALIDITY OF LICENCE UPTO : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				31-12-2021
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>3. NAME OF PRINCIPLE : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				<?php echo $row["visa_sponsor_name"] ?>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>4. DATE OF SUBMISSION OF FSA : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				<?php echo date("m-d-Y") ?>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>5. COUNTRY OF RECRUITMENT : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				KSA
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>6. NO. & DATE OF PERMISSION : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				<?php echo $row["visa_date"] ?>
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>7. DATE OF EXPIRY OF PERMISSION : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>8. DATE OF EXT. OF PERMISSION : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>9. DEMAND ALLOWED : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>10. NO. OF PASSPORT/FSA SUBMITTED : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6 pl-5">
				<p><b>a. No. Of FSA/Passports <br>
					<span class="ml-3">already registered.</span>
				</b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6  pl-5">
				<p><b>b. Net Balance </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>11. WHETHER SELECTION MADE <br> THROUGH ADVT ./NOMINATION : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>12. ARE VISAS IN ORDER ? </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>13. ARE FSAS IN PROPER ORDER ? </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>14. AMOUNT OF REGD. FEE PAID : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Challan No:  (REMAINING)
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>15. NUMBER OF B.CS ATTACHED : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>16. NUMBER OF OPF PAID CAHLLANS : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>17 . NUMBER OF INSURANCE ATTACHED : </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				Yes
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>18. ARE NADRA FORMALITIES COMPLETE ? </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>19. WHETHER EMIGARTS BRIEFED ? </b></p>
			</section>
			<section class="col-6 P-0 border-bottom text-center">
				
			</section>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-12">
				<p><b>20. WHETHER ALL REQUIREMENTS FOR THE PURPOSE OF REGISTRATION </b></p>
			</section>
		</section>


		<section class="row" style="align-items: center;">
			<section class="col-2">
				<p><b>COMPLETED : </b></p>
			</section>
			<section class="col-10 border-bottom">
				<p><b> </b></p>
			</section>
		</section>
	<br><br>
		<section class=" text-right">
			<p><b>Signature of Checking Clerk</b></p>
		</section>

		<section class="row" style="align-items: center;">
			<section class="col-12">
				<p><b>21. ALL ABOVE MENTIONED FORMALITIES CHECKED AND FOUND IN ORDER : </b></p>
			</section>
			<section class="col-12 border-bottom">
				<p><b> </b></p>
			</section>
				
			<section class="col-12 border-bottom mt-3">
				<p><b> </b></p>
			</section>
		</section>
	<br>
		<section class="row" style="align-items: center;">
			<section class="col-6">
				<p><b>22. APPROVAL OF THE PROPECTOR OF EMIGRATION : </b></p>
			</section>
			<section class="col-6 border-bottom">
				<p><b> </b></p>
			</section>
			<section class="col-12 border-bottom mt-3">
				<p><b> </b></p>
			</section>
		</section>
		<br>
		<section class=" text-right">
			<p><b>Signature of AD.</b></p>
		</section>
		

	</section>	
	
	<br><br>

	<section class="main m-auto p-5">
		<center>
			<p>(See rule 15 (1))</p>
			<h4><b>ALLIED BANK LIMITED</b></h4>
		</center>

		<section class="row">
			<section class="col-6 text-center">
				<span>REF NO:</span>
			</section>

			<section class="col-6 text-center">
				<span>ABL/</span>
			</section>
		</section>

		<center>
			<h5>CERTIFICATE</h5>
		</center>

		<br><br>	

		<p>Mr./Mrs./Miss <span class="ml-5 mr-5"><b><u>MUHAMMAD MUNEER</u></b></span> has deposited with us a sum of 
		Rs. 6000/- (SIX THOUSAND RUPEES ONLY) for making payments in due course on behalf of Mr <span><b><u><?php echo $row["passenger_name"]?></u></b></span>
		<span class="ml-5"><b><u>S/O</u></b> <span class="ml-2"><b><u><?php echo $row["passenger_father_name"] ?></u></b></span></span> <br>
		Holder the passport No: <b><u> <?php echo $row["passenger_passport_no"] ?></u></b> <span class="ml-4">Identity Card n <b><u><?php echo $row["passenger_national_identity_no"] ?></u></b></span>
		</p>


		<section class="border-bottom pb-0">
			<span>Address: <span class="ml-3"><b><?php echo $row["passenger_address"] ?></b></span></span>
		</section>

		<br>

		<section class="border-bottom pb-0">
			<span>(Intending to emigrant) through M/s: <span class="ml-3"><b>REGENT OVERSEAS</b></span></span>
		</section>

		<br>

		<section class="border-bottom pb-0">
			<span>License No: <span class="ml-3 mr-4"><b>op/hrd 3952-KHI</b></span> The Overseas Employment Promoters</span>
		</section>

		<br>

		<span><u>Address:</u></span> <span class="ml-5"><u><b>KARACHI</b></u></span>

		<br>

		<p><span class="text-light">________</span>
			The above payment will be effected on the production of this receipt in original Along with
			Promoters confirming That the above a certificate of above mentioned Overseas Employment
			mentioned person intending to emigrate has been provided employment Abroad and certified by the
			protector of emigrants, Ministry of Manpower Government Of Pakistan , that the foreign service
			agreement of such person has been registered and entry of visa has been made in the passport or
			has certified that visa shall be endorsed on arrival in that the embassy of country of emigration
			country.
		</p>
		<br>

		<section class="row mt-5">
			<section class="col-4 text-left">
				<center>
					<span>_______________________________</span><br>
					<span><b><u>Authorized Signature</u></b></span>
				</center>
				
			</section>
			<section class="col-4 text-right ml-auto">
				<center>
					<span>_______________________________</span><br>
					<span><b><u>Authorized Signature</u></b></span>
				</center>
			</section>
		</section>

		<br>

		<p>Note: The mentioned amount is refundable to above depositer on production of this certificate along 
			with a statement by the concerned promoter that the above named emigrant has not been able to find employment abroad.
		</p>


	</section>	

	<br><br>

	<section class="main m-auto ">
		<center>
			
			<h4><b>REQUEST FOR ISSUANCE OF FORM-7</b></h4>
			<p class="ml-5 pl-5"><strong>(Under Emigration Rules-1979)</strong></p>
		</center>

		
		<section class="text-right">
			<span>Date:- <span><b><u>7-5-2021</u></b></span></span>
		</section>

		<br>

		<p>I/We request for issuance of form-7 (under Emigration Rules-1979) as per appended details:</p>

		<span><b>A.  <span>Depositor Details</span></b></span>

		<section class="">
			<section class="row pl-4 pr-4">
				<section class="col-2 border"><span>Name</span></section>
				<section class="col-4 border"><b>MUHAMMAD MUNEER</b></section>
				<section class="col-2 border">S/O D/O W/O</section>
				<section class="col-4 border"><b>GHULAM MUSTAFA</b></section>
				<section class="col-2 border">Contact No.</section>
				<section class="col-4 border"><b>0300-2025052</b></section>
				<section class="col-2 border">ID Number*</section>
				<section class="col-4 border"><b>31301-2356664-9</b></section>
			</section>
		</section>

	<span><b>B.  <span>Intending Emigrant(s)Details</span></b>(List atteched for more than one Intending Emigrant)</span>

		<section class="">
			<section class="row pl-4 pr-4">
				<section class="col-2 border"><span>Name</span></section>
				<section class="col-4 border"><b><?php echo $row["passenger_name"] ?></b></section>
				<section class="col-2 border">S/O D/O W/O</section>
				<section class="col-4 border"><b><?php echo $row["passenger_father_name"] ?></b></section>
				<section class="col-2 border">Contact No.</section>
				<section class="col-4 border"><b>_______________</b></section>
				<section class="col-2 border">ID Number*</section>
				<section class="col-4 border"><b><?php echo $row["passenger_national_identity_no"] ?></b></section>
				<section class="col-2 border-top border-left border-right">Address</section>
				<section class="col-10  border"><b><?php echo $row["passenger_address"] ?></b></section>
				<section class="col-2 border-bottom border-left border-right"></section>
				<section class="col-4 border"><b></b></section>
				<section class="col-2 border">Passport Number.</section>
				<section class="col-4 border"><b><?php echo $row["passenger_passport_no"] ?></b></section>
			</section>
		</section>

	<span><b>C.  <span>Overseas Employement Promoter (O.E.P) Details</span></b></span>
		
	<section class="">
		<section class="row pl-4 pr-4">
			<section class="col-2 border"><span>Name</span></section>
			<section class="col-10 border"><b>REGENT OVERSEAS</b></section>
			<section class="col-2 border-top border-left border-right">Address</section>
			<section class="col-10  border"><b><?php echo $row["passenger_address"] ?></b></section>

			<section class="col-2 border-bottom border-left border-right"></section>
			<section class="col-3 border"><b></b></section>
			<section class="col-3 border">O.P.E License No.</section>
			<section class="col-4 border"><b>EF332311304</b></section>
		</section>
	</section>

	<span><b>D.  <span>Desposite Details</span></b></span>

	<section class="">
		<section class="row pl-4 pr-4">
			<span class="textbox">ooi</span> <span class="ml-3"><b>Account # </b></span>

			<span class="textbox ml-4">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>

			<span class="ml-3"><b>Cheque # </b></span>

			<span class="textbox ml-4">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>
			<span class="textbox">ooi</span>

		
		</section>
		
		<section class="row pl-4 pr-4 mt-2">
			<span class="textbox">ooi</span> <span class="ml-3"><b>Cash </b></span>
		</section>
		
	</section>
	

	<br>


	<section class="pl-5">

		<p><b>Amount in Figure</b> <span class="ml-4"><u>6000/-</u></span></p>

		<p><b>Amount in Words</b> <span class="ml-4"><u>Six THOUSAND RUPEE ONLY</u></span></p>

	</section>


	<section class="">
		<p>I/We unnderstand that this deposit is governed by Emigration Rule-1979 and refund against Form-7 shall only be madee to the depositor.</p>
		
		<p>All claim against any Form-7 will only be processed after endorsement bby the concerned Protector of Emigrants, Bureau of
			Emigration Overseas Employement (BEOE), Ministry of Oversear Pakistan Human Resource Development, Government of Pakistan.
		</p>

		<p>_____________________________</p>
		<p>(Signature of the Depositor)</p>
		<br>
		<p>*Copy (ies) of CNIC/SNIC/NICO Pics mandatory</p>
	</section>

	<br>

	<section class="textbox text-center">
		<h5 class="text-dark"><b>FOR BANK USE ONLY</b></h5>

		
	</section>
	<br>

	<p>Form-7 issued form serial No.________________________ to Serial No.________________________</p>
	<p>Total Form issued ________________________.</p>

	<section class="row">
		<section class="col-2"></section>
		<section class="col-3 text-center"><p><b>Authorized Signature</b></p></section>
		<section class="col-1"></section>
		<section class="col-3 text-center"><p><b>Authorized Signature</b></p></section>
		<section class="col-2"></section>
	</section>

	</section>	

	<br><br>

	<section class="border">
		<section class="main-header m-auto">

			<center><h2>ChallanLLAN NO.</h2></center>
	
			<section class="row" style="align-items: center;">
	
				<section class="col-4">
					<span><b>T.R.6</b></span>
					<br>
					<span><b>(Treasury Rule 92)</b></span>
					<br>
					<span ><b>Challan of Cash Paid into the</b></span>
				</section>
	
				<section class="col-8 pl-5">
					<span><b><u>Treasury/Sub Treasury</u> at <u>Karachi.</u></b></span><br>
					<span><b>State Bank of Pakistan</b></span>
				</section>
	
			</section>
	
		</section>	
	
	
	
	
		<section class="main m-auto " style="padding: 0px !important;">
	
	
			<section class="row " style="align-items: center;">
				<section class="col-8 text-center   ">
					<span><b>To be filled by the remitter</b></span>
				</section>
				<section class="col-4 text-center bl"  style="position: relative; left: -6px;" >
					<span style="font-size: 12px;"><b>To be filled in the <br> Department of the treasury</b></span>
				</section>
			</section>
			
			<section class="row bt"  style="align-items: center;">
				<section class="col-2 text-center " style="height: 110px; padding-top:5%; padding-bottom: 5%;">
					<p><b>By whom tendered</b></p>
				</section>
				<section class="col-2 text-center br bl" style="height: 110px; padding-top:2%; padding-bottom: 5%;">
					<p style=" font-size: 12px;"><b>Name(or designation and address of the person on whose behalf money is paid</b></p>
				</section>
				<section class="col-2 br text-center " style="height: 110px; padding-top:5%; padding-bottom: 5%;">
					<p style=" font-size: 12px;"><b>Full particulars of the remittance and of authority (If any)</b></p>
				</section>
				<section class="col-2 text-center  br"  style="height: 110px; padding-top:6%; padding-bottom: 5%;">
					<p style=" font-size: 15px;"><b>AMOUNT</b></p>
				</section>
				<section class="col-2 br text-center"  style="height: 110px; padding-top:5%; padding-bottom: 5%;">
					<p style=" font-size: 15px;"><b>Head Account</b></p>
				</section>
				<section class="col-2 text-center"  style="height: 110px; padding-top:5%; padding-bottom: 5%;">
					<p style=" font-size: 15px;"><b>Order to the Bank</b></p>
				</section>
			</section>
	
			<section class="row bt"  style="align-items: center;">
				<section class="col-2 text-left " style="height: 30px; padding-top:5%; padding-bottom: 5%;">
					<section style="position: absolute; left: -55px; top:0px; width: 240px; transform: rotate(-90deg);" >
						<p style="font-size: 14px; line-height: 0;"><b>Name:</b> <span><u><?php echo $row["passenger_name"] ?></u></span></p>
						<p style="font-size: 14px; line-height: 0;"><b>S/W/D/O:</b> <span><u><?php echo $row["passenger_father_name"] ?></u></span></p>
						<p style="font-size: 14px; line-height: 0;"><b>CNIC No.: </b><span><u> <?php echo $row["passenger_national_identity_no"] ?></u></span></p>
					</section>
					<p style="font-size: 12px; font-weight: bolder; position: relative; left: -10px; bottom: -130px;">Signature:____________</p>
				</section>
				<section class="col-2 text-center br bl" style="height: 300px; padding-top:2%; padding-bottom: 5%;">
					<section style="position: absolute; left: -55px; top:120px; width: 240px; transform: rotate(-90deg);" >
						<p style="font-size: 14px; line-height: 0;"><b>THE DIRECTOR</b></p>
						<p style="font-size: 14px; line-height: 0;"><b>PROTECTOR OF EMIGRANTS,</b></p>
						<p style="font-size: 14px; line-height: 0;"><b>GOVERNMENT OF PAKISTAN</b></p>
						<p style="font-size: 14px; line-height: 0;"><b>KARACHI</b></p>
						
					</section>
				</section>
				<section class="col-2 br text-center " style="height: 300px; padding-top:5%; padding-bottom: 5%;">
					<section style="position: absolute; left: -55px; top:120px; width: 240px; transform: rotate(-90deg);" >
						<p style="font-size: 14px; line-height: 0;"><b>REGISTRATION FEEE FOR (  )</b></p>
						<p style="font-size: 14px; line-height: 0;"><b>PERSON</b></p>
					</section>
					<p style="font-size: 15px; font-weight: bolder; position: relative; left: -10px; bottom: -235px;">TOTAL</p>	
				</section>
				<section class="col-2 text-center p-0 br"  style="height: 300px; padding-top:6%; padding-bottom: 5%;">
						<section class="row bb">
							<section class="col-9 br"><span style="font-size: 10px;"><b>RS.</b></span></section>
							<section class="col-3"> <span style="font-size: 10px; position: relative; left: -7px;"><b>PS.</b></span></section>
						</section>
						<section class="row bb">
							<section class="col-9 br" style="height: 250px !important;"><span style="font-size: 12px;"><b>RS.500/-</b></span></section>
							<section class="col-3"> <span style="font-size: 10px; position: relative; left: -7px;"><b></b></span></section>
						</section>
						<section class="row bb" style="border-bottom: 1px solid black;">
							<section class="col-9 br"><span style="font-size: 12px;"><b>RS.500/-</b></span></section>
							<section class="col-3"> <span style="font-size: 10px; position: relative; left: -7px;"><b></b></span></section>
						</section>
				</section>
				<section class="col-2 br text-center"  style="height: 300px; padding-top:5%; padding-bottom: 5%;">
					<section style="position: absolute; left: -55px; top:120px; width: 250px; transform: rotate(-90deg);" >
						<p style="font-size: 12px; line-height: 0;"><b>Manpower Managment (C02901-30)</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>C-029-Social Service Miscellanous C-02906</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>Registration and the Fees</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>From Pakistan Working Abroad</b></p>
					</section>
				</section>
				<section class="col-2 text-center"  style="height: 300px; padding-top:5%; padding-bottom: 5%;">
					<section style="position: absolute; left: -55px; top:120px; width: 250px; transform: rotate(-90deg);" >
						<p style="font-size: 12px; line-height: 0;"><b>Date</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>Correct Receive and grant receipt</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>(Signature of full designation of the officer</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>ordering the money to paid in)</b></p>
					</section>
				</section>
			</section>
	
			<section class="row bt pt-3">
				<section class="col pl-5">
					<p style="font-size: 13px;"><b>(In words Rupees)</b></p>
				</section>
				<section class="col-5">
					<h4><b><i>FIVE HUNDRED only)</i></b></h4>
				</section>
				<section class="col-4 ml-auto text-center">
					<p style="font-size: 12px; line-height: 0;"><b>To be used only in the</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>caaseof remitance to the</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>Bank through Department</b></p>
						<p style="font-size: 12px; line-height: 0;"><b>Officer or the Treasury Officer</b></p>
				</section>
			</section>
	
			
	
	
	
		</section>
		<section class="main-footer m-auto">
			<p><b>(Received payment in words)</b>RUPEES</p>
			<section class="row">
				<section class="col-3"><p><b>Treasure</b></p></section>
				<section class="col-3"><p><b>Acountant</b></p></section>
				<section class="col-3"><p><b>Date</b></p></section>
				<section class="col-3"><p><b>Treasure Officer</b></p></section>
			</section>
		</section>
	</section>

	<br><br>

	<section class="main-header m-auto border">

		<center><span>M/F NAIF ABED OBAID AL SAMADNI K.S.A</span></center>
			<p class="ml-5">K.S.A</p>
			<br><br>

			<span><?php echo $row["passenger_name"] ?></span> <span class="float-right">87363267823</span>
			<br>
			<span class="ml-3"><?php echo $row["passenger_father_name"] ?></span>
			<br>
			<span class="ml-5"><?php echo $row["passenger_address"] ?></span>
	<br><br>
		<section class="row">
			<section class="col-4 text-center">
				<span><?php echo $row["passenger_passport_no"] ?></span>
				<br>
				<span>20-Feb-2021</span>
			</section>
			<section class="col-4 text-center">
				<span>16-Jan-2021</span>
			</section>
			<section class="col-4">
				<span>RAWALPINDI</span>
				<br>
				<span>RAWALPINDI</span>
			</section>

			<section class="col-2">
				
			</section>

			
			<section class="col-4 text-center mt-5">
				<span>MATRIC</span>
				
			</section>

		</section>
	<br><br>
		<section class="row">
			<section class="col-4">
				<span><?php echo $row["nominee_full_name"] ?></span>
				<br>
				<span>SAME</span>
			</section>
			<section class="col-5 text-right">
				<span><?php echo $row["nominee_cnic"] ?></span>
			</section>
		</section>
	<br><br>
		<span><?php echo $row["visa_profession"] ?></span>
		<br><br>
		<span class="ml-5"><?php echo $row["agreements_salary"] ?></span>

	</section>

</div>

</body>
</html>

<script src="js/jquery-fab-button.js"></script>
<!-- ================================================= -->

<script src="printMe-master/jquery.min.js"></script>
<script src="printMe-master/jquery-printme.js"></script>
<script src="printMe-master/printMe-master/jquery-printme.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="print">
<link rel="stylesheet" type="text/css" href="css/style2.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">	
<script type="text/javascript">

$(document).ready(function(){

	$('#print_table').click(function(){
		$("#print_div").printMe({
			"path" : ["css/style.css","css/style2.css","css/bootstrap.min.css","Main StyleSheet.css", "css/animate.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "https://fonts.googleapis.com/css?family=Droid+Sans:400,700", "https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css", "https://use.fontawesome.com/releases/v5.4.1/css/all.css", "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "css/jquery-fab-button.css"]
		});
	});
});

</script>