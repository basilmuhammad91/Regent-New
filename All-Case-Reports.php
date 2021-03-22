<?php

include('header.php');
include('connect.php');

?>
	
<br>

<section class="container-fluid">
<h1>All Case Report</h1>
<section class="row">
			<section class="col-xl-2">
						<input type="date" class="form-control input-box" placeholder="File No." maxlength="5">
			</section>
			<section class="col-xl-2">
						<input type="date" class="form-control input-box" placeholder="Passport No." maxlength="5">
			</section>
			<section class="col-xl-2">
						<input type="text" class="form-control input-box" placeholder="E.No" maxlength="5">
			</section>
			<section class="col-xl-2">
						<select name="" id="" class="form-control input-box">
							<option value="">Select type</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
							<option value="">xxxxxxxxx</option>
						</select>
			</section>

		</section>
</section>
<br>
<section class="container">
<table class="table m-auto ">
              
			  <thead>
				  <tr>
					<th scope="col">S_No.</th>
					<th scope="col">File_No</th>
					<th scope="col">Passport.No</th>
					<th scope="col">E.No</th>
					<th scope="col">Agency Price</th>
					<th scope="col">Regent Price</th>
					<th scope="col">Attachment</th>
					<th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
				  </tr>
				</thead>
				<tbody>
				 
				
						<tr>
						   <th scope="row">1</th>
						   <td>xxxxx</td>
						   <td>xxxxx</td>
						   <td>xxxxx</td>
						   <td>xxxxx</td>
						   <td>xxxxx</td>
						   <td>xxxxx</td>
							<!-- <td>
							  <img src="data:image/jpeg;base64," width="100" height="100" class="img-fluid">
							</td> -->
							<td >
							  <div class="dropdown show">
									<a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Action
									</a>
									<div class="dropdown-menu wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
									  <a class="dropdown-item text-danger" href="#">Delete</a>
									</div>
								  </div>
							</td>
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

