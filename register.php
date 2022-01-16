<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Axis Clubs</title>

<meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="styles.css" />
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="" />
<style>

.otpbtn {
    background-image: linear-gradient(red, #9C27B0);
    border-radius: 30px 30px 30px 30px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    max-width: 450px;
}



.card {border-radius: 7px 7px 7px 7px;
border-size: 2 px;
border-color: white;
transition: 0.5s;
background-image: linear-gradient(#880E4F, #880E4F); 
}

.form-control{ border-radius: 13px 13px 13px 13px;
max-width: 450px;
font-family: 'Abel', sans-serif;
 border: 2px solid white;
	padding: 20px;

	box-shadow: inset 0px 0px 5px #ff3300;
	transition: 0.5s;
	background-color: #FFEBEE;
}

.title{
font-family: 'Abel', sans-serif;
    color: white;
    
   transition: 0.5s;
}

.btn { background-image: linear-gradient(red, purple);
    border-radius: 10px 10px 10px 10px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    
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
</head>

<body class="body">
<?php include("include/connection.php");?>
<!-- Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1" style="font-family: 'Abel', sans-serif;  font-family: 'Abel', sans-serif;
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
            <div class="pageTitle">Register</div>
        </div>
 
 
</div>
<br>

<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule" >
  <div class="card">

    <form action="#" method="post" id="Register" class="card-body" autocomplete="off">
    <div class="row ">
                    
      <div class="inner-addon left-addon">
      <i class="icon ion-md-phone-portrait"></i>
        <input type="phone" name="mobile" id="mobile" onKeyPress="return isNumber(event)" class="form-control" placeholder="Mobile Number" value="">
      </div>
      
      
      
      <br>
      <div class="inner-addon left-addon"><a href="javascript:void(0);" class="btn btn-sm btn-light otpbtn" id="reg_otp" onClick="mobileveryfication();">Send OTP</a></div>
      </div>
      
      
      <div class="inner-addon left-addon">
      <i class="icon ion-md-key"></i>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-ios-gift"></i>
        <input type="text" name="rcode" id="rcode" class="form-control" placeholder="Invite Code" value="<?php echo @$_GET['code'];?>">
      </div>
      <input type="hidden" name="action" value="register">
      <div class="form-group row mt-3 mb-3">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
    <input type="checkbox" checked class="custom-control-input" id="remember" name="remember">
  <label class="custom-control-label text-info" for="remember">I Accept Privacy Policy <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false"></a></label>
                        </div>
                    </div>
                    
                </div>
      <div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-light" style="width:264px;"> Register </button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
    var input = document.querySelector("#mobile");
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
<br>
<br>

<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="registerthanksPopup" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="text-center">
          <h5>Thank you !</h5>
          <h6>Your account has been created successfully.</h6>
          <div class="text-center">
<button type="button" class="btn btn-sm btn-primary" onClick="window.location='';">OK</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
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
<div id="privacy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 style="font-weight:normal;">Privacy Policy</h5>
              </div>
      <div class="modal-body responsive">
      <?php echo content($con,"privacy");?>

      </div>
      <div class="modal-footer">
    <a class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a>
              </div>
    </div>
  </div>
</div>
<div id="otpform" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" id="otpclose" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
       <p><strong>Enter Your Verification code here</strong></p>
        <div class="pt-2">
   <form action="#" method="post" id="otpsubmitForm">
  <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP" onKeyPress="return isNumber(event)">
      <input type="hidden" name="type" id="type" value="otpval">
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-light" style="width:264px;"> Verify Now </button>
        </div>
        </form>          
        </div>
      </div>
    </div>
  </div>
</div>



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