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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/style.css">


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


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
  body {
	-ms-user-select:text;
	user-select:text;
	-moz-user-select:text;
	-webkit-user-select:text
}
.card {
    border: 1px solid #E5E9F2;
    border-radius: 3px;
    padding: 0px;
}
.card .card-title {
    margin-bottom: 7px;
}
h3{ font-weight:normal; font-size:20px;}
h4{ font-weight:normal; font-size:18px; color:#858585;}
.card-body{ padding:.6rem;}
td{ padding:3px;}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
}
.form-control{box-shadow:none; border-bottom:#ccc solid 1px; margin-bottom:3px;}
#alert h4{font-size: 1rem; font-weight:bold; color:#333;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}

label{ color:#999;}
#bonus .modal-dialog{margin-top:100px;}
#bonus .modal-footer{ border:none;}
.dropdown-menu{ background:#fff;top: -15px;
left: -145px; border:none;
border-radius:0px;
-webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);}
.appHeader1 .right{right:20px;}
.dropdown-item {
    padding: .75rem 1.5rem;
}


.appHeader1{
    font-family: 'Abel', sans-serif; background-image: linear-gradient(#880E4F, #880E4F);
 margin: 0;
  padding: 0;
  
  width: 100%;
  height: 8vh;
 
  background: #880E4F;
  
}

.card {border-radius: 7px 7px 7px 7px;
border-size: 2 px;
border-color: white;
transition: 0.5s;
}

.form-control{ border-radius: 9px 9px 9px 9px;
max-width: 450px;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
 border: 2px solid white;
	padding: 20px;

	box-shadow: inset 0px 0px 5px #ff3300;
	transition: 0.5s;
	background-color: #FFEBEE;
}

.title{
    
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    color: white;
    
   transition: 0.5s;
}

.btn { background-image: linear-gradient(red, #9C27B0);
    border-radius: 30px 30px 30px 30px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    
}
.accordion{
   
    color: purple;
    transition: 0.5s;
    
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
    

.accordion-button{display: flex;
justify-content: center;
    
    background-image: linear-gradient(red, #9C27B0);
    border-radius: 3px 3px 3px 3px;
    border: 2px solid white;
    color: white;
    transition: 0.5s;
    height:30px;
    width: 300px;
    font-size:15px;
    padding:0px;
    
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
border: 2px solid white;
}

.text-center{
    font-size: 14px;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    color:red;
}



svg {
  width: 20px;
  height: 20px;
  margin-right: 7px;
}

button, .button {
  
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 30px;
  padding-right: 30px;
}


.share-dialog {
  display: none;
  width: 95%;
  max-width: 500px;
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  z-index: -1;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}




.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.close-button svg {
  margin-right: 0;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}



.body{
    background-image: linear-gradient(white, lightpink);
}
</style>
</head>

<body class="body">
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
?>
<!-- Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="appHeader1">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Promotion</div>
  </div>
  
  <div class="right"> 
  <div class="dropdown">
  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px;">
    <i class="icon ion-md-list"></i></a>
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="promotionrecord.php">Promotion Record</a>
    <a class="dropdown-item" href="bonusrecord.php">Bonus Record</a>
    <a class="dropdown-item" href="promotionApplyrecord.php">Apply Record</a>
  </div>
</div>
  </div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div id="appCapsule" class="pb-2">
  <div class="appContent1 pb-5">
   
 
  <h3 class="text-center m-2">Bonus: <span>₹ <span id="bms"><?php echo (bonus($con,'amount',$userid));?></span></span></h3>
  <div class="text-center mb-2">
  <a data-toggle="modal" href="#bonus" data-backdrop="static" data-keyboard="false" class="btn btn-primary" style="width:160px; height:36px;">Apply to Balance</a>
  </div>
     
    
    
    
    
    
    
    
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header d-flex justify-content-center" id="headingOne" >
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        LEVEL 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div class="row">
        <div class="col-6">
        <div class="mb-3">
                <div class="text-center">
                    <h4 class="text-center"> Total People </h4>
                    <h3 class="text-center">  
                     <?php
	  @$userid=$_SESSION['frontuserid'];
      $user=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
	  $userRows=mysqli_num_rows($user);
	  $userResult=mysqli_fetch_array($user);
	  $owncode=$userResult['owncode'];
	  $userlevel1=mysqli_query($con,"select * from `tbl_user` where `code`='".$owncode."' order by id asc");
	  $userlevel1Rows=mysqli_num_rows($userlevel1);
	  
	  echo $userlevel1Rows;
	  ?>
</h3>
                </div>
            </div>
        </div> 
        <div class="col-6">
        <div class="mb-3">
                <div class="text-center">
                    <h4 class="text-center">Contribution</h4>
                    <h3 class="text-center">₹ <?php echo (bonus($con,'level1',$userid));?></h3>
                </div>
            </div>
        </div>   
        </div>
          
          
               </div>
    </div>
  </div>
 
  <div class="accordion-item">
    <h2 class="accordion-header d-flex justify-content-center" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   LEVEL 2
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
        <div class="col-6">
        <div class="mb-3">
                <div class="text-center">
                    <h4 class="text-center">Total People</h4>
                    <h3  class="text-center">  
                   <?php
 $level1peoplecount=mysqli_query($con,"select * from `tbl_bonussummery` where `level1id`='".$userid."'");
 $level1numrows=mysqli_num_rows($level1peoplecount);
 echo $level1numrows;
?>
</h3>
                </div>
            </div>
        </div> 
        <div class="col-6">
        <div class="mb-3">
                <div class="text-center">
                    <h4 class="text-center">Contribution </h4>
                    <h3 class="text-center">₹ <?php echo (bonus($con,'level2',$userid));?></h3>
                </div>
            </div>
        </div>   
        </div>
        </div>

        </div>
      
      
       
    
    
    
    
    
    
    
      <div class="mt-3 border-bottom d-flex justify-content-center">
<p><i class="text-center"> http://axisclubs.com/register.php?code=<?php echo user($con,'owncode',$userid);?></i></p>
</div>
    
    
    <div class="d-flex justify-content-center">
    
    <div class="share-dialog">
  <header>
    <h3 class="dialog-title">Share</h3>
    <button class="close-button"><svg><use href="#close"></use></svg></button>
  </header>
  
</div>

<button class="share-button" type="button" title="Share this article">
  <svg>
    <use href="#share-icon"></use>
  </svg>
  <span>Share</span>
</button>

<svg class="hidden">
  <defs>
    <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></symbol>
    
    <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></symbol>
  </defs>
</svg>
</div>
    
    
    
    <div class="mt-1">
      <div class="mt-3 border-bottom">
<p class="text-center">My Promotion Code</p>
<p class="text-center"><strong><?php echo user($con,'owncode',$userid);?></strong></p>
<br>




<div class="mt-3">
<label>Note</label>
<p style="font-size:8px">鉴于人类社会个成员侪有个固有尊严脱仔平等个脱仔勿移个权利承暴匮乏个世界个来临，已被宣布为普通人民个着着高愿望， 鉴于为使人类勿至于迫勿得已铤而走险暴政脱仔压迫进行反叛，有必要使人权受法治个保护， 鉴于有必要促进各国间友好关系个发展， 鉴于各联合国国家个人民已拉联合国宪章中重申伊拉对基本人权、人格尊严和价值以及男女平等权利个信念，并决心促成较大自由中个社会进步脱仔生活水平个改善， 鉴于各会员国业已誓愿同联合国合作以促进对人权脱仔基本自由个普遍尊重脱仔遵行， 鉴于对掰眼权利脱仔自由个普遍了解对于掰个誓愿个充分实现有蛮大个重要性，</p>
</div
      </div>
  </div>
    
    <br>
    
    <script >
        
        const shareButton = document.querySelector('.share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
  shareDialog.classList.add('is-open');
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});

shareButton.addEventListener('click', event => {
  if (navigator.share) {
    navigator.share({
      title: 'WebShare',
      url: 'http://axisclubs.com/register.php?code=<?php echo user($con,'owncode',$userid);?>'
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
  } else {
    // fallback
  }
});
    </script>
       
    
    
    
    
    
    
    
    
    

  
</div>
</div></div></div></div></div></div></div></div></div></div></div></div></div>
      
<div class="mt-3">
<p style="font-size:8px">鉴于人类社会个成员侪有个固有尊严脱仔平等个脱仔勿移个权利承认，是世界自由 于人类社会个成员侪有个固有尊严脱仔平等个脱仔勿移个权利承认，是世界自由、正义脱仔和 于人类社会个成员侪有个固有尊严脱仔平等个脱仔勿移个权利承认，是世界自由、正义脱仔和、正义脱仔和平个基础， 鉴于人权个无视脱仔侮蔑已发展为野蛮暴行，掰眼暴行玷污了人类个良心，而一个人人侪有言论脱仔信仰自由并勿有恐惧脱匮乏个世界个来临，已被宣布为普通人民个着着高愿望， 鉴于为使人类勿至于迫勿得已铤而走险暴政脱仔压迫进行反叛，有必要使人权受法治个保护， 鉴于有必要促进各国间友好关系个发展， 鉴于各联合国国家个人民已拉联合国宪章中重申伊拉对基本人权、人格尊严和价值以及男女平等权利个信念，并决心促成较大自由中个社会进步脱仔生活水平个改善， 鉴于各会员国业已誓愿同联合国合作以促进对人权脱仔基本自由个普遍尊重脱仔遵行， 鉴于对掰眼权利脱仔自由个普遍了解对于掰个誓愿个充分实现有蛮大个重要性，</p>
</div
      </div>
  </div>
</div>


        </div>
      </div>
<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="bonus" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header paymentheader" id="paymenttitle"> 
      <h4 class="modal-title text-dark">Apply to Balance</h4>
       </div>
 <form action="#" method="post" id="bonusForm" autocomplete="off">
      <div class="modal-body mt-1" id="loadform">
      <div class="row">
                    <div class="col-12">
<div class="inner-addon left-addon mt-3">
      <i class="icon"><i class="fa fa-rupee"></i></i>
        <input type="number" id="bonusammount" name="bonusammount" class="form-control" placeholder="Bonus" onKeyPress="return isNumber(event)" >
      </div>                   
<input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid;?>">
<input type="hidden" name="action" id="action" class="form-control" value="bonus">
      
                    </div>
                </div>
      </div>
      <input type="hidden" name="tab" id="tab" value="parity">
      <div class="modal-footer"> 
   <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
<button type="submit" class="pull-left btn btn-sm btn-white text-info">CONFIRM</button> 
      </div>
      </form>
    </div>
  </div>
</div>

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
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/bonus.js"></script>

</body>
</html>