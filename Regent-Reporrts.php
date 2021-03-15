<?php

include('connect.php');

session_start();
$role = @$_SESSION['role'];

if($role !== "Admin" && $role !== "Employee")
{
    header("location: index.php");
}

include('header.php');
// ==========DELETE WORK FOR REGENTS===========
if(isset($_GET['delete_id']))
{
	$id = $_GET['delete_id'];

	
	//AUTHENTICATION
	$check_query = mysqli_query($con, "select * from regents where regent_id = '$id'");
	$std = mysqli_fetch_array($check_query);

    if(@$std['user_id'] !== $_SESSION['user_id'])
    {
        header('location: index.php');
    }
    
	$query = mysqli_query($con, "delete from regents where regent_id = '$id'");
	if($query)
	{
		echo "<script>window.location.href='Regent-Reporrts.php';</script>";
	}

}



?>
<section class="container-fluid">
    <h5>Agency</h5>
    <br>
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
		<section class="col-md-2">
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
	</section>

<hr>

<section class="row" style="align-items: center;">
	<section class="col-xl-3">
		<select class="form-control input-box" id="typeSelect">
			<option value="Search Type">Search Type</option>
			<option value="sdfsd">xxxxxxx</option>
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
		<input type="text" id="txtType" class="form-control input-box" placeholder="Sponsor Name" />
	</section>

	<section class="col-md-2">
			
		<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Search" />

	</section>

