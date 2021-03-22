<?php
include_once('header.php');
include_once('connect.php');

//DELETE WORK
if(isset($_GET['delete_id']))
{
	$delete_id = $_GET['delete_id'];
	$query = mysqli_query($con, "delete from cases where case_id = '$delete_id'");

	if($query)
	{
		echo "<script>window.location.href='All-Case-Reports.php';</script>";
	}

}

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
			<span >Passport No.</span>
			<input id="search_passport_no" type="text" class="form-control input-box" placeholder="Passport No" />
		</section>
		<section class="col-md-2">
			<span >Sponsor Name</span>
			<input id="search_sponsor_name" type="text" class="form-control input-box" placeholder="Sponsor Name" />
		</section>

	</section>
	<br>
	        
<section class="container-fluid">
		<input id="print_table" type="button" class="btn-primary btn" value="Print Report" />
	</section>
	<br><br>

		<div id="print_div">
            <table class="table table-responsive m-auto " style="padding-bottom: 80px;">
              
                <thead>
                    <tr>
					  <th scope="col">Serial No</th>
                      <th scope="col">Name</th>
					  <th scope="col">Father_Name</th>
                      <th scope="col">Agency Name</th>
                      <th scope="col">Visa No</th>
                      <th scope="col">ID No</th>
                      <th scope="col">Sponsor Name</th>
					  <th scope="col">Passport_No</th>
					  <th scope="col">Courier Name</th>
					  <th scope="col">Courier No</th>
					  <th scope="col">Visa Status</th>
					  <th scope="col" class="tbl1"><span class="text-primary">_</span>Action<span class="text-primary"></span></th>
                    </tr>
                  </thead>

                  <tbody class="result">
                  <tbody>
                   
        
				<?php
				$user_id =10;
				$query = mysqli_query($con, "
				SELECT cases.*, 
				users.name as username,  
				visa_status.name as visa_status_name
				FROM `cases` 
				INNER JOIN users 
				ON users.user_id = cases.agency_id
				INNER JOIN visa_status
				ON visa_status.visa_status_id = cases.visa_status_id
					");
				$count = 1;
				while ($row=mysqli_fetch_array($query)) {
					?>
					<tr class="showAll">
					<th scope="row"><?php echo $count?></th>
					<td><?php echo $row['passenger_name'] ?></td>
					<td><?php echo $row['passenger_father_name'] ?></td>
					<td><?php echo $row['username'] ?></td>
					<td><?php echo $row['visa_no'] ?></td>
					<td><?php echo $row['visa_id_no'] ?></td>
					<td><?php echo $row['visa_sponsor_name'] ?></td>
					<td><?php echo $row['passenger_passport_no'] ?></td>
					<td><?php echo $row['visa_courier_name'] ?></td>
					<td><?php echo $row['visa_courier_no'] ?></td>
					<td><?php echo $row['visa_status_name'] ?></td>
				    <td class="tbl2">
						<div class="dropdown show">
							<a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Action
							</a>
							<div class="dropdown-menu  wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="All-Case-Enteries.php?edit_id=<?php echo $row[0] ?>">Edit</a>
								<a class="dropdown-item" href="All-Case-Reports.php?delete_id=<?php echo $row[0] ?>">Delete</a>
								<a class="dropdown-item" href="All-Case-View.php?id=<?php echo $row[0] ?>">View</a>
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
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#search_passport_no').on('keyup', function(){
			var search_passport_no = $('#search_passport_no').val();
			var search_sponsor_name = $('#search_sponsor_name').val();
			
			if(search_passport_no != '' && search_sponsor_name != '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search": search_passport_no, "search2": search_sponsor_name},
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

			else if(search_passport_no != '' && search_sponsor_name == '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search": search_passport_no},
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

			else if(search_sponsor_name != '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search2": search_sponsor_name},
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

		$('#search_sponsor_name').on('keyup', function(){
			var search_passport_no = $('#search_passport_no').val();
			var search_sponsor_name = $('#search_sponsor_name').val();
			
			if(search_passport_no != '' && search_sponsor_name != '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search": search_passport_no, "search2": search_sponsor_name},
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

			else if(search_passport_no != '' && search_sponsor_name == '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search": search_passport_no},
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

			else if(search_sponsor_name != '' && search_passport_no == '')
			{
				$.ajax({
					url: 'fetchcasesresports.php',
					method: 'post',
					data: {"search2": search_sponsor_name},
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
	})
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