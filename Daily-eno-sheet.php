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
</style>





 


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
		<!-- <section class="col-md-2">
			<span >File No</span>
			<input id="search_file_no" name="search_file_no" type="text" class="form-control input-box" placeholder="File No." />
		</section>
		<section class="col-md-2">
			<span >Passport No.</span>
			<input id="search_passport_no" name="search_passport_no" type="text" class="form-control input-box" placeholder="Passport No" />
		</section>
		<section class="col-md-2">
			<span >Visa</span>
			<input id="search_visa_no" name="search_visa_no" type="text" class="form-control input-box" placeholder="Visa No." />
		</section>

        <section class="col-md-2">
        <span >Sponsor Name</span>
            <input type="text" id="txtType" class="form-control input-box" placeholder="Sponsor Name" />
        </section> -->
        <section class="col-2">
        	<span></span>
    		<input type="Submit" name="search" value="Search" class="btn btn-primary mt-4">
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

<form action="">
<section class="row">
    <section class="col-md-3">
       
        <span >Name</span>
                <input id="date_from" name="date_from" type="text" class="form-control input-box" />

    </section>
    <section class="col-md-3">
            <span >Designation</span>
                        <input id="date_from" name="date_from" type="text" class="form-control input-box" />
    </section>
</section>
</form>


<table class="table table-bordered-0 m-0">
			
			<thead>
			  <tr>
				<th scope="col" style="border: white !important; color: white !important;"> Sr  #</th>
				<th scope="col" style="border: white !important; color: white !important;">Name #</th>
				<th scope="col" style="border: white !important; color: white !important;">Agency #</th>
				<th scope="col" style="border: white !important; color: white !important;">E No #</th>
				<th scope="col" style="border: white !important; color: white !important;">PP No #</th>
				<th scope="col" style="border: white !important; color: white !important;">1ST</th>
				<th scope="col" style="border: white !important; color: white !important;">2ND</th>
				<th scope="col" style="border: white !important; color: white !important;">TOTAL</th>
			  </tr>
			</thead>
			<tbody>

				<tr>
					<th colspan="7" class="text-right" style="border: white !important; color: white;">..</th>
					<th class="text-center"><i><input placeholder="Date" type="text"></i></th>
					
				  </tr>
			  <tr>
				<th colspan="7" class="text-right"><i>BALANCE AMOUNT</i></th>
				<th class="text-center"><i><input type="text"></i></th>
				
			  </tr>
			  <tr>
				<th colspan="7" class="text-right"><i>PAYMENT RECEIVED</i></th>
				<th class="text-center"><i><input type="text"></i></th>
				
			  </tr>
			  <tr>
				<th colspan="7" class="text-right"><i>TOTAL PAYMENT</i></th>
				<th class="text-center"><i><input type="text"></i></th>
				
			  </tr>
			  
			</tbody>
</table>
            
        

<table class="table table-bordered">
			
			<thead>
			  <tr>
				<th scope="col">Sr #</th>
				<th scope="col">Name #</th>
				<th scope="col">Agency #</th>
				<th scope="col">E No #</th>
				<th scope="col">PP No #</th>
				<th scope="col">1ST</th>
				<th scope="col">2ND</th>
				<th scope="col">TOTAL</th>
			  </tr>
			</thead>
			<tbody>

				<?php
				$query=mysqli_query($con,"
SELECT *, passenger_details.passenger_name AS passenger_name, passenger_details.passenger_eno AS passenger_eno, passenger_details.passenger_passport_no AS passenger_passport_no
FROM agreement_details
INNER JOIN passenger_details
ON
agreement_details.passenger_id = passenger_details.passenger_id
INNER JOIN regents
ON 
regents.regent_id = passenger_details.regent_id
					");
				$count=1;
				while ($row=mysqli_fetch_array($query)) {
					?>
					<tr>
						<th scope="row"><?php echo $count ?></th>
						<td><?php echo $row['passenger_name']?></td>
						<td>Otto</td>
						<td><?php echo $row['passenger_eno'] ?></td>
						<td><?php echo $row['passenger_passport_no'] ?></td>
						<td><input type="text" id="first"></td>
						<td><input type="text" id="second"></td>
						<td class="text-center"><i><b><input type="text"></b></i></td>
					  </tr>
					<?php
				}
				?>
			  

			 
			  <tr>
				<th  colspan="2"><i>Total Use Amount</i></th>
				<td  colspan="3"></td>
				<th><i><input type="text"></i></th>
				<th><i><input type="text"></i></th>
				<th class="text-center"><i><b><input type="text"></b></i></th>
			  </tr>
			  
			</tbody>
</table>






<section class="row">
   

    <section class="col-3 ml-auto">
				<table class="table table-bordered-0 m-0">
			
					<tbody>
					  <tr>
						<th scope="col" style="border-color: transparent !important; z-index: 1 !important;" > <i>TOTAL $ </i></th>
						<th scope="col bl" style="z-index: 2 !important;"><i><input type="text" name="" id=""></i></th>
						
					  </tr>
					  <tr>
						<th scope="col" style="border-color: white !important;"> <i>USE $ </i></th>
						<th scope="col"><i><input type="text" name="" id=""></i></th>
						
					  </tr>
					  <tr>
						<th scope="col" style="border-color: white !important;"> <i>BALANCE $ </i></th>
						<th scope="col"><i><input type="text" name="" id=""></i></th>
						
					  </tr>
					</tbody>
				
				  </table>
		
			  </section>

</section>

   

</section>

<br>


<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
              <a href="page16.php">
              <input type="button" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print" />
              </a>			

        </section>
    </section>
</section>

<br><br>





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

