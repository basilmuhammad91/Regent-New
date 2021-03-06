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
		<!----------------------Navigation------------------------->

		<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="align-items: center">
			
			
			<section class="mr-auto text-center">
				<i class="fas fa-user-circle" style="font-size: 30px; color: white;"></i>
				<a class="nav-link text-light list-link" href="#" >Admin</a>
				<section class="main1 showhidebox" >
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Profile</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Logout</a>
				</section>
			</section>	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav m-auto">
				<li class="nav-item active">
				  <a class="nav-link text-light showhide1"><i class="fas fa-user"></i> User</a>
				  <section class="main1 showhidebox" >
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Employe-list.html" ><b>o</b> Employee</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Field-employe-list.html" ><b>o</b> Field Employee</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-list.html" ><b>o</b> Agancy</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Client.html" ><b>o</b> Client</a>
				  </section>
				  
				</li>
				<li class="nav-item">
				  <a class="nav-link text-light showhide1"><i class="fas fa-list"></i> Enteries</a>
				  <section class="main1 showhidebox" >
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Enteries.html" ><b>o</b> Regent Enteries</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Enteries.html" ><b>o</b> All Case Enteries</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-Balance.html" ><b>o</b> Expenses</a>
				  </section>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-light showhide1"><i class="fa fa-chart-bar"></i> Reports</a>
				  <section class="main1 showhidebox" >
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Reporrts.html" ><b>o</b> Regent Reports</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Reports.html" ><b>o</b> All Reports</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-balance-list.html" ><b>o</b> Expense Reports</a>
					
				  </section>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light showhide1" ><i class="fa fa-paste"></i> Ledger</a>
					<section class="main1 showhidebox" >
						<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-ledger.html" ><b>o</b> Agency Ledger</a>
						<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-ledger.html" ><b>o</b> Regent Ledger</a>
						<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Embassy.html" ><b>o</b> Embassy</a> 
						<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="doc.html" ><b>o</b> Open Visa Form</a>
					<a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="export.html" ><b>o</b> Export Excel </a>
					</section>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="help.html"><i class="fas fa-question-circle"></i> Help</a>
				</li>
				
			  </ul>
			  
				  <button class="btn text-primary main bg-light showhide1 ml-auto"  >
				  <i class="fas fa-arrows-alt-v " style="font-size: 15px; line-height: 0;"></i>
				</button>
	
			</div>
		</nav>
	
	
		<!--------------------------------------------------------->
		<br>

	
<section class="container">
	<section class="main m-auto border" style=" padding: 40px;">

		<section class="row">
			<section class="col-md-3 ml-auto ">
					
			</section>
			<section class="col-md-6 ml-auto text-center ">
				<center><img src="assets/visa-form-logo.PNG" class="img-responsive m-auto" width="100px" height="auto" alt=""></center>
				<span><b>THE KINGDOM OF SAUDI ARABIA</b></span><br>
				<span>20-22, Khayaban-e-Hafiz, Phase-V, Defence Authority, Karachi-46, Pakistan</span><br>
				<span>Tel;021-35841154 ??? 56</span>
			</section>
			<section class="col-md-3 ml-auto ">
				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: ?????????? ????????????</span>
					</section>
				</section>

				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: ???????? ???? </span>
					</section>
				</section>

				<section class="row">
					<section class="col-7 p-0">
						<span><input type="text" class="form-control" style="border-radius: 0px; border: 0px; border-bottom: 1px solid gray;"></span>
					</section>
					<section class="col-5 p-0 text-right pt-2 ml-auto">
						<span>: ?????? ????????????</span>
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
				<p><b>????????????</b></p>
				<p><i>Photograph</i></p>	
			</section>
			</section>

			<section class="col-md-4 text-center">
				<section class="photo m-auto">
				
				<h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><b>?????????????? ????????????????</b></h2>
				<h4><u>VISA APPLICATION</u></h4>

				</section>
			</section>

			<section class="col-md-4">
				<input placeholder="Enter E No." type="text" class="form-control" style="color:black ;border-radius: 0px; border: 0px; border-bottom: 2px solid black; font-size: 25px; font-weight: bold;">
				<section class="photo "
				style="border:1px solid black ; margin-top: 10px;" >
					<section class="row" >
						<section class="col-12">
							<center><span>?????????????????? ????????????</span></center>
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
							<center><span>?????? ????????????????</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>1441-5-6</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span> ?????????? ????????????????</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span> ??????????/?????????????? ??????</span></center>
						
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span>????????????</span></center>
							
						</section>
					</section>

					<section class="row" >
						<section class="col-6 ">
							<center><span><b>xxx</b></span></center>
							<hr>
						</section>
						<section class="col-6">
							<center><span>?????? ????????????????</span></center>

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
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>?????????? ????????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Father's Name: </span>
			</section>
			<section class="col-md-4 col-8 border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>?????? ????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Husband's Name: </span>
			</section>
			<section class="col-md-4 col-8 border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>?????? ??????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Place & Date of Birth: </span>
			</section>
			<section class="col-md-3 col-8 border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-4 col-8 text-right border-bottom">
				<span><b>xxxxxxxxx</b></span>
			</section>
			<section class="col-md-2 col-4  text-right">
				<span>?????? ???????????? ??????????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Religion: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>Islam</b></span> <span class="float-right">??????????</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Occupation:</span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b>???????? ???????? ????????????????</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>????????????</span>
			</section>
		</section>



		<section class="row">
			<section class="col-md-2 col-4">
				<span>Material Status: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>Vela</b></span> <span class="float-right">???????????? ??????????????</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Sex: </span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b>MALE</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>??????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-2 col-4">
				<span>Nationality: </span>
			</section>
			<section class="col-md-2 col-8 border-bottom">
				<span><b>PAKISTANI</b></span> <span class="float-right">??????????????</span>
			</section>
			<section class="col-md-3 col-4 border-bottom">
				<span>Passport No: </span>
			</section>
			<section class="col-md-3 col-4 border-bottom text-right">
				<span><b>HD87687689</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span>?????? ????????????</span>
			</section>
		</section>


		

		<section class="row">
			<section class="col-md-3 col-6">
				<span>Date & Place of Issue: </span>
			</section>
			<section class="col-md-3 col-6 border-bottom">
				<span><b>Date</b></span>
			</section>
			
			<section class="col-md-4 col-6 border-bottom ">
				<span><b>PAKISTAN</b></span>
			</section>
			<section class="col-md-2 col-6 text-right ">
				<span>??????  ?? ?????????? ??????????????</span>
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
				<span>?????????? ???????????? ????????????????</span>
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
				<span>?????????????? ????????????</span>
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
				<span>???????????? ???? ??????????</span>
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
				<span>?????????? ????????????</span>
			</section>
		</section>


		<section class="row">
			<section class="col-md-3 col-4">
				<span>Sponsor's Name: : </span>
			</section>
			<section class="col-md-7 col-4 border-bottom">
				<span><b>???????? ???????? ???????? ?????????? ?????? ??????????????</b></span>
			</section>
			<section class="col-md-2 col-4 text-right ">
				<span> ?????? ????????????</span>
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
				<span>?????????? ????????????</span>
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
				<span>?????????? ???????? ????????????????</span>
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

