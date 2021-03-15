<?php

include('connect.php');
include('header.php');



?>
		
<section class="container-fluid">
    <h5>Agency</h5>
    <br>

	<section class="row" style="align-items: center;">
		<section class="col-md-2">
			<span >From</span>
			<input type="date" class="form-control input-box" placeholder="Name" />
		</section>
		<section class="col-md-2">
			<span >To</span>
			<input type="date" class="form-control input-box" placeholder="Name" />
		</section>
		<section class="col-md-2">
			<span >File No</span>
			<input type="text" class="form-control input-box" placeholder="File No." />
		</section>
		<section class="col-md-2">
			<span >Passport No.</span>
			<input type="text" class="form-control input-box" placeholder="Passport No" />
		</section>
		<section class="col-md-2">
			<span >Visa</span>
			<input type="text" class="form-control input-box" placeholder="Visa No." />
		</section>

		<section class="col-md-2">
			
			<input type="button" class="btn-primary btn " style="position: relative; top: 15px; height: 35px; font-size: 14px;" value="Search" />
		</section>

	</section>



<hr>



<section class="row" style="align-items: center;">
	

	<section class="col-xl-3">
		<select class="form-control input-box" id="exampleFormControlSelect1">
			<option>Search Type</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
			<option>xxxxxxx</option>
		  </select>
	</section>



	<section class="col-md-2">
		<input type="text" class="form-control input-box" placeholder="Sponsor Name" />
	</section>

	<section class="col-md-2">
			
		<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Search" />

	</section>

</section>

	<br>
	<section class="container-fluid">
		<input type="button" class="btn-primary btn float-right " value="Print Report" />
	</section>
	<br><br>

            <table class="table table-responsive m-auto " style="padding-bottom: 80px;">
                <thead>
                    <tr>
                      	<th scope="col">S. No</th>
						<th scope="col">Name</th>
						<th scope="col">Father Name</th>
						<th scope="col">E. No</th>
						<th scope="col">Passport No</th>
						<th scope="col">Visa No</th>
						<th scope="col">Sponsor Name</th>

                      <th scope="col" ><span class="text-primary">_</span>Action<span class="text-primary">____________________________</span></th>
                    </tr>
                </thead>
                <tbody>
                	<?php

            		$query = mysqli_query($con, "select * from regents");
        			$count = 1;

                	while ($row = mysqli_fetch_array($query)) {
                		?>
							<tr>
								<th scope="row"><?php echo $count ?></th>
								<td><?php echo $row['passenger_name'] ?></td>
								<td><?php echo $row['passenger_father_name'] ?></td>
								<td><?php echo $row['passenger_eno'] ?></td>
								<td><?php echo $row['passenger_passport_no'] ?></td>
								<td><?php echo $row['visa_no'] ?></td>
								<td><?php echo $row['visa_sponsor_name'] ?></td>
						   		<td>
									<div class="dropdown show">
										<a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>
										<div class="dropdown-menu wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="">Edit</a>
											<a class="dropdown-item" href="#">Delete</a>
											<a class="dropdown-item" href="#">View</a>
										</div>
									</div>


				        			</td>
							</tr>
                		<?php
                		$count++;
                	}

                	?>
    				
        		</tbody>
            </table>
</section>





<hr>

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

