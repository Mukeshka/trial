<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<REL="STYLESHEET" HREF="HTTPS://CDNJS.CLOUDFLARE.COM/AJAX/LIBS/INTL-TEL-INPUT/17.0.8/CSS/INTLTELINPUT.CSS" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@900&display=swap" rel="stylesheet">
<style>
.card {border-radius: 7px 7px 7px 7px; font-family: 'Abel', sans-serif;
border-size: 2 px;
border-color: white;
transition: 0.5s;
}

.form-control{ border-radius: 13px 13px 13px 13px;font-family: 'Abel', sans-serif;
    width: 300px;
font-family: 'Abel', sans-serif; border: 2px solid white;
	padding: 20px;

	box-shadow: inset 1px 1px 1px white;
	transition: 0.5s;
	background-color: #FFEBEE;
}

.title{
    font-family: 'Grenze Gotisch', cursive;
    color: white;
    
   transition: 0.5s;
}

.btn { background-image: linear-gradient(red, #9C27B0);
    border-radius: 30px 30px 30px 30px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    font-family: 'Abel', sans-serif;
}

.card-body {
background-image: linear-gradient(lightpink, white);
border-radius: 15px 15px 15px 15px ; font-family: 'Abel', sans-serif;
border-size: 2 px;
border-color: white;
transition: 0.5s;
}
.body{
    background-image: linear-gradient(#880E4F, #880E4F);
}

</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Bungee+Outline&display=swap" rel="stylesheet">
</head>

<body class="body">

<!-- App Header -->
<div class="appHeader1" style="font-family: 'Abel', sans-serif; background-image: linear-gradient(#880E4F, #880E4F);
 margin: 0;
  padding: 0;
  
  width: 100%;
  height: 8vh;
 
  background: #880E4F;
  
">
  <div class="left">
            <a href="#" onClick="goBack();" class="icon goBack">
                <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="pageTitle">Login</div>
        </div>

<br>
<br>
<br>
<br>
<br>
<br>
<div id="appCapsule">
  <div class="card shadow" style="background-image: linear-gradient(#880E4F, lightpink);">
<h1 class="title text-center">FANCY CLUBS</h1>
    <form action="#" id="loginForm" method="post" onsubmit="process(event)" class="card-body" autocomplete="off">
     
     
    
     
      <div class="inner-addon left-addon">
      <i class="icon ion-md-phone-portrait"></i>
        <input type="tel"  name="login_mobile" id="login_mobile" class="form-control" placeholder="Mobile Number" onKeyPress="return isNumber(event)"  max-length="10"\>
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-md-key"></i>
        <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Password">
      </div>
      <input type="hidden" name="action" value="login">
      <div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-light" style="width:264px;"> Login </button>
        </div>
        <div class="text-center mt-2">
        <a href="register.php" class="btn btn-light">Register</a>
        <a href="forgot-password.php" class="btn btn-light">Forgot Password</a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- appCapsule -->

<script>
    var input = document.querySelector("#login_mobile");
    window.intlTelInput(input, { 
        
        
  preferredCountries: ["in", "us", "uk", "de"],
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",

        separateDialCode: true,
        customPlaceholder: function (
            selectedCountryPlaceholder,
            selectedCountryData
        ) {
            return "e.g. " + selectedCountryPlaceholder;
        },
    });
   
</script>



<?php include("include/footer.php");?>
<div id="registertoast" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
        <div class="text-center" id="regtoast">          
        </div>
      </div>
    </div>
  </div>
</div>










<!-- REQUIRED CDN  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>
     
     





<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/account.js"></script>

</body>
</html>