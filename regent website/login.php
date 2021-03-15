<!doctype html>
<html>
<head>

	<link rel="icon" href="assets/tablogo.png" type="image/icon type">
	
<link href="css/Main StyleSheet.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="css/jquery-fab-button.css" rel="stylesheet">
<script src="jQuery/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/wow.min.js"></script>

<style>
    *{
    transition: .5s !important;
}
.main-bg{
    background-image: url("assets/MASJID-E-NABAW.jpg"); 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.form-column{
    backdrop-filter: blur(10px);
    padding: 100px;
    border-radius:5px;
}
.child {
    width: 50px;
    height: 50px;
    background-color: red;
    /* Center vertically and horizontally */
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -25px 0 0 -25px; /* apply negative top and left margins to truly center the element */
  }

  .form-control{
      border: 0px transparent !important;
      border-bottom: 1px solid gray !important;
      background-color: rgba(255, 255, 255, 0.849);
      color: black !important;
      font-weight: bold;
      border-radius: 5px !important;
  }
  .form-control:hover{

    border-bottom: 1px solid rgb(0, 119, 255) !important;

}
.btnstyle{
   background-color: #2769f7 !important;
   color: white !important;
}
label{
    color: white !important;
}
h1{
    color: white !important;
}
</style>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Home</title>

</head>

<body class="main-bg">
    <section class="container " style="margin-top: 10%; margin-left: 50%; transform: translate(-50%); margin-bottom: 10%; ">
        <section class="row">
            <section class="col-md-12 form-column m-auto pl-0">
                <section class="container">
                    
                    <section class="row" style="align-items: center;">
                        <section class="col-md-6 text-center" >
                                <center><img src="assets/logo1.png" class="img-fluid " width="250px" height="auto" alt=""></center>
                                <br><br>

                                <center class="zoomIn animated">
                                    <button class="btn  main1 showhide1 zoomIn animated btnstyle" style="border-radius: 5px; width: 150px; ">Create Account</button>
                                    <button class="btn btn-primary main1 showhide1 zoomIn animated btnstyle" style="border-radius: 5px; width: 200px;  display: none;">Already Have Account</button>
                                </center>
                               
                              
                        </section>
                        <section class="col-md-6 m-auto main1 zoomIn animated" style="border-left: 1px solid gray;">
                            <form >
                                <h1 style="font-size: 40px;">Login</h1>
                                <br>
                                <div class="form-group text-left">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control mainLoginInput" style="font-family: calibri;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group text-left">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control mainLoginInput" style="font-family: calibri;" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <a href="" class="text-light"><span>Forget Password!</span></a>
                                <button type="submit" class="btn btnstyle " style="border-radius: 5px; width: 150px; float: right; ">Login</button>
                              </form>
                        </section>


                        <section class="col-md-6 m-auto main1  zoomIn animated" style="border-left: 1px solid gray; display: none;">
                            <form>
                                <h1 style="font-size: 40px;">Register</h1>
                                <br>
                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                </div>

                                <div class="form-group text-left">
                                  <label for="exampleInputEmail1">CNIC</label>
                                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter CNIC No.">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                                
                                <div class="form-group text-left">
                                  <label for="exampleInputPassword1">City</label>
                                  <select class="form-control" id="">
                                     
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                  </select>
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control" id="">
                                       
                                        <option value="">Employee</option>
                                        <option value="">Client</option>
                                        <option value="">Admin</option>
                                        
                                    </select>
                                  </div>

                                  <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Add Attectment</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1">
                                </div>

                                <button type="submit" class="btn  btnstyle" style="  border-radius: 5px; width: 150px; float: right; ">Register</button>
                              </form>
                        </section>




                    </section>

                </section>
            </section>
        </section>

    </section>
	
</body>
</html>

<script>
	$(document).ready(function(){
			$('.showhide1').on('click', function(){
				$('.main1').toggle(0);
			});
	});
</script>

<script src="js/jquery-fab-button.js"></script>

