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

.num0{
background-image: linear-gradient(180deg, red 50% , 
#6A1B9A 50%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.num5{
background-image: linear-gradient(180deg, green 50%, 
#6A1B9A 50%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.num1{
background-image: linear-gradient(
#4CAF50 , #4CAF50 35%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.num2{
background-image: linear-gradient( #FF1744 , 
#FF1744 35%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.greent{
background-image: linear-gradient( green , green 35%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;
border:2px solid white;
}

.violet{
background-image: linear-gradient( purple , purple 35%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.redt{
background-image: linear-gradient( red , red 35%);
border-radius: 100% 100% 100% 100%;
height: 50px;
width: 50px;
color: white;

border:2px solid white;
}

.th{
    text-align: left;
}
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
      <button type="button" class="btn greent btn-sm btn-success gbutton none" onClick="betbutton('#1DCC70','button','Green');">Join Green</button>
      </div>
      <div class="divsize4">
      <button type="button" class="btn violet btn-sm btn-violet gbutton none" onClick="betbutton('#9c27b0','button','Violet');">Join Violet</button>
     </div>
      <div class="divsize4">
      <button type="button" class="btn redt btn-sm btn-danger gbutton none" onClick="betbutton('#ff2d55','button','Red');">Join Red</button>
     </div>
      </div>
      
      <div cla="container-fluid  ">
        <div class="layout text-center d-flex justify-content-center">
     
      <button type="button" id="num0" class="btn num0 btn-sm   btn-sm gbutton none" onClick="betbutton('#ff2d55','button','0');">0</button>
      
      <button type="button" id="num1" class="btn  num1 btn-sm  gbutton none" onClick="betbutton('#1DCC70','button','1');">1</button>
     
      <button type="button" id="num2" class="btn num2 btn-sm  gbutton none" onClick="betbutton('#ff2d55','button','2');">2</button>
      
      <button type="button" id="num1" class="btn num1 btn-sm  gbutton none" onClick="betbutton('#1DCC70','button','3');">3</button>
     
      <button type="button" id="num2" class="btn num2 btn-sm  gbutton none" onClick="betbutton('#ff2d55','button','4');">4</button>
     
     </div>
     
     <div class="layout text-center d-flex justify-content-center ">
    
      <button type="button" id="num5" class="btn num5 btn-sm  btn-5 gbutton none" onClick="betbutton('#1DCC70','button','5');">5</button>
      
      <button type="button" id="num2" class="btn num2 btn-sm  gbutton none" onClick="betbutton('#ff2d55','button','6');">6</button>
      
      <button type="button" id="num1" class="btn num1 btn-sm  gbutton none" onClick="betbutton('#1DCC70','button','7');">7</button>
     
      <button type="button" id="num2" class="btn btn-sm num2  gbutton none" onClick="betbutton('#ff2d55','button','8');">8</button>
     
     
      <button type="button" id="num1" class="btn num1 btn-sm  gbutton none" onClick="betbutton('#1DCC70','button','9');">9</button>
   
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
	
	}

</script>


</body>
</html>