<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/brands.min.css" integrity="sha512-lCU0XyQA8yobR7ychVxEOU5rcxs0+aYh/9gNDLaybsgW9hdrtqczjfKVNIS5doY0Y5627/+3UVuoGv7p8QsUFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/regular.min.css" integrity="sha512-lQP1BiSutAy+g9L+bDr1v9758SFLCJ1fK+6tXzu5M22G7/pigzb+01L31Cu1TUlWYr3lnQ4XQVmQfnpTZVW1Og==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/solid.min.css" integrity="sha512-WTx8wN/JUnDrE4DodmdFBCsy3fTGbjs8aYW9VDbW8Irldl56eMj8qUvI3qoZZs9o3o8qFxfGcyQocUY0LYZqzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/v4-shims.min.js" integrity="sha512-10WzxYzERgS+MolzQ2Ggy/voWGMXMWEQ3X4LYASMvWtvA/NomyFAqCAuBd0EmvfT32chQPyd+AjEvk7YeR+x+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="AXIS CLUB">
<meta name="keywords" content="AXIS CLUB" />
<style>


.form-control{ border-radius: 9px 9px 9px 9px;font-family: 'Abel', sans-serif;
max-width: 450px;
font-family: 'Abel', sans-serif; border: 2px solid white;
	padding: 20px;

	box-shadow: inset 0px 0px 5px #ff3300;
	transition: 0.5s;
	background-color: #FFEBEE;
}

.pageTitle{
       font-family: 'Abel', sans-serif;
    color: white;
    
   transition: 0.5s;
}

.btn { background-image: linear-gradient(red, purple);
    border-radius: 5px 5px 5px 5px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    font-family: 'Abel', sans-serif;
    height: 45px;
}

.my-buttons { background-image: linear-gradient(red, purple);
    border-radius: 5px 5px 5px 5px;
    border: 2px solid white;
    color: white;
    font-size:12px;
   
    height: 25px;
    width: 80px;
    font-family: 'Abel', sans-serif;
}

.appHeader1{
    font-family: 'Abel', sans-serif; background-image: linear-gradient(#880E4F, #880E4F);
 margin: 0;
  padding: 0;
  
  width: 100%;
  height: 8vh;
 
  background: #880E4F;
  
}
h3{ font-weight:normal; font-size:13px; font-family: 'Abel', sans-serif;}
.form-control{
    font-family: 'Abel', sans-serif;
}
</style>
</head>

<body>
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];?>


<!-- App Header -->
<div class="appHeader1">
<div class="left">
            <a href="#" onClick="goBack();" class="icon goBack">
                <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="pageTitle">Recharge</div>
        </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
<h3 class="text-center m-2"><i class="fas fa-coins text-warning"></i>Balance: <span>₹ <?php echo number_format(wallet($con,'amount',$userid), 2);?></span></h3>
    <form action="#" id="paymentForm" method="post" class="card-body" autocomplete="off">
      <div class="inner-addon left-addon  justify-content-center">
          
        
          
          
<div class="layout text-center d-flex justify-content-center">
     
          
      <i class="icon ion-md-wallet" style="color: white"></i>
      
        <input type="number" id="userammount" name="userammount" class="form-control" placeholder="Enter recharge amount" onKeyPress="return isNumber(event)" >
     </div>
          <br>
        
        
       <div class"container-fluid d-flex justify-content-center">
<div class="layout text-center d-flex justify-content-center">
     
<button value="300" class="my-buttons" type="button"><i class="bi bi-coin"></i>300</button>
<button value="400" class="my-buttons" type="button">400</button>
<button value="500" class="my-buttons" type="button">500</button>
</div>
<div class="layout text-center d-flex justify-content-center">
     
<button value="1000" class="my-buttons" type="button">1000</button>
<button value="2000" class="my-buttons" type="button">2000</button>
<button value="5000" class="my-buttons" type="button">5000</button>
</div>
<div class="layout text-center d-flex justify-content-center">
     
<button value="10000" class="my-buttons" type="button">10000</button>
<button value="15000" class="my-buttons" type="button">15000</button>
<button value="20000" class="my-buttons" type="button">20000</button>
    
    </div>  </div>
      </div>
      
 





          
            <div>
                
                


<script>
  $('.my-buttons').click(function() {
  var value = $(".form-control").val()
  var clicked_button = $(this).attr('value')
  //use val and combined both value
  $(".form-control").val(value + "" + clicked_button);

});
  
</script>




           <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary" style="width:264px;"> Recharge </button>
        </div>
        
      </div>
    </form>
  </div>
</div>




<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="paymentdetail" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
       <p>&nbsp;</p>
        <div class="">
        <form action="#" method="post" id="paymentdetailForm">
        <div class="inner-addon left-addon">
      <i class="icon ion-md-person"></i>
  <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-md-phone-portrait"></i>
        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number"  value="<?php echo user($con,'mobile',$userid);?>" onKeyPress="return isNumber(event)">
      </div>
      <div class="inner-addon left-addon">
      <i class="icon ion-ios-mail"></i>
   <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email id"  value="<?php echo user($con,'email',$userid);?>">
      </div>
      <input type="hidden" name="finalamount" id="finalamount" value="">
      <input type="hidden" name="action" id="action" value="paydetail">
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary" style="width:264px;"> Recharge </button>
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
<script src="assets/js/payment.js.php"></script>

</body>
</html>