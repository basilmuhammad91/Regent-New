<?php

include('connect.php');
include('header.php');

?>
	
      <section class="mr-auto text-center">
        <i class="fas fa-user-circle" style="font-size: 30px; color: white;"></i>
        <a class="nav-link text-light list-link" href="#" >Admin</a>
        <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Profile</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="#" > Logout</a>
        </section>
      </section>	
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
        <li class="nav-item active">
          <a class="nav-link text-light showhide1"><i class="fas fa-user"></i> User</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Employe-list.html" ><b>o</b> Employee</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Field-employe-list.html" ><b>o</b> Field Employee</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-list.html" ><b>o</b> Agancy</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Client.html" ><b>o</b> Client</a>
          </section>
          
        </li>
        <li class="nav-item">
          <a class="nav-link text-light showhide1"><i class="fas fa-list"></i> Enteries</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Enteries.html" ><b>o</b> Regent Enteries</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Enteries.html" ><b>o</b> All Case Enteries</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-Balance.html" ><b>o</b> Expenses</a>
          </section>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light showhide1"><i class="fa fa-chart-bar"></i> Reports</a>
          <section class="main1 showhidebox" >
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-Reporrts.html" ><b>o</b> Regent Reports</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="All-Case-Reports.html" ><b>o</b> All Reports</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Opening-balance-list.html" ><b>o</b> Expense Reports</a>
          
          </section>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light showhide1" ><i class="fa fa-paste"></i> Ledger</a>
          <section class="main1 showhidebox" >
            <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Agency-ledger.html" ><b>o</b> Agency Ledger</a>
            <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Regent-ledger.html" ><b>o</b> Regent Ledger</a>
            <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="Embassy.html" ><b>o</b> Embassy</a> 
            <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="doc.html" ><b>o</b> Open Visa Form</a>
          <a class="nav-link text-light list-link wow fadeInDown animated delay-1s" href="export.html" ><b>o</b> Export Excel </a>
          </section>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="help.html"><i class="fas fa-question-circle"></i> Help</a>
        </li>
        
        </ul>
        
          <button class="btn text-primary main bg-light showhide1 ml-auto"  >
          <i class="fas fa-arrows-alt-v " style="font-size: 15px; line-height: 0;"></i>
        </button>
  
      </div>
    </nav>

		<!--------------------------------------------------------->


		<br>

	
		
<section class="container-fluid">
    <h5> Field Employee</h5>
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
                      <th>Image</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                    </tr>
                  </thead>
                  <tbody>
                   
        
                    
                   <?php
                   $query = mysqli_query($con, "select * from users where role = 'Field Employee'");
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
                              <td>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" width="100" height="100" class="img-fluid">
                              </td> 
                              <td >
                                  <div class="dropdown show">
                                    <a class="btn btn-primary dropdown-toggle"  style="font-size: 12px !important; color: white; padding: 3px; margin: 1px; padding-left: 20px !important; padding-right: 20px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </a>
                                    <div class="dropdown-menu wow fadeInDown animated" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="profile-edit.php?id=<?php echo $row['user_id'] ?>">Edit</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="View-Details.php">View</a>
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

