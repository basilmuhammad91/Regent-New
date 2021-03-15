<?php

include('connect.php');
include('header.php');

$role = $_SESSION['role'];

if($role !== 'Admin')
{
	echo "<script>window.location.href='index.php';</script>";
}

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($con, "select * from users where user_id = '$id'");
	$std = mysqli_fetch_array($query);
}

if(isset($_POST['submit']))				
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$city = $_POST['city'];
	$cnic = $_POST['cnic'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$role = $_POST['role'];


	if(!isset($_FILES['image']) || $_FILES['image']['error']== UPLOAD_ERR_NO_FILE)
	{
		$query = mysqli_query($con, "
		UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`city`='$city',`cnic`='$cnic',`phone`='$phone',`address`='$address', `role`='$role' WHERE `user_id`='$id' ");

	}
	else
	{
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$query = mysqli_query($con, "
		UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`city`='$city',`cnic`='$cnic',`phone`='$phone',`address`='$address',`image`='$image',`role`='$role' WHERE `user_id`='$id' ");
	}

	if($query>0)
	{
		echo "<script>alert('Record updated')</script>";
	}
	else
	{
		echo "<script>alert('Record not updated !')</script>";
	}

}

?>
		
<section class="container-fluid">
  
	<section class="container-fluid">
		<form action="#" method="post" enctype="multipart/form-data">
			<section class="row">
					<section class="col-xl-5 m-auto " style="text-align: left;">
					<h5>Edit Profile</h5>
					<br>		

					<input type="hidden" name="id" value="<?php echo $std[0]?>">
					<input name="name" value="<?php echo @$std['name']?>" type="text" class="form-control input-box" placeholder="Name" />

					<input name="cnic" value="<?php echo @$std['cnic']?>" type="text" class="form-control input-box" placeholder="CNIC" />

					<input name="email" value="<?php echo @$std['email']?>" type="text" class="form-control input-box" placeholder="Email" />
				
					<input name="phone" value="<?php echo @$std['phone']?>" type="text" class="form-control input-box" placeholder="Phone" />

					<input name="city" value="<?php echo @$std['city']?>" type="text" class="form-control input-box" placeholder="City" />

					<input name="address" value="<?php echo @$std['address']?>" type="text" class="form-control input-box" placeholder="Address" />

					<input name="password" value="<?php echo @$std['password']?>" type="password" class="form-control input-box" placeholder="Password" />

					<select name="role" class="form-control input-box" id="exampleFormControlSelect1">
						<option <?php if(@$std['role'] == "Employee") { echo "selected"; }?>>Employee</option>
						<option <?php if(@$std['role'] == "Field Employee") { echo "selected"; }?>>Field Employee</option>
						<option <?php if(@$std['role'] == "Agency") { echo "selected"; }?>>Agency</option>
						<option <?php if(@$std['role'] == "Client") { echo "selected"; }?>>Client</option>
					</select>

					  <section class=""><br>
					  	<input id="uploadImage" onchange="PreviewImage()" name="image" type="file" /><br><br>
					  	 <?php
	                        if(isset($_GET['id']))
	                        {
                            ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($std['image'])?>" width="70" height="70" id="uploadPreview">
	                        <?php
	                        }
	                        ?>
					  </section>

					  <section class=" text-right">
					 
					  <input name="submit" type="submit" class="btn-primary btn m-2 " value="Update">
					 
					  </section>
			</section>
		</form>
		</section>
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
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>