<?php
include('connect.php');
include('header.php');
?>

<?php
if($_SESSION['role'] !== 'Admin' && $_SESSION['role'] !== 'Employee')
{
	echo "<script>window.location.href='index.php';</script>";
}
?>

<?php
if(isset($_POST['search']))
{
	$search_eno = $_POST['search_eno'];

	$query = mysqli_query($con, "
		SELECT regent_id, passenger_eno, type FROM regents WHERE `passenger_eno` = '$search_eno'
		UNION 
		SELECT case_id, passenger_eno, type FROM cases WHERE passenger_eno = '$search_eno'
		");
}

?>
		
<section class="container-fluid">
    <h5>Regent and Cases Search</h5>
    <br>

	<section class="container-fluid">
        <form action="#" method="post">
            <section class="row">

				<section class="col-xl-3">
                    <input type="text" name="search_eno"  class="form-control input-box" placeholder="Search By E No." required />
                </section>

				<section class="col-xl-3 pt-1">
                   <button type="submit" name="search" class="btn btn-primary">Search</button>
                </section>

			</section>     
        </form>
    </section>

</section>

<hr>


<section class="container">
	<table class="table m-auto ">
              
		<thead>
			<tr>
			  <th scope="col">S_No.</th>
			  <th scope="col">E No.</th>
			  <th scope="col" >Protector Form</th>
			  <th scope="col" >Permission Form</th>
			  <th scope="col" >Visa_Form</th>
			</tr>
		  </thead>
		  <tbody>
		   
			<?php
			$count = 1;
			if(@$query)
			{
				while ($row=mysqli_fetch_array($query)) {
				?>
				<tr>
					 <th scope="row"><?php echo $count ?></th>
					 <td><?php echo $row['passenger_eno'] ?></td>
					 <td>
							<?php
							if($row['type'] == 'regents')
							{
								?>
								<center>
									<a class="btn bg-primary text-light" href="Protector.php?id=<?php echo $row[0] ?>&type=<?php echo $row['type'] ?>"><i class="fas fa-print" style="font-size: 10px; transform: scale(1.5);"></i></a>
								</center>
								<?php
							}
							?>
						</td>
						<td>
							
							<?php
							if($row['type'] == 'regents')
							{
								?>
								<center>
									<a href="permission.php?id=<?php echo $row[0] ?>&type=<?php echo $row['type'] ?>" class="btn bg-success text-light" ><i class="fas fa-print" style="font-size: 10px; transform: scale(1.5);"></i></a>
								</center>
								<?php
							}
							?>
						</td>
						<td>
							<center>
								<a href="Visa-Form.php" class="btn bg-warning text-light" ><i class="fas fa-print" style="font-size: 10px; transform: scale(1.5);"></i></a>
							</center>
						 </td>
			    </tr>
				<?php
				$count++;
				}
				
			}
			?>
			
	
			
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

