<?php
include('connect.php');
include('header.php');

if(isset($_POST['submit']))
{
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];

	$query=mysqli_query($con, "insert into hello (val1, val2) values('$val1','$val2')") or die(mysqli_error($con));

	if($query>0)
	{
		echo "<script>alert('Submitted')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container col-md-6">
	<form action="#" method="post">
		<input type="text" name="val1" id="eno" class='form-control'><br>
		<div class="showAll">
			
		</div>
		
	</form>
</div>

<div class="container col-md-6">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Value 1</th>
				<th>Value 2</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query1 = mysqli_query($con, "select * from hello") or die(mysqli_error($con));
			while ($row=mysqli_fetch_array($query1)) {
				?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['val1'] ?></td>
					<td><?php echo $row['val2'] ?></td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#eno').on('keyup', function(){
			var search_eno = $('#eno').val();

			$.ajax({
				url: 'hello_ajax.php',
				method: 'post',
				data: {"search": search_eno},
				dataType: "text",
				success: function(data)
				{
					$('.showAll').html(data);
				},
				error: function(error)
				{
					console.log(error);
				}
			});

		});
	});
</script>