<?php
include('header.php');
include('connect.php');

if(isset($_GET['delete_id']))
{
	$id = $_GET['delete_id'];
	$query= mysqli_query($con, "delete from expenses where id = '$id'");

	if($query)
	{
		echo "<script>window.location.href='Opening-balance-list.php';</script>";
	}
}

?>
		
<div class="container-fluid">
	<section class="container-fluid">
    <h5>Embassy</h5>
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
			<span >Sponsor Name</span>
			<input type="text" class="form-control input-box" placeholder="Sponsor Name" />
		</section>

		<section class="col-md-2">
			
			<input type="button" class="btn-primary btn " style="position: relative; top: 15px; height: 35px; font-size: 14px;" value="Search" />
	
		</section>
	</section>
</section>

	<br>

	<section class="container-fluid">
		<input type="button" class="btn-primary btn float-right " value="Print Report" />
	</section>
	<br><br>

            <table class="table m-auto"> 
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col">Date</th>
                      <th scope="col">Description</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Balances</th>
                      <th scope="col" ><span class="text-primary">_</span>Action<span class="text-primary"></span></th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	$count=1;
                  	$query = mysqli_query($con, "
SELECT * FROM expenses
INNER JOIN opening_balances
ON 
expenses.opening_balance_id = opening_balances.id 
                  		");
                  	while ($row=mysqli_fetch_array($query)) {
                  		?>
                  		<tr>
							<th scope="row"><?php echo $count ?></th>
							<td><?php echo $row['expenses_date'] ?></td>
							<td><?php echo $row['amount'] ?></td>
							<td><?php echo $row['description'] ?></td>
							<td><?php echo $row['opening_balance_amount'] ?></td>
							<td>
								<a href="Opening-balance-list.php?delete_id=<?php echo $row[0] ?>" class="bg-danger btn" style="font-size: 12px !important; color: white; padding: 3px; margin: 1px;  padding-left: 20px !important; padding-right: 20px !important;">Delete</a>
							 </td>
					  	</tr>
                  		<?php
                  		$count++;
                  	}
                  	?>
				   
                    
                  </tbody>
            </table>

</section>
</div>





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

