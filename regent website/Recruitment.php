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




<script>
  $(window).scroll(function(){
      $(".navbar").toggleClass("scrolled",$(this).scrollTop() > 570)
      $(".nav-link").toggleClass("scrolled",$(this).scrollTop() > 570)
      $(".navheading").toggleClass("scrolled",$(this).scrollTop() > 570)
      
  });
  </script>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Recruitment</title>
</head>

<style>
    @import url("https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap");
:root {
  --d: 700ms;
  --e: cubic-bezier(0.19, 1, 0.22, 1);
  --font-sans: "Rubik", sans-serif;
  --font-serif: "Cardo", serif;
}


.page-content {
  display: grid;
  grid-gap: 1rem;
  padding: 1rem;
  max-width: 1024px;
  margin: 0 auto;
  font-family: var(--font-sans);
}
@media (min-width: 600px) {
  .page-content {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 800px) {
  .page-content {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  position: relative;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
  padding: 1rem;
  width: 100%;
  text-align: center;
  color: whitesmoke;
  background-color: whitesmoke;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
}
@media (min-width: 600px) {
  .card {
    height: 350px;
  }
}
.card:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 110%;
  background-size: cover;
  background-position: 0 0;
  transition: transform calc(var(--d) * 1.5) var(--e);
  pointer-events: none;
}
.card:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 200%;
  pointer-events: none;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.32) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.54) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.79) 100%);
  transform: translateY(-50%);
  transition: transform calc(var(--d) * 2) var(--e);
}
.card:nth-child(1):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/121987414-close-up-of-a-person-s-hand-stamping-with-approved-stamp-on-document-at-desk-450x270.jpg);
    background-position: center !important;
}
.card:nth-child(2):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/Newspaper-Mockups-For-Advertisement-1000x600.jpeg);
  background-position: center !important;
}
.card:nth-child(3):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/interview-image-750x450.jpg);
  background-position: center !important;
}
.card:nth-child(4):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/final-selectionn-image-1000x600.jpg);
  background-position: center !important;
}
.card:nth-child(5):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/interview-image-750x450.jpg);
  background-position: center !important;
}
.card:nth-child(6):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/final-selectionn-image-1000x600.jpg);
  background-position: center !important;
}

