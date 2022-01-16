<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>
.appHeader1{
    font-family: 'Abel', sans-serif; background-image: linear-gradient(#880E4F, #880E4F);
 margin: 0;
  padding: 0;
  
  width: 100%;
  height: 8vh;
 
  background: #880E4F;
  
}
.appContent3 {font-family: 'Abel', sans-serif;

	background-color: #2196f3 !important;
	border-color: #2196f3 !important;
	padding:12px;
	border-radius:3px;
	font-size:16px;
}
.user-block img {font-family: 'Abel', sans-serif;
	width: 40px;
	height: 40px;
	float: left;
	margin-right:10px;
	background:#333;
}
.img-circle {font-family: 'Abel', sans-serif;
	border-radius: 50%;
}
.accordion .btn-link {font-family: 'Abel', sans-serif;
     border-radius: 30px 30px 30px 30px;
	box-shadow:2px;
	padding:15px !important;
	margin:0px 0px;
	color: black !important;
	font-size: 16px;
	font-weight: normal;
	border-top:solid 1px red;
	width: 400px;

}
.accordion .collapsed {font-family: 'Abel', sans-serif;
	border:solid 1px white;
	height: 15px; width: 400px;
}
.accordion .show {font-family: 'Abel', sans-serif;
	border-bottom:solid 1px #FFFDE7;
}
.accordion .sub-link {font-family: 'Abel', sans-serif;
    border-top:solid 0.5px gray;
	box-shadow:none;
	padding:8px !important;
	color: #333 !important;
	font-size: 12px;
	font-weight: normal;
	display:block;
}
.accordion .sub-link:hover {font-family: 'Abel', sans-serif;
color:lightpink !important;
}
.accordion .btn-link:hover {font-family: 'Abel', sans-serif;
	background:#F5F5F5;
}
.accordion .btn-link {font-family: 'Abel', sans-serif;
	position: relative;
}
 .accordion .btn-link::after {font-family: 'Abel', sans-serif;
 content: "\f107";
 color: #333;
 top: 8px;
 right: 9px;
 position: absolute;
 font-family: "FontAwesome";
 font-size:24px;
}

 .accordion .btn-link[aria-expanded="true"]::after {font-family: 'Abel', sans-serif;
 content: "\f106";
}
.light{font-family: 'Abel', sans-serif;
    height: 24px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 24px;}
.light1{font-family: 'Abel', sans-serif;
    height: 26px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 26px;}

.btn { background-image: linear-gradient(white, pink);
    border-radius: 30px 30px 30px 30px; font-family: 'Abel', sans-serif;
    border: 2px solid white;
    
    color: white;
    transition: 0.5s;
    
}

.body{font-family: 'Abel', sans-serif;

background-image: linear-gradient(#880E4F, #880E4F);

}

.row{font-family: 'Abel', sans-serif;

background-image: linear-gradient(#880E4F, #880E4F);

}


.mb-2{
    height: 5px;
     display:inline-block;
  padding:2px;
  margin:auto;
  
    
}
.wallet{
height: 5px;
display:inline-block;
padding:0px;
margin:0px;
    
}

</style>
</head>

<body class="body">
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>

<div class="row">
  <div class="app text-white">
    <div class="row col-md-12">
      <div class="container col-md-12 ">
      
        <div class="row" style="border-radius: 15px;">
          <div class="card-body text-center">
            
          <div class="col-12 mb-1">
        <div class="user-block pull-left" style="font-size:16px;"> <img class="img-circle img-bordered-lg" src="assets/img/avatar.svg"> 
        User: Member <?php echo user($con,'id',$userid);?><br>
        ID: <?php echo sprintf("%06d",user($con,'id',$userid));?>
        </div></div>
    <div class="container-fluid d-flex justify-content-center">   
 <div class="wallet d-flex justify-content-between text-center mt-5 mb-2">
<div>
                <p class="mb-2 h5" style="font-size:15px;"><?php echo number_format(wallet($con,'amount',$userid));?></p>
                <p class="text-light mb-0" style="font-size:16px;">Wallet<br> Balance</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5" style="font-size:15px;">₹ <?php echo (bonus($con,'level1',$userid));?></p>
                <p class="text-light mb-0" style="font-size:16px;">Total Lvl-1 Income</p>
              </div>
              <div>
                <p class="mb-2 h5" style="font-size:15px;">₹ <?php echo (bonus($con,'level2',$userid) );?></p>
                <p class="text-light mb-0" style="font-size:16px;">Total Lvl-2 Income</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

<br> <br> 
  
     
    </div>
  </div>
</div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div class="appContent1 mb-5" >
  <div class="contentBox long mb-3" >
    <div class="contentBox-body card-body" > 
      
      <!-- listview -->
      
      <div class="accordion" id="accordionExample">
      <div class="card-header">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed"><i class="icon ion-md-trophy text-dark"></i>   Orders </a> </h2>
          </div>
       <div class="card-header">
            <h2 class="mb-0"> <a href="promotion.php" class="btn btn-link collapsed"> <i class="icon ion-md-trophy text-dark"></i>   Promotion </a> </h2>
          </div>   
<div class="card-header">
            <h2 class="mb-0"> <a href="transactions.php" class="btn btn-link collapsed"><i class="icon ion-md-trophy text-dark"></i>   Transactions </a> </h2>
          </div>
          <div class="card-header">
            <h2 class="mb-0"> <a href="withdrawal.php" class="btn btn-link collapsed"><i class="icon ion-md-trophy text-dark"></i>   Withdrawal </a> </h2>
          </div>
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="icon ion-md-trophy text-dark"></i>   Wallet </a> </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <a href="recharge.php" class="sub-link"> Recharge </a>
         <a href="withdrawal.php" class="sub-link"> Withdrawal </a>
         <a href="transactions.php" class="sub-link"> Transactions </a>
        </div>
        <div class="card-header">
            <h2 class="mb-0"> <a href="manage_bankcard.php" class="btn btn-link collapsed"> <i class="icon ion-md-trophy text-dark"></i>   Bank Card </a> </h2>
          </div>
          <div class="card-header">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed"><i class="icon ion-md-trophy text-dark"></i>   Share </a> </h2>
          </div>
        
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"><i class="icon ion-md-trophy text-dark"></i>   Account Security </a> </h2>
        </div>
        <div id="collapsefour" class="collapse">
      <a href="resetpassword.php" class="sub-link"> Reset Password </a>
        </div>
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"> <i class="icon ion-md-trophy text-dark"></i>   About </a> </h2>
        </div>
        <div id="collapsefive" class="collapse">
       
        <a href="privacy.php" class="sub-link"> Privacy Policy </a>
        <a href="riskagreement.php" class="sub-link"> Risk Disclosure Agreement </a>
         
        </div>

<div class="card-header">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed"><i class="icon ion-md-trophy text-dark"></i>   Help & Support </a> </h2>
          </div>
<div class="card-header">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed"> <i class="fa fa-telegram text-primary"></i>  Join Our Telegram Channel </a> </h2>
          </div>
      </div>
      
      <!-- * listview --> 
      
    </div>
  </div>
  
  <!-- app Footer -->
  <div class="text-center mt-4"> <a href="logout.php" class="btn btn-sm btn-light" style="width:300px; background-image: linear-gradient(red, purple);">Logout</a> </div>
  <!-- * app Footer --> 
  
</div>
<!-- appCapsule -->
<?php include("include/footer.php");?>
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>