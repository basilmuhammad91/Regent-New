<?php
include('connect.php');
include('header.php');

if(!isset($_SESSION['role']) && !isset($_SESSION['user_id']))
  {
    echo "<script>window.location.href='index.php';</script>";
  }
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];
if($role == 'Admin')
{
?>	
<section class="container-fluid">
    <h5>Agency</h5>
    <br>

            <table class="table m-auto ">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">CNIC</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">City</th>
                      <th scope="col">Address</th>
                      <th scope="col">Password</th>
                      <th scope="col">Role</th>
                      <!-- <th>Image</th> -->
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                    </tr>
                  </thead>
                  <tbody>
                   
                   <?php
                   $query = mysqli_query($con, "select * from users where role = 'Agency'");
                   while($row=mysqli_fetch_array($query))
                   {
                      ?>
                          <tr>
                             <th scope="row"><?php echo $row['user_id'] ?></th>
                             <td><?php echo $row['name'] ?></td>
                             <td><?php echo $row['cnic'] ?></td>
                             <td><?php echo $row['email'] ?></td>
                             <td><?php echo $row['phone'] ?></td>
                             <td><?php echo $row['city'] ?></td>
                             <td><?php echo $row['address'] ?></td>
                             <td><?php echo $row['password'] ?></td>
                             <td><?php echo $row['role'] ?></td>
         					<!-- <td>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" width="100" height="100" class="img-fluid">
                              </td> -->
                              <td >
                                 <div class="dropdown show">
										<a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>
										<div class="dropdown-menu wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Active</a>
                     <a class="dropdown-item" href="#">Non Active</a>
											<a class="dropdown-item" href="profile-edit.php?id=<?php echo $row['user_id'] ?>">Edit</a>
											<a class="dropdown-item" href="#">Delete</a>
											<a class="dropdown-item" href="View-Details.php?user_id=<?php echo $row[0] ?>">View</a>
										</div>
									</div>

                              </td>
                             </tr>
                      <?php
                   }
                   ?>
        
                    

                  </tbody>
            </table>
</section>

<?php
} 
else
{
  ?>
    
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
  <?php
}
?>




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

