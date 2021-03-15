<?php

include('header.php');
include('connect.php');

?>
	
	<section class="container ">
	<center><p style="font-size: 13px;"><b><u>FORM OF REFUND OF SERVICES CHARGES OF Rs.6,000/- FOR PROCEEDED ABROAD FOR EMPLOYMENT</u></b></p></center>



	<table class="table table-responsive" style="padding-bottom:100px;">
		<thead>
		  <tr>
			<th scope="col">S_No.</th>
			<th scope="col">Action</th>
			<th scope="col">NAME_OF_THE_EMIGRANTS</th>
			<th scope="col">FATHER'S_NAME</th>
			<th scope="col">B.C.NO</th>
			<th scope="col">Passport_No.</th>
			<th scope="col">DATE_OF_DEPARTURE</th>
			<th scope="col">F.S.A.NO_KC</th>
			<th scope="col">AIR_LINE_FLIGHT_DETAILS</th>
			<th scope="col">TKT_NO</th>

		  </tr>
		</thead>
		<tbody>
		  <tr>
			<th scope="row">1</th>
			<td>
			<div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa Form</a>
                            </div>
                    </div>
			</td>
			<td>Mark</td>
			<td>Otto</td>
			<td><input type="text"></td>
			<td>Otto</td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
		  </tr>
		
		</tbody>
	  </table>
	</section>


	<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
              <a href="page14.php">
              <input type="button" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print" />
              </a>			

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

