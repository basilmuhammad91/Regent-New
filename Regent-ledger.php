<?php

include('header.php');
include('connect.php');

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
	.mainbox{
		width: 1000px;
	}
</style>
	
	<section class="mainbox m-auto border p-5">
		<center>
		<h2>Regent Overseas</h2>
		</center>
		<br>

		<section class="row">
			<section class="col-6">
				<p><b>Date:</b><span>______________</span></p>
			</section>
			<section class="col-6 text-right">
			<p><b>Serial No:</b><span>______________</span></p>
			</section>
		</section>

		<section>
			<p>Office No F.40</p>
			<p>Glass Tower 1st Floor Near Teen Tallwar, <br>Clifton Karachi.</p>
			<p>License No: xxxxxxxxxxx</p>
			<p>Email: xxxxxxxxxxxxxxxx</p>
			<p>Website: xxxxxxxxxxxxxxxxx</p>
		</section>
	


<br>
	<table class="table ml-auto p-5">
		
		<tbody>
		<thead>
		<tr>
			
			<th>S.No</th>
			<th>Date</th>
			<th>Description</th>
			<th>Debit</th>
			<th> Credit</th>
			<th>Balance</th>
		
		  </tr>
		</thead>
		  <tr>
			  <td>1</td>
			  <td>xxxxx</td>
			  <td>xxxxx</td>
			  <td>xxxxx</td>
			  <td>xxxxx</td>
			  <td>xxxxx</td>
			
		  </tr>


		  <tr class="border-0" style="border-top: double black !important; border-bottom: double black !important;">
			
		 		<td class="border-0"></td>
			 	<td class="border-0"></td>
			  	<td class="border-0"><b>Total</b></td>
			 	<td class="border-0"><b>5455</b></td>
				<td class="border-0"><b>4545</b></td>
			 	<td class="border-0"><b>44543</b></td>
			
		  </tr>

		 
		
		</tbody>
	  </table>


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

