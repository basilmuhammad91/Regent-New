<?php

@session_start();

if(isset($_POST['logout']))
{
  unset($_SESSION['user_id']);
  unset($_SESSION['name']);
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  unset($_SESSION['role']);

  header('location: index.php');
}

?>

<!doctype html>
<html>
<head>

	<link rel="icon" href="" type="image/icon type">
	
<link rel="stylesheet" type="text/css" href="css/style.css">
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
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
	
<title></title>
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
        font-size: 12px !important;
        border: 1px solid rgb(190, 190, 190);
        padding: 5px !important;
        width: auto !important;
    }

    tr{
        width: auto !important;
        padding: 5px !important;
        font-size: 12px !important;

    }
    thead{
        background-color: #006BFF;
        color: white;
    }
    td{
        border: 1px solid gray;
        width: auto !important;
        padding: 5px !important;
        font-size: 12px !important;
    }

</style>



</head>

<body>


		<!----------------------Navigation------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="align-items: center">
			
			
      <section class="mr-auto text-center">
        <i class="fas fa-user-circle" style="font-size: 30px; color: white;"></i>
        <a class="nav-link text-light list-link" href="#" ><?php echo @$_SESSION['role'] ?></a>
        <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Profile</a>
          <form action="header.php" method="post">
            <input type="submit" name="logout" value="Logout" class="nav-link text-light list-link wow fadeInDown animated delay-1s">
          </form>
        </section>
      </section>	
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">


<!-- DROP DOWN -->
        <li class="nav-item" style="cursor:pointer">
          <a class="nav-link text-light showhide1"><i class="fas fa-arrow-down"></i> Dropdowns</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Add-Dropdown.php" ><b>o</b> Add Dropdown</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Add-Dropdown-List.php" ><b>o</b> List Dropdown</a>
          </section>
          
        </li>

        <?php
        if($_SESSION['role'] == 'Admin')
        {
          ?>
          <li class="nav-item " style="cursor:pointer">
            <a class="nav-link text-light showhide1"><i class="fas fa-user"></i> User</a>
            <section class="main1 showhidebox" >
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Employee-list.php" ><b>o</b> Employee</a>
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Field-employee-list.php" ><b>o</b> Field Employee</a>
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Agency-list.php" ><b>o</b> Agancy</a>
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Client.php" ><b>o</b> Client</a>
            </section>
          </li>
          <?php
        }
        ?>

        <li class="nav-item" style="cursor:pointer">
          <a class="nav-link text-light showhide1"><i class="fas fa-list"></i> Regent Entries</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Regent-Entry-Visa-Detail.php" ><b>o</b> Visa Detail</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Regent-Entry-Passenger-Detail.php" ><b>o</b> Passenger Detail</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Regent-Entry-Agreement-Nominee-Detail.php" ><b>o</b> Permission Nominee Detail</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Expanse.php" ><b>o</b> Expenses</a>
          </section>
        </li>

        <li class="nav-item" style="cursor:pointer">
          <a class="nav-link text-light showhide1"><i class="fas fa-list"></i> Agency Entries</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Agency-Entries-Visa-Details.php" ><b>o</b> Visa Details</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Visa-Form.php" ><b>o</b> Visa Form</a>
          </section>
        </li>

        <li class="nav-item" style="cursor:pointer">
          <a class="nav-link text-light showhide1"><i class="fa fa-chart-bar"></i> Forms</a>
          <section class="main1 showhidebox">
          
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Embassy-list.php" ><b>o</b> Embassy List</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Daily-Embassy-Report.php" ><b>o</b> Daily Embassy Report</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Daily-eno-sheet.php" ><b>o</b> Daily Entry Sheet</a>
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Refund-charges.php" ><b>o</b> Refund Charges</a>
          
          </section>
        </li>
        <li class="nav-item" style="cursor:pointer">
          <a class="nav-link text-light showhide1" ><i class="fa fa-paste"></i> Ledger & Reports</a>
          <section class="main1 showhidebox" >
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Final-case.php" ><b>o</b> Final Case</a>
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Agency-ledger.html" ><b>o</b> Agency Ledger</a>
            <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Regent-ledger.html" ><b>o</b> Regent Ledger</a>
            
          <a class="nav-link text-light list-link wow fadeInDown animated faster delay-1s" href="Regent-Reporrts.php" ><b>o</b> All Case Report</a> 
          </section>
        </li>
        <li class="nav-item" style="cursor:pointer">
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