.card:nth-child(7):before {
  background-image: url(https://www.atharoverseas.com/wp-content/uploads/2020/01/travling-683x410.jpg);
  background-position: center !important;
}

.content {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  padding: 1rem;
  transition: transform var(--d) var(--e);
  z-index: 1;
}
.content > * + * {
  margin-top: 1rem;
}

.title {
  font-size: 1.3rem;
  font-weight: bold;
  line-height: 1.2;
}

.copy {
  font-family: var(--font-serif);
  font-size: 15px !important;
  font-style: italic;
  line-height: 1.35;
}

.btn {
  cursor: pointer;
  margin-top: 1.5rem;
  padding: 0.75rem 1.5rem;
  font-size: 0.65rem;
  font-weight: bold;
  letter-spacing: 0.025rem;
  text-transform: uppercase;
  color: white;
  background-color: black;
  border: none;
}
.btn:hover {
  background-color: #0d0d0d;
}
.btn:focus {
  outline: 1px dashed yellow;
  outline-offset: 3px;
}

@media (hover: hover) and (min-width: 600px) {
  .card:after {
    transform: translateY(0);
  }

  .content {
    transform: translateY(calc(100% - 4.5rem));
  }
  .content > *:not(.title) {
    opacity: 0;
    transform: translateY(1rem);
    transition: transform var(--d) var(--e), opacity var(--d) var(--e);
  }

  .card:hover,
.card:focus-within {
    align-items: center;
  }
  .card:hover:before,
.card:focus-within:before {
    transform: translateY(-4%);
  }
  .card:hover:after,
.card:focus-within:after {
    transform: translateY(-50%);
  }
  .card:hover .content,
.card:focus-within .content {
    transform: translateY(0);
  }
  .card:hover .content > *:not(.title),
.card:focus-within .content > *:not(.title) {
    opacity: 1;
    transform: translateY(0);
    transition-delay: calc(var(--d) / 8);
  }

  .card:focus-within:before, .card:focus-within:after,
.card:focus-within .content,
.card:focus-within .content > *:not(.title) {
    transition-duration: 0s;
  }
}
</style>
<body>

  <nav class="navbar navbar-expand-lg navbar-light  fixed-top ">
    <a class="navbar-brand" href="index.php"><img src="assets/logo1.png" height="50px" width="auto" alt=""> <span  class="navheading " ><span style="color: rgb(39, 105, 247); font-weight: bold;">R</span>egent <span style="color: rgb(39, 105, 247);  font-weight: bold;">O</span>verseas</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active" style=" border-radius: 5px; ">
            <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="About.php">About Agency</a>
                <a class="dropdown-item" href="CEO Message.php">CEO Message</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="background-color:rgb(39, 105, 247); border-radius: 5px; color: white !important;" href="Recruitment.php">Recruitment Process</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Blog.php">Our Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="Contact.php">Contact</a>
        </li>
      
       
        </ul>
    </div>
  </nav>




    <section class="banner" >

        <h3 class="bannerheading1">Recruitment</h3>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300" class="wave">
        <path fill="#fff" fill-opacity="1" d="M0,256L120,240C240,224,480,192,720,192C960,192,1200,224,1320,240L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
      </svg>

<br>

      <section class="container">
        <main class="page-content">
            <div class="card">
              <div class="content">
                <h2 class="title">Emigrants Approval</h2>
                <p class="copy">After visa documents received from the employer are submitted to the Protectorate of Emigrants for necessary registration/permission.</p>
               
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Press Advertisement</h2>
                <p class="copy">There after, the vacancies are advised through newspapers, to attract large number of candidates against the demand received.</p>
                
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Interview</h2>
                <p class="copy">After receiving the CV’s / applications, short listed candidates are called for interviews and trade tests.</p>
               
              </div>
            </div>
            <div class="card">
              <div class="content">
                <h2 class="title">Final Selection</h2>
                <p class="copy">The short listed candidates are then required to appear before the selection board. Thereafter the selected candidates are put to trade tests. The ﬁnal raising is done After consideration of the individuals overall performance.</p>
               
              </div>
            </div>
            <div class="card m-auto">
                <div class="content">
                  <h2 class="title">Medical Examinations (GAMCA)</h2>
                  <p class="copy">The ﬁnally selected candidates are required to appear before the medical board comprising of highly competent specialists/doctors for conducting full medical checkup duly from GAMCA </p>
                 
                </div>
            </div>
            <div class="card m-auto">
                <div class="content">
                  <h2 class="title">VISA Endorsement</h2>
                  <p class="copy">On completion of above formalities, Passport of the candidate along with all required documents are submitted for visa stamping to the Embassy / Consulate of the country of employment.</p>
                 
                </div>
            </div>
            <div class="card m-auto">
                <div class="content">
                  <h2 class="title">Travel</h2>
                  <p class="copy">After completion of all the required procedures and visa stamp, we finally arrange traveling tickets for the employees.</p>
                 
                </div>
            </div>
          </main>
    </section>


    

<br><br>

<section class="container-fluid p-4" style="border-top: 2px solid rgb(39, 105, 247);">
  <section class="container">
      <section class="row" style="align-items: center;">
          

          <section class="col-md-4">
              <img src="assets/logo1.png" width="80px" height="auto" class="img-fluid ml-auto" alt="">
              <span  class="bannerheading2 text-dark pt-3" style="font-size: 25px;"><span style="color: rgb(39, 105, 247); font-weight: bold;">R</span>egent <span style="color: rgb(39, 105, 247);  font-weight: bold;">O</span>verseas</span>

          </section>

          <section class="col-md-3 text-center">

            <span style="font-size: 16px;"><i class="fas fa-phone" style="color: rgb(39, 105, 247);"></i> 0348-1311304</span> 

          </section>

          <section class="col-md-3  text-center">
              <span style="font-size: 16px;"><i class="fas fa-mail-bulk" style="color: rgb(39, 105, 247);"></i> novinpal77@hotmail.com</span>
          </section>

          <section class="col-md-2 text-center">
              <a href="" class="m-2" style="font-size: 25px;"><i class="fab fa-facebook"></i></a>
              <a href="" class="m-2" style="font-size: 25px;"><i class="fab fa-whatsapp"></i></a>
              <a href="" class="m-2" style="font-size: 25px;"><i class="fab fa-twitter"></i></a>
          </section>

      </section>
  </section>

</section>
<?php

include('modal.php');
;

?>
</body>
</html>

<script src="js/jquery-fab-button.js"></script>