</section>

	<br>
	<section class="container-fluid">
		<input id="print_table" type="button" class="btn-primary btn float-right " value="Print Report" />
	</section>
	<br><br>

        <div id="print_div">
        		<table class="table table-responsive m-auto " style="padding-bottom: 80px;">
                <thead>
                    <tr>
                      	<th scope="col">S. No</th>
                      	<th scope="col">Visa No</th>
                      	<th scope="col">File No</th>
                      	<th scope="col">Sponsor Id</th>
                      	<th scope="col">Sponsor Name</th>
                      	<th scope="col">Sponsor Address</th>
                      	<th scope="col">Visa Date</th>
						<th scope="col">Name</th>
						<th scope="col">Father Name</th>
						<th scope="col">Passport No</th>
						<th scope="col">E. No</th>

                      <th scope="col" class="tbl1"><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                    </tr>
                </thead>

                
                <tbody class="result">
                <tbody>	
                	<?php

            		$query = mysqli_query($con, "select * from regents");
        			$count = 1;

                	while ($row = mysqli_fetch_array($query)) {
                		?>
							<tr class="showAll">
								<th scope="row"><?php echo $count ?></th>
								<td><?php echo $row['visa_no'] ?></td>
								<td><?php echo $row['visa_file_no'] ?></td>
								<td><?php echo $row['visa_sponsor_id'] ?></td>
								<td><?php echo $row['visa_sponsor_name'] ?></td>
								<td><?php echo $row['visa_sponsor_address'] ?></td>
								<td><?php echo $row['visa_date2'] ?></td>
								<td><?php echo $row['passenger_name'] ?></td>
								<td><?php echo $row['passenger_father_name'] ?></td>
								<td><?php echo $row['passenger_passport_no'] ?></td>
								<td><?php echo $row['passenger_eno'] ?></td>

						   		<td class="tbl2">
									<div class="dropdown show">
										<a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>
										<div class="dropdown-menu wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
											<?php
											if($row['user_id'] == $_SESSION['user_id'])
											{
												?>
												<a class="dropdown-item" href="Regent-Enteries.php?edit_id=<?php echo $row[0] ?>">Edit</a>
												<a class="dropdown-item" href="Regent-Reporrts.php?delete_id=<?php echo $row[0] ?>">Delete</a>
											<?php
											}
											else if($role == "Admin")
											{
												?>
												<a class="dropdown-item" href="Regent-Enteries.php?edit_id=<?php echo $row[0] ?>">Edit</a>
												<a class="dropdown-item" href="Regent-Reporrts.php?delete_id=<?php echo $row[0] ?>">Delete</a>
												<?php
											}
											?>
											
											<a class="dropdown-item" href="Regent-Report-View.php?id=<?php echo $row[0] ?>">View</a>
											<a class="btn bg-primary text-light form-control" href="Protector.php?id=<?php echo $row[0] ?>&type=<?php echo $row['type'] ?>"><i class="fas fa-print" style="font-size: 10px; transform: scale(1.5);"></i> Protector Form</a>
											<a href="Visa-Form.php" class="btn bg-warning text-light form-control mt-1" ><i class="fas fa-print" style="font-size: 10px; transform: scale(1.5);"></i>Visa Form</a>
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
            
        </div>

</section>





<hr>

</body>
</html>
<script >
	$('.hijri-date-input').hijriDatePicker();
</script>

<script>
	$(document).ready(function(){
		$('.showhide1').on('click', function(){
			$('.main1').toggle(300);
		});
	});
</script>


<script src="js/jquery-fab-button.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
// ========FILE NO=========
		$('#search_file_no').on('keyup', function(){
			var search_file_no = $('#search_file_no').val();
			var search_passport_no = $('#search_passport_no').val();
			var search_visa_no = $('#search_visa_no').val();

			if(search_file_no != '' && search_passport_no != '' && search_visa_no != '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_file_no != '' && search_passport_no != '' && search_visa_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no != '' && search_passport_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no != '' && search_file_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no == '' && search_file_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_visa_no != '' && search_file_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			

			else
			{
				$('.result').html('');
				$('.showAll').show();
			}
		});
// // =======PASSPORT NUMBER======
		$('#search_passport_no').on('keyup', function(){
			var search_file_no = $('#search_file_no').val();
			var search_passport_no = $('#search_passport_no').val();
			var search_visa_no = $('#search_visa_no').val();

			if(search_file_no != '' && search_passport_no != '' && search_visa_no != '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_file_no != '' && search_passport_no != '' && search_visa_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no != '' && search_passport_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no != '' && search_file_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no == '' && search_file_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_visa_no != '' && search_file_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			

			else
			{
				$('.result').html('');
				$('.showAll').show();
			}
		});

// ======= VISA NUMBER=====
		$('#search_visa_no').on('keyup', function(){
			var search_file_no = $('#search_file_no').val();
			var search_passport_no = $('#search_passport_no').val();
			var search_visa_no = $('#search_visa_no').val();

			if(search_file_no != '' && search_passport_no != '' && search_visa_no != '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_file_no != '' && search_passport_no != '' && search_visa_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no != '' && search_passport_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no != '' && search_file_no == '')
			{
				
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no, "search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else if(search_file_no != '' && search_visa_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search": search_file_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_passport_no != '' && search_visa_no == '' && search_file_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search2": search_passport_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}

			else if(search_visa_no != '' && search_file_no == '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchregentreports.php',
					method: 'post',
					data: {"search3": search_visa_no},
					dataType: "text",
					success: function(data)
					{
						$('.result').html(data);
						$('.showAll').hide();
					},
					error: function(error)
					{
						console.log(error);
					}
				});
			}
			
			else
			{
				$('.result').html('');
				$('.showAll').show();
			}
		});
		
	});

</script>

<!-- =====SCRIPTS FOR PRINT===== -->
<script src="printMe-master/jquery.min.js"></script>
<script src="printMe-master/jquery-printme.js"></script>
<script src="printMe-master/printMe-master/jquery-printme.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="print">
<link rel="stylesheet" type="text/css" href="css/style2.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">	

<script type="text/javascript">
$(document).ready(function(){

	$('#print_table').click(function(){
		$('.tbl1').hide();
		$('.tbl2').hide();
		$("#print_div").printMe({
			"path" : ["css/style.css","css/style2.css","css/bootstrap.min.css","Main StyleSheet.css", "css/animate.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "https://fonts.googleapis.com/css?family=Droid+Sans:400,700", "https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css", "https://use.fontawesome.com/releases/v5.4.1/css/all.css", "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css", "https://fonts.googleapis.com/icon?family=Material+Icons", "css/jquery-fab-button.css"]
		});
		$('.tbl1').show();
		$('.tbl2').show();
	});
});
</script>