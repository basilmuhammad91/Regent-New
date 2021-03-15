<?php

include('connect.php');
session_start();

if(isset($_SESSION['role']))
{
  if($_SESSION['role'] == "Admin")
    {
        header('location: Employee-list.php');
    }
    else if($_SESSION['role'] == "Employee")
    {
        header('location: Employee-list.php');
    }
    else if($_SESSION['role'] == 'Field Employee')
    {
        header('location: Field-employee-list.php');
    }
    else if($_SESSION['role'] == 'Agency')
    {
        header('location: Agency-list.php');
    }
    else
    {
        header('location: Agency-list.php');
    }
}

//FOR SIGNIN
if(isset($_POST['signin']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "select * from users where email = '$email' and password = '$password'");

  if($row=mysqli_fetch_array($query))
  {
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role'] = $row['role'];

    if($row['role'] == "Admin")
    {
        header('location: Employee-list.php');
    }
    else if($row['role'] == "Employee")
    {
        header('location: Employee-list.php');
    }
    else if($row['role'] == 'Field Employee')
    {
        header('location: Field-employee-list.php');
    }
    else if($row['role'] == 'Agency')
    {
        header('location: Agency-list.php');
    }
    else
    {
      echo "<script>alert('Logged In')</script>";
      header('location: Agency-list.php');
    }
  }
  else
  {
    echo "<script>alert('Not Logged In')</script>";
  }

}

//FOR SIGN UP
if(isset($_POST['signup']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $cnic = $_POST['cnic'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $role = $_POST['role'];

  $query = mysqli_query($con, "INSERT INTO `users`(`name`, `email`, `password`, `city`, `cnic`, `phone`, `address`, `image`, `role`) VALUES ('$name','$email','$password','city','$cnic','$phone','$address','$image','$role')");


  if($query>0)
  {

    $query2 = mysqli_query($con, "select * from users where email = '$email' and password = '$password'");

    if($row=mysqli_fetch_array($query2))
    {
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['role'] = $row['role'];

      if($row['role'] == "Admin")
      {
          header('location: Employee-list.php');
      }
      else if($row['role'] == "Employee")
      {
          header('location: Employee-list.php');
      }
      else if($row['role'] == 'Field Employee')
      {
          header('location: Field-employee-list.php');
      }
      else if($row['role'] == 'Agency')
      {
          header('location: Agency-list.php');
      }
      else
      {
        echo "<script>alert('Logged In')</script>";
      }
}
    // $_SESSION['user_id'] = $email;
    // $_SESSION['name'] = $name;
    // $_SESSION['email'] = $email;
    // $_SESSION['password'] = $row['password'];
    // if($role == "Employee")
    // {
    //     header('location: Employee-list.php');
    // }
    // else if($role == 'Field Employee')
    // {
    //     header('location: Field-Employee.php');
    // }
    // else if($role == 'Agency')
    // {
    //     header('location: Agency-list.php');
    // }
    else
    {
      echo "<script>alert('You are logged in !')</script";
    }
  }
  else
  {
    echo "<script>alert('Error')</script>";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container-main">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="index.php" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" required />
            </div>

            <input name="signin" type="submit" value="Login" class="btn solid" />
           
          </form>
         
          <form action="index.php" method="post" class="sign-up-form form-scroll pb-3" enctype="multipart/form-data">

            <h2 class="title">Sign up</h2>
            <section class="row">

              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" placeholder="Name" required />
                </div>
              </section>


              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input name="cnic" type="number" placeholder="CNIC" required/>
                </div>
              </section>

              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input name="email" type="email" placeholder="Email" required/>
                </div>
              </section>

              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-phone"></i>
                  <input name="phone" type="phone" placeholder="Phone" required/>
                </div>
              </section>
              
              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-city"></i>
                  <select name="city" id="exampleFormControlSelect1"  style="background-color: transparent; border: 0px solid transparent; color: rgba(128, 128, 128, 0.863);" required>
                    <option>Karachi</option>
                    <option>Larkana</option>
                    <option>Lahore</option>
                    <option>Islamabad</option>
                  </select>
                </div>
              </section>

              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-location-arrow"></i>
                  <textarea name="address" id="" rows="0" placeholder="Address" style="background-color: transparent; border: 0px solid transparent; color: rgba(128, 128, 128, 0.863); padding-top: 17px;" required ></textarea>
                
                </div>
              </section>

              <section class="col-md-6" required>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input name="password" type="password" placeholder="Password" required />
                </div>
              </section>

              <section class="col-md-6">
                <div class="input-field">
                  <i class="fas fa-id-card-alt"></i>
                  <select name="role" id="exampleFormControlSelect1"  style="background-color: transparent; border: 0px solid transparent; color: rgba(128, 128, 128, 0.863);" required>
                    <option value="Employee">Employee</option>
                    <option value="Field Employee">Field Employee</option>
                    <option value="Agency">Agency</option>
                    <option value="Client">Client</option>
                  </select>
                </div>
              </section>


              <section class="col-md-12 m-auto p-0">
                <span style="font-size: 12px;">Upload Image</span>
                <div class="input-field pt-3 m-auto">
                  <i></i>
                  <input required name="image" type="file" placeholder="Attach your image" />
                </div>
              </section>

            </section>
            <input name="signup" type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
