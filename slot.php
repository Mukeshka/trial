<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include 'head.php';?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>


	<link rel="icon" href="https://n1md7.github.io/slot-game/img/BAR.png">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	
#slot{
	border: solid;
	box-sizing: content-box; 
}

.blink {
  animation: blink 0.4s infinite alternate;
  -webkit-animation: blink 0.4s infinite alternate;
}
@keyframes blink {
  to {
    background: #c3ad00;
  }
}
@-webkit-keyframes blink {
  to {
    background: #c3ad00;
  }
}

body{
  background: black !important;
}

.gold{
  color: gold !important;
}
.green{
  color: green;
}

.v-align{
  vertical-align: inherit !important;
}

div.modal-footer, div.modal-body, div.modal-header{
  background-color: #000000de;
  color: white;
}

.preview{
  position: absolute;
  left: 0;
  right: 0;
  top:0;
  background: black !important;
  margin: auto;
  z-index:999999;
  width:480px;
  text-align: center;
}

.preview img{
  position: absolute;
  left: 0;
  right: 0;
  top:0;
  background: black !important;
  margin: auto;
  z-index:999999999;
}






.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
	font-family: 'Abel', sans-serif;
}
.appContent3 {
    font-family: 'Abel', sans-serif;
	background-color: !important;
	border-color: !important;
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
.reaload {font-family: 'Abel', sans-serif;
	box-shadow:none;
}
.ion-md-refresh {font-family: 'Abel', sans-serif;
	font-size:26px !important;
}
.responsive {font-family: 'Abel', sans-serif;
	height:300px;
	overflow-x: auto;
}
.vcard {font-family: 'Abel', sans-serif;
	box-shadow:none;
}
h5{ color:#888; font-size:20px;font-family: 'Abel', sans-serif; font-weight:normal;}
h5 span{ color:#333; font-size:22px; font-family: 'Abel', sans-serif;}
.divsize4 .btn{padding: 0 10px; width:100px; font-family: 'Abel', sans-serif;}
.left-addon input {font-family: 'Abel', sans-serif;
    padding-left: 20px;
}
.error {font-family: 'Abel', sans-serif;
    top: 45px;
}
.containerrecord{border-bottom: solid 2px #565EFF; font-family: 'Abel', sans-serif;}
.recordlink{font-family: 'Abel', sans-serif;
    font-size: 26px;
    color: #333;
	border-bottom: solid 2px #565EFF ;
}
.recordlink .title{font-size: 14px; font-family: 'Abel', sans-serif;
font-weight: 500;}


.body{font-family: 'Abel', sans-serif;

background-image: linear-gradient(#880E4F, #880E4F);

}

.divsize4





#alert h4{font-size: 1rem; font-family: 'Abel', sans-serif;}
#alert p{font-size: 13px; margin-top:25px; font-family: 'Abel', sans-serif;}
#alert .modal-content{border-radius:3px; font-family: 'Abel', sans-serif;}
#alert .modal-dialog{padding:30px; margin-top:200px; font-family: 'Abel', sans-serif;}
#payment .modal-dialog{padding:10px;margin-top:60px; font-family: 'Abel', sans-serif;}
#loader .modal-dialog{padding:30px; margin-top:200px; font-family: 'Abel', sans-serif;}

</style>
</head>

<body class="body" >
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>
<!-- Page loading -->

<!-- * Page loading --> 

<!-- App Header -->
<div class="vcard">
  <div class="appContent3 text-white">
    <div class="row">
      <div class="col-12">
        <div class="col-12 mb-1" style="font-size:13px;">Balance: ₹ <span id="balance"><?php echo number_format(wallet($con,'amount',$userid), 2); ?></span></div>
        <div class="col-12">
          <div> <a href="recharge.php" class="btn btn-sm btn-outline-warning m-0" style="font-size: 11px;">Recharge</a> <a  data-toggle="modal" href="#rule" data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-outline-warning text-light" style="font-size: 11px;"><i class="icon ion-md-paper"></i>  Rules</a> <a href="javascript:void(0);" onClick="reloadbtn(<?php echo $userid;?>);" class="reaload text-white pull-right mt-1" onclick="getResultbyCategory(parity,parity)"> <i class="icon ion-md-refresh"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div class="mb-5">
  <div class="long mb-3">      
      <!-- listview -->
      <ul class="nav nav-tabs size4" id="myTab3" role="tablist">
        <li class="nav-item"> 
<a class="nav-link active" id="home-tab3" data-toggle="tab" href="#parity" role="tab" onClick="tabname('parity');getResultbyCategory('parity','parity');">Parity</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="profile-tab3" data-toggle="tab" href="#sapre" role="tab" onClick="tabname('sapre');getResultbyCategory('sapre','sapre');">Sapre</a>
         </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#bcone" role="tab" onClick="tabname('bcone');getResultbyCategory('bcone','bcone');">Bcone</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#emerd" role="tab" onClick="tabname('emerd');getResultbyCategory('emerd','emerd');">Emerd</a> 
        </li>
      </ul>
      <!--=====================game area============================-->
      <div class="appContent1 bg-light mt-n1" style="background-image: linear-gradient(lightpink, white);">
      <div class="layout">
        <div class="gameidtimer"> 
      <h5 class="mb-2"><i class="icon ion-md-trophy text-danger"></i> Period</h5>
      <h5>
      <span class="showload">
      <div class="spinnner-border text-danger" role="status">
                    </div></span>
             <span id="gameid" class="none"><?php echo sprintf("%03d",gameid($con));?></span>
             <input type="hidden" id="futureid" name="futureid" value="<?php echo sprintf("%03d",gameid($con));?>">
             </h5>
      </div>
      <div class="gameidtimer text-right"> 
      <h5 class="mb-2 text-dark">Count Down</h5>
       <h5 id="demo"></h5>
      </div>
      </div>
      <div class="layout text-center mt-2">
      <div class="divsize4">
      <button type="button" class="btn btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','Green');">Join Green</button>
      </div>
      <div class="divsize4">
      <button type="button" class="btn btn-sm btn-violet gbutton none" onClick="betbutton('#9c27b0','button','Violet');">Join Violet</button>
     </div>
      <div class="divsize4">
      <button type="button" class="btn btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','Red');">Join Red</button>
     </div>
      </div>
      
      <div cla="container-fluid  ">
        <div class="layout text-center d-flex justify-content-center">
     
      <button type="button" class="btn btn-sm btn-danger  btn-sm gbutton none" onClick="betbutton('#ff2d55','button','0');">0</button>
      
      <button type="button" class="btn btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','1');">1</button>
     
      <button type="button" class="btn btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','2');">2</button>
      
      <button type="button" class="btn btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','3');">3</button>
     
      <button type="button" class="btn btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','4');">4</button>
     
     </div>
     
     <div class="layout text-center d-flex justify-content-center ">
    
      <button type="button" class="btn btn-sm btn-success btn-5 gbutton none" onClick="betbutton('#1DCC70','button','5');">5</button>
      
      <button type="button" class="btn btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','6');">6</button>
      
      <button type="button" class="btn btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','7');">7</button>
     
      <button type="button" class="btn btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','8');">8</button>
     
     
      <button type="button" class="btn btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','9');">9</button>
   
      </div> </div> </div>
      
      
      
      
      
       
      <!--=====================game area end============================-->
      
      <div class="mt-1 pb-5">
      <div class="tab-content" id="myTabContent">
      <!--=========================tab-1========================================-->
        <div class="tab-pane fade active show" id="parity" role="tabpanel"></div>
       <!--=========================tab-1 end========================================-->
       <!--=========================tab-2========================================-->
        <div class="tab-pane fade" id="sapre" role="tabpanel"></div>
        <!--=========================tab-2 end========================================-->
        <!--=========================tab-3========================================-->
        <div class="tab-pane fade" id="bcone" role="tabpanel"></div>
        <!--=========================tab-3 end========================================-->
        <!--=========================tab-4========================================-->
        <div class="tab-pane fade" id="emerd" role="tabpanel"></div>
        <!--=========================tab-4 end========================================-->
      </div>
      </div>
  </div>
</div>
<!-- appCapsule -->
<?php include("include/footer.php");?>
<div id="rule" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header"> </div>
      <div class="modal-body responsive"> <?php echo content($con,"rule");?> </div>
      <div class="modal-footer"> 
      <a type="button" class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a> 
      </div>
    </div>
  </div>
</div>

<div id="payment" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header paymentheader" id="paymenttitle"> 
      <h4 class="modal-title" id="chn"></h4>
       </div>
 <form action="#" method="post" id="bettingForm" autocomplete="off">
      <div class="modal-body mt-1" id="loadform">
      <div class="row">
                    <div class="col-12">
                    <p class="mb-1">Contract Money</p>
                    <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                        <label class="btn btn-secondary active" onClick="contract(10);">
                          <input class="contract" type="radio" name="contract" id="hoursofoperation" value="10" checked >
                          10 </label>
                        <label class="btn btn-secondary" onClick="contract(100);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="100">
                          100 </label>
                          <label class="btn btn-secondary" onClick="contract(1000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="1000">
                          1000 </label>
                          <label class="btn btn-secondary" onClick="contract(10000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="10000" >
                          10000 </label>
                      </div>
                      
                   <input type="hidden" id="contractmoney" name="contractmoney" value="10">   
                      
                    <p class="mb-1">Contract Count</p>
      <div class="def-number-input number-input safari_only">
  <button type="button" onClick="this.parentNode.querySelector('input[type=number]').stepDown(); addvalue();" class="minus"></button>
  <input class="quantity" min="1" name="amount" id="amount" value="1" type="number" onKeyUp="addvalue();">
  <button type="button" onClick="this.parentNode.querySelector('input[type=number]').stepUp(); addvalue();" class="plus"></button>
</div>
<input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid;?>">
      <input type="hidden" name="type" id="type" class="form-control">
      <input type="hidden" name="value" id="value" class="form-control" >
      <input type="hidden" name="counter" id="counter" class="form-control" >
      <input type="hidden" name="inputgameid" id="inputgameid" class="form-control" value="<?php echo sprintf("%03d",gameid($con));?>"> 
      <div class="mt-2">Total contract money is <span id="showamount">10</span></div>
      <input type="hidden" name="finalamount" id="finalamount" value="10">
      <div class="custom-control custom-checkbox mt-2">
    <input type="checkbox" checked class="custom-control-input" id="presalerule" name="presalerule">
  <label class="custom-control-label text-muted" for="presalerule">I agree <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false">PRESALE RULE</a></label>
                        </div>
                    </div>
                    
                </div>
      </div>
      <input type="hidden" name="tab" id="tab" value="parity">
      <div class="modal-footer"> 
   <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
<button type="submit" class="pull-left btn btn-sm btn-white">CONFIRM</button> 
      </div>
      </form>
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
<script src="assets/js/betting.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>

 
 
<script>


</script>





<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>

<div class="container">
  <div class="preview">
    <img src="//oi63.tinypic.com/2u76br5.jpg">
  </div>
	<h2 class="text-center text-light my-3 gold"><i class="fab fa-phoenix-framework gold"></i> Slot Game</h2>
	<div class="row justify-content-center mb-3">
		<div class="col col-auto">
			<canvas id="slot" width="440" height="240"></canvas>
		</div>
	</div>
	<div class="row justify-content-center mb-3">
		<div class="col col-auto">
			<div class="input-group mb-3 w-75 m-auto">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text">Current WIN</span>
				</div>
				<input type="text" class="form-control w-auto" id="cwin" value="0">
			</div>
		</div>
	</div>
	<div class="row justify-content-center mb-3">
		<div class="col col-auto">
			<button class="btn btn-danger px-5" id="spin"><i class="fas fa-sync-alt"></i> SPIN</button>
			<button class="btn btn-secondary px-5" id="auto"><i class="fab fa-android"></i> AUTO (OFF)</button>
		</div>
	</div>
	<div class="row justify-content-center mb-3">
		<div class="col col-auto">
			<div class="input-group">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text">Credits</span>
				</div>
				<input class="form-control" type="number" id="balance" min="1" max="5000000" value="<?php echo number_format(wallet($con,'amount',$userid), 2); ?>" readonly >
				<div class="input-group-append">
			    	<span class="input-group-text"><i class="fas fa-dollar-sign green"></i></span>
				</div>
			</div>
		</div>
		<div class="col col-auto">
			<div class="input-group">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text">BETx</span>
				</div>
				<input class="form-control" type="number" id="bet" min="1" value="1" max="3">
				<div class="input-group-append">
			    	<span class="input-group-text"><i class="fas fa-coins gold"></i></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col col-auto">
			<select id="mode" class="btn btn-default">
				<option value="random">Random</option>
				<option value="fixed">Fixed</option>
			</select>
			<select id="where" class="btn btn-default">
				<option value="top">top</option>
				<option value="middle">middle</option>
				<option value="bottom">bottom</option>
			</select>
			<select id="what" class="btn btn-default">
			</select>
		</div>
	</div>	
	<div class="row justify-content-center my-3">
		<div class="col col-auto">
			<button class="btn btn-warning w-auto" type="button" id="checkout"><i class="fas fa-money-bill-alt"></i> CHECKOUT</button>
			<button class="btn btn-primary w-auto" type="button" data-toggle="modal" data-target="#payTable" ><i class="fas fa-money-bill-alt"></i> Pay Table</button>
		</div>
	</div>
</div>

<!-- Paytable modal -->
<div class="modal fade" id="payTable" tabindex="-1" role="dialog" aria-labelledby="payTableTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payTableTitle">Pay Table</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-dark table-hover table-responsive" style="overflow:hidden">
        	<thead>
        		<tr>
        			<td>Reel1</td>
        			<td>Reel2</td>
        			<td>Reel3</td>
        			<td>TOP</td>
        			<td>MIDDLE</td>
        			<td>BOTTOM</td>
        		</tr>
        	</thead>
        	<tbody>
	        	<tr>
	        		<td><img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40"></td>
	        		<td class="v-align">2000xBET</td>
	        		<td class="v-align">1000xBET</td>
	        		<td class="v-align">4000xBET</td>
	        	</tr>
	        	<tr>
	        		<td><img src="https://n1md7.github.io/slot-game/img/7.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/7.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/7.png" width="40"></td>
	        		<td class="v-align">150xBET</td>
	        		<td class="v-align">150xBET</td>
	        		<td class="v-align">150xBET</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/7.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40">
	        		</td>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/7.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40">
	        		</td>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/7.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/Cherry.png" width="40">
	        		</td>
	        		<td class="v-align">75xBET</td>
	        		<td class="v-align">75xBET</td>
	        		<td class="v-align">75xBET</td>
	        	</tr>
	        	<tr>
	        		<td><img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40"></td>
	        		<td class="v-align">50xBET</td>
	        		<td class="v-align">50xBET</td>
	        		<td class="v-align">50xBET</td>
	        	</tr>
	        	<tr>
	        		<td><img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40"></td>
	        		<td class="v-align">20xBET</td>
	        		<td class="v-align">20xBET</td>
	        		<td class="v-align">20xBET</td>
	        	</tr>
	        	<tr>
	        		<td><img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40"></td>
	        		<td><img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40"></td>
	        		<td class="v-align">10xBET</td>
	        		<td class="v-align">10xBET</td>
	        		<td class="v-align">10xBET</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40">
	        		</td>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40">
	        		</td>
	        		<td>
	        			<img src="https://n1md7.github.io/slot-game/img/BAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/2xBAR.png" width="40">
	        			<img src="https://n1md7.github.io/slot-game/img/3xBAR.png" width="40">
	        		</td>
	        		<td class="v-align">5xBET</td>
	        		<td class="v-align">5xBET</td>
	        		<td class="v-align">5xBET</td>
	        	</tr>
	        	 
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
  </div>
  
  
  
  <script>/**
 * Array prototype
 * Shuffles array in place.
 */
Array.prototype.shuffle = function() {
    for (let i = this.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [this[i], this[j]] = [this[j], this[i]];
    } 
    return this;
};

/**
 * Number prototype
 * Generate random integer
 */
Number.prototype.randTo = function(max) {
	let min = this;
	    min = Math.ceil(min);
	    max = Math.floor(max);
	    
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

/**
* Create sequence generator from to
*/

function* range(start, end) {
    for (let i = start; i <= end; i++) {
        yield i;
    }
}

/**
 * Array prototype Empty
*/
Array.prototype.empty = function(){
    return this.length === 0?!0:!!0;
}

Array.prototype.closest = function(num){
    let currVal = this[0], currIndex = 0;
    this.forEach((val, i) => {
        if(Math.abs(num - val) < Math.abs(num - currVal)){
            currVal = val;
            currIndex = i;
        }
    });

    return {
        val: currVal,
        index: currIndex
    };
};

/*element selector*/
let find = function(e){
    switch(true){
        case typeof e === "string":
            return document.querySelector(e);
        default:
            return e;
    }
};

//get random element
Array.prototype.rnd = function () {
    return this[Math.floor(Math.random() * this.length)];
};

//resource loader.js

const Resources = (function(loader, global){
	if(global.document){
	
		return (...resources) => new loader(resources);
	}
})(function(resources){
	const IMG_ALLOWED_TYPES = ['png', 'jpg', 'jpeg'];
	let loadCallbacks = [], $resources = [], $imgs = [];

	//extension black listing
	resources.forEach(resource => {
		let splited = resource.split('.'),
			extension = splited[splited.length - 1];

			if(IMG_ALLOWED_TYPES.includes(extension)){
				$resources.push(resource);
			}
	});

	this.onLoad = function(fns){
		if(typeof fns === 'function'){
			loadCallbacks.push(fns);
		}

		return this;
	};

	(function loadImage(index = 0){
		if(undefined === $resources[index]){
			//exec callbacks
			loadCallbacks.forEach(f => f.call(this, $imgs, $resources));

			return;
		}
		let img = new Image();
			img.src = $resources[index];
			img.addEventListener('load', function(){
				$imgs.push(img);
				loadImage(++index);
			});
	})(0);

}, this);

//reel.js
const Reel = function(canvas, offsetX = 0){
	
	//generate img objects for a reel
	this.reelMap = conf.imgMap.shuffle()
		.map((text, index) => ({
			offsetY: conf.reel.height * conf.imgStartPts[index],
			key: text 
		})
	);
	this.fnc = null;
	this.spinning = false;
	this.finalAnimation = false;
	this.clickTime = 0;
	this.showedLastAnim = false;
	this.clicked = false;
	this.mode = 'random';
	this.fixedPlace = 'top';
	this.fixedImg = 'BAR';
	this.finalShapes = [];
	//clear whole reel
	const clear = function(){
		canvas.clearRect(
				offsetX, 
				conf.height, 
				conf.reel.width, 
				conf.height
			);
	};

	//draw image to specific point 
	const draw = function(key = 'BAR', offsetY = 0, blur = 0){
		if(conf.img.hasOwnProperty(key)){
			clear();

			canvas.strokeStyle = '#000';
			canvas.filter = `blur(${blur}px)`;
			canvas.lineWidth = 4;         
			canvas.fillRect(offsetX, offsetY, conf.reel.width, conf.reel.height);
			canvas.strokeRect(offsetX, offsetY, conf.reel.width, conf.reel.height);
			canvas.drawImage(conf.img[key], offsetX, offsetY);
			canvas.filter = 'none';
		}
	};

	this.spinAnimation = function(skip){
		if(!this.spinning) return;

		this.reelMap.forEach(img => {

			img.offsetY += conf.pSkip;

			//reset prev and jump very top
			if(img.offsetY >= conf.height){
				img.offsetY = conf.reel.height * -3;
			}

			//draw img object
			draw(img.key, img.offsetY, 4);
		});
	};

	this.generateReelShapesFixed = function(){
		let imgMp = conf.imgMap.filter(x => x !== this.fixedImg);
		let rndImg2 = imgMp.rnd();
			imgMp.splice(imgMp.indexOf(rndImg2), 1);
		let rndImg3 = imgMp.rnd();
		switch(this.fixedPlace){
			case 'top':
				return [
					{
						offsetY: -60,
						key: this.fixedImg,
						stop: 0
					},{
						offsetY: 60,
						key: rndImg2,
						stop: 120
					},{
						offsetY: 180,
						key: rndImg3,
						stop: 240
					}
				];
			case 'middle':
				return [
					{
						offsetY: -120,
						key: rndImg2,
						stop: -60
					},{
						offsetY: 0,
						key: this.fixedImg,
						stop: 60
					},{
						offsetY: 120,
						key: rndImg3,
						stop: 180
					}
				];
			default:
				return [
					{
						offsetY: -180,
						key: rndImg2,
						stop: -120
					},{
						offsetY: -60,
						key: rndImg3,
						stop: 0
					},{
						offsetY: 60,
						key: this.fixedImg,
						stop: 120
					}
				];
		}
	};

	this.generateReelShapesRandom = function(){
		let imgMp = conf.imgMap.map(x=>x);
		let rndImg1 = imgMp.rnd();
			imgMp.splice(imgMp.indexOf(rndImg1), 1);
		let rndImg2 = imgMp.rnd();
			imgMp.splice(imgMp.indexOf(rndImg2), 1);
		let rndImg3 = imgMp.rnd();

		let rnd = [0, 60].rnd();
		return [
					{
						offsetY: -120 + rnd,
						key: rndImg1,
						stop: -60 + rnd
					},{
						offsetY: 0 + rnd,
						key: rndImg2,
						stop: 60 + rnd
					},{
						offsetY: 120 + rnd,
						key: rndImg3,
						stop: 180 + rnd
					}
				];
	};

	this.setFinalShapes = function(){
		switch(this.mode){
			case 'fixed':
				return this.generateReelShapesFixed();
			break;
			default:
				return this.generateReelShapesRandom();
		}
	};

	this.spin2point = function(){
		if(!this.finalAnimation){
			if(typeof this.fnc === 'function'){
				this.fnc();
				this.fnc = null;
			}

			return;
		}

		let stopPt;
		this.finalShapes.forEach(img => {
			if(img.hasOwnProperty('stop')){
				stopPt = img.stop;
			}
			let inx = 6;
			if(img.offsetY + inx === stopPt) {
				this.finalAnimation = false;
			}
			img.offsetY += inx;

			//draw img object
			draw(img.key, img.offsetY);
		});
	};

	this.done = function(fn){
		this.fnc = fn;
	}

};


//slot.js

const Slot = function(canvas){

	this.canvas = canvas;
	let auto = false;
	let reels = [...range(1,3)]
		.map(i => new Reel(canvas, conf.reel.xOffsets[i-1]));

	let delta = 0;
	let currentSpin = [];

	this.checkout = function(){
		if(confirm('Are you sure? We can keep your money better!')){
			conf.player.money = 0;
			conf.balance.value = conf.player.money;
        	conf.win.classList.remove('blink');
        	auto = false;
			alert('Your operation has been made successfully');
		}
	};

	this.setCredits = function(){
		conf.player.money = conf.balance.value;

		return this;
	};

	this.spin = function(){
		conf.win.value = 0;
		conf.sound.spin.play();
		if(conf.player.money - conf.bet.value*1 < 0){
			conf.sound.spin.currentTime = 0;
			conf.sound.spin.pause();
			alert('You dont have enough credits!');
			auto = false;
			
			return;
		}
		conf.player.money -= conf.bet.value*1;
		conf.balance.value = conf.player.money;
		currentSpin = [];
		reels.forEach(reel => {
			reel.clicked = true;
			reel.finalAnimation = false;
			reel.finalShapes = reel.setFinalShapes();
			currentSpin.push(reel.finalShapes);
		});
		conf.spinBtn.setAttribute('disabled', 'disabled');
		conf.what.setAttribute('disabled', 'disabled');
		conf.where.setAttribute('disabled', 'disabled');
		conf.bet.setAttribute('disabled', 'disabled');
		conf.balance.setAttribute('disabled', 'disabled');
		conf.mode.setAttribute('disabled', 'disabled');
		conf.checkout.setAttribute('disabled', 'disabled');
        conf.win.classList.remove('blink');
	};

	this.setMode = function(){
		reels.forEach(reel => {
			reel.mode = conf.mode.value;
			reel.fixedPlace = conf.where.value;
			reel.fixedImg = conf.what.value;
		});
	};

	this.loop = function( now ){
		reels.forEach((reel, i)=> {
			this.drawStopPoints();
			//init spin animation
			reel.spinAnimation();
			reel.spin2point();

			if(reel.clicked){
				reel.clicked = false;
				reel.clickTime = now;
				reel.spinning = true;
			}

			delta = now - reel.clickTime;
			if(delta > conf.reel.animTimes[i] && reel.spinning){
				reel.finalAnimation = true;
				reel.spinning = false;

				if(i === 2){
					conf.spinBtn.removeAttribute('disabled');
					conf.what.removeAttribute('disabled');
					conf.where.removeAttribute('disabled');
					conf.bet.removeAttribute('disabled');
					conf.balance.removeAttribute('disabled');
					conf.mode.removeAttribute('disabled');
					conf.checkout.removeAttribute('disabled');
					reel.done(() =>{
						//reset sound and stop
						conf.sound.spin.currentTime = 0;
						conf.sound.spin.pause();
						let won = check(currentSpin);
						if(auto){
							setTimeout(function(){
								conf.spinBtn.click();
							}, won?conf.autoModeDelay: 300);
						}
					});
				}
			}
		});
	};

	this.start = function(){
		conf.sound.win.volume = 1.0;
		conf.sound.spin.volume = 0.03;
		reels.forEach(reel => {
			reel.clicked = true;
			reel.finalAnimation = false;
			reel.finalShapes = reel.setFinalShapes();
		});
		reels.forEach((reel, i)=> {
			reel.clicked = false;
			reel.finalAnimation = true;
			reel.spinning = false;
		});
		return this;
	};

	this.drawStopPoints = function(){
		this.canvas.strokeStyle  = '#121212';
		[60,120,180].forEach(x => {
			this.canvas.strokeRect(0, x-2, 5, 0);
			this.canvas.strokeRect(conf.width-5, x-2, 5, 0);
		});
	};

	let check = function(reels) {
       	if(reels[0][0].stop !== reels[1][0].stop || reels[1][0].stop !== reels[2][0].stop){
       		//no win
       		return;
       	}

       	let sum = {
       		top: 0,
       		middle: 0,
       		bottom: 0
       	};

       	//coefficient - custom added.
       	let bet = conf.bet.value * 1;

       	let highlightPts = [];
       	//all reels are aligned in one line
       	for(let r = 0; r < reels.length; r ++){
       		let reel1 = reels[0][r],
       			reel2 = reels[1][r],
       			reel3 = reels[2][r];
       		let reelsStr = reel1.key + reel2.key + reel3.key;
       		//top line
       		if(reel1.stop === 0){
       			if(reelsStr.match(/(Cherry){3}/g)) sum.top += bet * 2000;
       			else if(reelsStr.match(/(7){3}/g)) sum.top += bet * 150;
       			else if(reelsStr.match(/(7|Cherry){3}/g)) sum.top += bet * 75;
       			else if(reelsStr.match(/(3xBAR){3}/g)) sum.top += bet * 50;
       			else if(reelsStr.match(/(2xBAR){3}/g)) sum.top += bet * 20;
       			else if(reelsStr.match(/(BAR){3}/g)) sum.top += bet * 10;
   				else if(reelsStr.match(/(BAR|2xBAR|3xBAR){3}/g)) sum.top += bet * 5;
       			if(sum.top !== 0 ){
       				highlightPts.push(0 + conf.reel.height / 2);
       			}

       		}
       		//middle line
       		if(reel1.stop === 60){
       			if(reelsStr.match(/(Cherry){3}/g)) sum.middle += bet * 1000;
       			else if(reelsStr.match(/(7){3}/g)) sum.middle += bet * 150;
       			else if(reelsStr.match(/(7|Cherry){3}/g)) sum.middle += bet * 75;
       			else if(reelsStr.match(/(3xBAR){3}/g)) sum.middle += bet * 50;
       			else if(reelsStr.match(/(2xBAR){3}/g)) sum.middle += bet * 20;
       			else if(reelsStr.match(/(BAR){3}/g)) sum.middle += bet * 10;
   				else if(reelsStr.match(/(BAR|2xBAR|3xBAR){3}/g)) sum.middle += bet * 5;
       			if(sum.middle !== 0 ){
       				highlightPts.push(60 + conf.reel.height / 2);
       			}
       		}
       		//bottom line
       		if(reel1.stop === 120){
       			if(reelsStr.match(/(Cherry){3}/g)) sum.bottom += bet * 4000;
       			else if(reelsStr.match(/(7){3}/g)) sum.bottom += bet * 150;
       			else if(reelsStr.match(/(7|Cherry){3}/g)) sum.bottom += bet * 75;
       			else if(reelsStr.match(/(3xBAR){3}/g)) sum.bottom += bet * 50;
       			else if(reelsStr.match(/(2xBAR){3}/g)) sum.bottom += bet * 20;
       			else if(reelsStr.match(/(BAR){3}/g)) sum.bottom += bet * 10;
   				else if(reelsStr.match(/(BAR|2xBAR|3xBAR){3}/g)) sum.bottom += bet * 5;
       			if(sum.bottom !== 0 ){
       				highlightPts.push(120 + conf.reel.height / 2);
       			}
       		}
       	}

   		//heightlight winner row
        let margin = 10;
        highlightPts.forEach(i => {
            canvas.beginPath();
            canvas.moveTo(margin, i - 2);
            canvas.lineTo(conf.width - margin, i - 2);
            canvas.strokeStyle = "#FF0000";
            canvas.stroke();
        });

        let totalSum = sum.top + sum.middle + sum.bottom;
        conf.player.money += totalSum;
        conf.balance.value = conf.player.money;
        if (totalSum !== 0) {
        	conf.sound.win.play();
            conf.win.classList.add('blink');
            conf.win.value = totalSum;
            console.log(sum)
            return true;
        }
        return false;
    };

	this.autoToggle = function(){
		auto = !auto;
		let mode = auto === true?'ON': 'OFF';
		conf.autoBtn.innerHTML = conf.autoBtn.innerHTML.replace(/ON|OFF/g, mode);

		conf.spinBtn.click();
	};
};




//gamejs
let conf = {
	fps: 60,
	img: [],
	width: 420 + 20,
	height: 240,
	canvas: find('#slot'),
	spinBtn: find('#spin'),
	autoBtn: find('#auto'),
	mode: find('#mode'),
	where: find('#where'),
	what: find('#what'),
	balance: find('#balance'),
	bet: find('#bet'),
	win: find('#cwin'),
	checkout: find('#checkout'),
	reel: {
		width: 140,
		height: 120,
		xOffsets: [0, 140, 280].map(x => x + 10),
		animTimes: [20, 25, 30].map(x => x * 100)
	},
	pSkip: 40,
	imgMap:  ['BAR', '2xBAR', '3xBAR', '7', 'Cherry'],
	imgStartPts: [...range(-2, 2)],
	player: {
		money: 10000
	},
	imgDot: null,
	autoModeDelay: 3000,
	sound: {
		win: new Audio('https://n1md7.github.io/slot-game/sound/win.mp3'),
		spin: new Audio('https://n1md7.github.io/slot-game/sound/spin.mp3')
	}
};
//Resource loader
Resources(
		'https://n1md7.github.io/slot-game/img/BAR.png', 
		'https://n1md7.github.io/slot-game/img/2xBAR.png', 
		'https://n1md7.github.io/slot-game/img/3xBAR.png', 
		'https://n1md7.github.io/slot-game/img/7.png',
		'https://n1md7.github.io/slot-game/img/Cherry.png'
	)
	.onLoad(function(resources, names){
  document.querySelector('.preview').parentNode.
    removeChild(document.querySelector('.preview'));
		//loading done and ready to go
		//save loaded resources to conf.img 
		if(resources instanceof Array){
			conf.imgMap.forEach((i, j) => conf.img[i] = resources[j]);
		}
		//add options to select
		names.forEach(function(name){
			let key = name.replace(new RegExp('^(https://n1md7.github.io/slot-game/img/)|(.png|.jpg|.jpeg)$','ig'), ''),
				option = document.createElement('option');
				option.value = key;
				option.innerText = key;
			conf.what.appendChild(option);
		}); 
		
		//sounds load
		conf.sound.win.load();
		conf.sound.spin.load();
		//instantiation the game
		(function(slot){
			let fps = conf.fps,
				interval = 1000 / fps,
				delta,
				lastpUpdate = 0;
			//bind click events
			conf.spinBtn.onclick = slot.spin;
			conf.checkout.onclick = slot.checkout;
			conf.mode.onchange = slot.setMode;
			conf.where.onchange = slot.setMode;
			conf.what.onchange = slot.setMode;
			conf.balance.onchange = slot.setCredits;
			conf.balance.value = conf.player.money;
			conf.autoBtn.onclick = slot.autoToggle;
			//init game
			slot.start();
			//core function of the game
			(function update(now){
				delta = now - lastpUpdate;
				if(delta > interval){
					lastpUpdate = now - (delta % interval);
					slot.loop(now);
				}
				window.requestAnimationFrame(update);
			})();
		})(new Slot(conf.canvas.getContext('2d')));
	});
	
	
	
	
	$(document).ready(function () {
   
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);

getResultbyCategory('parity','parity');

$('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
});
function start_count_down() { 
$(".showload").hide();
$(".none").show();
var countDownDate = Date.parse(new Date) / 1e3;
  var now = new Date().getTime();
  var distance = 180 - countDownDate % 180;
  //alert(distance);
  var i = distance / 60,
   n = distance % 60,
   o = n / 10,
   s = n % 10;
  var minutes = Math.floor(i);
  var seconds = ('0'+Math.floor(n)).slice(-2);
  document.getElementById("demo").innerHTML = "<span class='timer'>0"+Math.floor(minutes)+"</span>" + "<span>:</span>" +"<span class='timer'>"+seconds+"</span>";
document.getElementById("counter").value = distance;
if(distance==180 || distance==175 || distance==170 || distance==165 || distance==160){
generateGameid();
getResultbyCategory('parity','parity');
getResultbyCategory('sapre','sapre');
getResultbyCategory('bcone','bcone');
getResultbyCategory('emerd','emerd');
}
if(distance<=30)
{
$(".gbutton").prop('disabled', true);
}else{ 
$(".gbutton").prop('disabled', false);
	}
}

function generateGameid()
{
var futureid=$('#futureid').val();
	$.ajax({
    type: "Post",
    data:"futureid=" + futureid + "& type=" + "generate" ,
    url: "periodid-generation.php",
    success: function (html) {
     //alert(html);
	 var arr = html.split('~');
	 //alert(arr[1]);
	 document.getElementById("gameid").innerHTML=arr[0];
	 document.getElementById("inputgameid").value=arr[0];
	 document.getElementById("futureid").value=arr[0];
      return false;
      },
      error: function (e) {}
      });
	}
	
	function betbutton(color,type,name)
{
	$.ajax({
    type: "Post",
    data:"type=" + type+ "& name=" + name ,
    url: "betform.php",
    success: function (html) {
		
	 document.getElementById("loadform").innerHTML=html;
      return false;
      },
      error: function (e) {}
      });

	if(type=='number'){
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Select '+name;

		}else{
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Join '+name;
	}
	$('#payment').modal({backdrop: 'static', keyboard: false})  
     $('#payment').modal('show');
     document.getElementById('type').value = type;
	 document.getElementById('value').value = name;

	}
//=====================amount calculation======================	
function contract(abc){ //alert(abc);
var amount =$("#amount").val();
document.getElementById('contractmoney').value = abc;
var addvalue=abc*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;

};	
function addvalue()
{ 
var amount =$("#amount").val();
var contractmoney =$("#contractmoney").val();
var addvalue=contractmoney*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;
	}

function tabname(tabname){
document.getElementById('tab').value = tabname;	
	}	

//=====================amount calculation======================
//====================== get Result==============================

function getResultbyCategory(category,containerid)
{ 
$.ajax({
    type: "Post",
    data:"category=" + category,
    url: "getResultbyCategory.php",
    success: function (html) {
	 document.getElementById(containerid).innerHTML=html;
	 waitlist('parity',<?php echo $userid;?>,'paritywait');
	 waitlist('sapre',<?php echo $userid;?>,'saprewait');
	 waitlist('bcone',<?php echo $userid;?>,'bconewait');
	 waitlist('emerd',<?php echo $userid;?>,'emerdwait');
	 if(category=='parity'){
	  $('#parityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordparityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='sapre'){
	  $('#sapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordsapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='bcone'){
	  $('#bconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordbconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='emerd'){
	  $('#emerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordemerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
      return false;
      },
      error: function (e) {}
      });
	 
	}

$(document).ready(function () {
	waitlist('parity',<?php echo $userid;?>,'paritywait');
});
  function reloadbtn(id){
    $('#loader').modal({backdrop: 'static', keyboard: false})  
 $('#loader').modal('show');

$.ajax({
    type: "Post",
    data:"userid=" + id,
    url: "getwalletbalance.php",
    success: function (html) {
	 
			document.getElementById('balance').innerHTML =html;
      return false;
      },
      error: function (e) {}
      });
	
	};
	
	</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>