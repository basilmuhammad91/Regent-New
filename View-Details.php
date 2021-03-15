<?php
@session_start();

$role = @$_SESSION['role'];

if($role !== "Admin")
{
    header("location: index.php");
}

include('header.php');
include('connect.php');

if(isset($_GET['user_id']))
{
	$user_id = $_GET['user_id'];
}

?>
<title>View Dashboard</title>		

<section class="container-fluid">

  <section class="container-fluid">
    

    <section class="container border p-5">

    <h3>View Details</h3>
  <br><br>
<?php
$query = mysqli_query($con, "select * from users where user_id = '$user_id'");
$std = mysqli_fetch_array($query);
?>
      <section class="row">
        <section class="col-sm-4">
          <p>Name</p>
          <h5><?php echo $std['name'] ?></h5>
          <hr>
        </section>


        <section class="col-sm-4">
          <p>CNIC</p>
          <h5><?php echo $std['cnic'] ?></h5>
          <hr>
        </section>


        <section class="col-sm-4">
          <p>Email</p>
          <h5><?php echo $std['email'] ?></h5>
          <hr>
        </section>


        <section class="col-sm-4">
          <p>Phone</p>
          <h5><?php echo $std['phone'] ?></h5>
          <hr>
        </section>

        <section class="col-sm-4">
          <p>City</p>
          <h5><?php echo $std['city'] ?></h5>
          <hr>
        </section>


        <section class="col-sm-4">
          <p>Address</p>
          <h5><?php echo $std['address'] ?></h5>
          <hr>
        </section>

        <section class="col-sm-4">
          <p>Password</p>
          <h5>**************</h5>
          <hr>
        </section>

        <section class="col-sm-4">
          <p>Role</p>
          <h5><?php echo $std['role'] ?></h5>
          <hr>
        </section>

        <section class="col-sm-4">
          <p>Attachment</p>
          <input type="button" class="btn-primary" value="Download Attachment">
          <hr>
        </section>

      </section>
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

