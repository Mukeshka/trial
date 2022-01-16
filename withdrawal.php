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
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
h3{ font-weight:normal; font-size:20px;}
.btn .error{margin-top: 55px;}
.btn-group {
box-shadow: none;
}


#alert h4{font-size: 1rem;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}
#confirm .modal-dialog{padding:20px; margin-top:130px;}
.inner-addon select.error {
    font-size: 16px;
    position: unset;
}

.appHeader1{
    font-family: 'Abel', sans-serif; background-image: linear-gradient(#880E4F, #880E4F);
 margin: 0;
  padding: 0;
  
  width: 100%;
  height: 8vh;
 
  background: #880E4F;
  
}


.form-control{ border-radius: 9px 9px 9px 9px;font-family: 'Abel', sans-serif;
max-width: 450px;
font-family: 'Abel', sans-serif; border: 2px solid white;


	box-shadow: inset 0px 0px 5px pink;
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
            <div class="pageTitle">Withdrawal</div>
        </div>
 
 
</div>
<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
<h3 class="text-center m-2">Balance: <span>₹ <?php echo number_format(wallet($con,'amount',$userid), 2);?></span></h3>
    <form action="#" id="paymentForm" method="post" class="card-body" autocomplete="off">
      <div class="inner-addon left-addon">
      <i class="icon"><i class="fa fa-rupee"></i></i>
        <input type="number" id="userammount" name="userammount" class="form-control" placeholder="Enter withdrawal amount" onKeyPress="return isNumber(event)" >
      </div>
            <div>
           <p> <strong>Select Bank Option</strong></p>
      <div class="btn-group btn-group-toggle mt-1" data-toggle="buttons">
                       
                        <label class="btn btn-outline-success ml-1">
                            <input type="radio" name="optionsname" id="option2" value="bank" onChange="paytype(<?php echo $userid?>,'bank')">
                            <i class="icon ion-md-checkmark"></i>&nbsp;
                            Bank Account
                        </label>
                    </div>
                 <div class="text-right mt-1">
    <a href="manage_bankcard.php" class="text-danger"><i class="fa fa-plus"></i> Add Bank</a>
    </div>   
               <div class="inner-addon left-addon mt-1">
      <i class="icon ion-md-card"></i>
        <select class="form-control select2" name="acid" id="acid" style="padding-left:45px;">
        <option value="">Select Bank Detail</option>
        </select>
      </div>  
<input type="hidden" name="userid" value="<?php echo $userid;?>">
<input type="hidden" name="action" value="withdrawal">
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary" style="width:264px;"> Withdrawal </button>
        </div>
        
      </div>
    </form>
  </div>
</div>
<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-center pb-1">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
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
<script src="assets/js/withdrawal.js.php"></script>
<script>
function paytype(userid,type)
{
//alert(userid);
var dataString = 'userid='+ userid+ "& type=" + type;
$.ajax
({
type: "POST",
url: "ajax_bankdetail.php",
data: dataString,
cache: false,
success: function(html)
{ //alert(html);
$("#acid").html(html);
} 
});	
	}
</script>

</body>
</html>