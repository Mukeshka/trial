<?php 
ob_start();

session_start();

$key="T7rjSW";
$salt="ZLAjj9hU";

$action = 'https://secure.payu.in/_payment';

$html='';

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){

	$hash=hash('sha512', $key.'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['productinfo'].'|'.$_POST['firstname'].'|'.$_POST['email'].'|||||'.$_POST['udf5'].'||||||'.$salt);
		
	$_SESSION['salt'] = $salt; 
	
	$html = '<form action="'.$action.'" id="payment_form_submit" method="post">
			<input type="hidden" id="udf5" name="udf5" value="'.$_POST['udf5'].'" />
			<input type="hidden" id="surl" name="surl" value="'.getCallbackUrl().'" />
			<input type="hidden" id="furl" name="furl" value="'.getCallbackUrl().'" />
			<input type="hidden" id="curl" name="curl" value="'.getCallbackUrl().'" />
			<input type="hidden" id="key" name="key" value="'.$key.'" />
			<input type="hidden" id="txnid" name="txnid" value="'.$_POST['txnid'].'" />
			<input type="number" id="amount" name="amount" value="'.$_POST['amount'].'" />
			<input type="hidden" id="productinfo" name="productinfo" value="'.$_POST['productinfo'].'" />
			<input type="hidden" id="firstname" name="firstname" value="'.$_POST['firstname'].'" />
			<input type="hidden" id="Lastname" name="Lastname" value="'.$_POST['Lastname'].'" />
			<input type="hidden" id="Zipcode" name="Zipcode" value="'.$_POST['Zipcode'].'" />
			<input type="hidden" id="email" name="email" value="'.$_POST['email'].'" />
			<input type="hidden" id="phone" name="phone" value="'.$_POST['phone'].'" />
			<input type="hidden" id="address1" name="address1" value="'.$_POST['address1'].'" />
			<input type="hidden" id="address2" name="address2" value="'.(isset($_POST['address2'])? $_POST['address2'] : '').'" />
			<input type="hidden" id="city" name="city" value="'.$_POST['city'].'" />
			<input type="hidden" id="state" name="state" value="'.$_POST['state'].'" />
			<input type="hidden" id="country" name="country" value="'.$_POST['country'].'" />
			<input type="hidden" id="Pg" name="Pg" value="'.$_POST['Pg'].'" />
			<input type="hidden" id="hash" name="hash" value="'.$hash.'" />
			</form>
			<script type="text/javascript"><!--
				document.getElementById("payment_form_submit").submit();	
			//-->
			</script>';
	
}
 
  
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$uri = str_replace('/index.php','/',$_SERVER['REQUEST_URI']);
	return $protocol . $_SERVER['HTTP_HOST'] . $uri . 'response.php';
}
?>

<!DOCTYPE html >
<html>
<head>
    <?php include'head.php' ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<style type="text/css">

.form-control {
  background-color: #00E5FF;
  border: none;
  color: red;
  padding: 40px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 27px;
}


	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;		
	}	
</style>
<body style="background : #FF8A80
">
    <br>
    <div class="conntainer-fluid col-md-12 d-flex justify-content-center">
	<div class="card col-md-9 shadow">
		<div>
			
		</div>
		<div class="card ">
			<h3 class"text-center" style="text-align: center; font-size: 70px;">PayUBiz </h3>
		</div>		
		  <div class="form-group">

			<form action="" class="form-control"  id="payment_form" method="post">
			
		
			<input type="hidden" class="form-control"  id="udf5" name="udf5" value="PayUBiz_PHP7_Kit" />					
    
		
				<input type="hidden" class="form-control"  id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" />
			
			<div>	<input type="text" class="form-control"  id="amount" name="amount" placeholder="Amount" value="<?php echo number_format($_SESSION['finalamount'],2, '.', '');?>" readonly />
				</div>
				<input type="hidden" class="form-control"  id="productinfo" name="productinfo" placeholder="Product Info" value="P01,P02" />
				<input type="hidden" class="form-control"  id="firstname" name="firstname" placeholder="First Name" value="" />
				<input type="hidden" class="form-control"  id="Lastname" name="Lastname" placeholder="Last Name" value="" />
    
				<input type="hidden" class="form-control"  id="Zipcode" name="Zipcode" placeholder="Zip Code" value="" />
		
    
			<div>
				
				<input type="text" class="form-control"  id="email" name="email" placeholder="Email ID" value="<?php echo $_SESSION['email'];?>" readonly />
				</div>
				<div>
				<input type="text" class="form-control"  id="phone" name="phone" placeholder="Mobile/Cell Number" value="<?php echo $_SESSION['mobile'];?>" readonly />	
				</div>
				<input type="hidden" class="form-control"  id="address1" name="address1" placeholder="Address1" value="" /></span>
							
				<input class="form-control"  type="hidden" id="address2" name="address2" placeholder="Address2" value="" />
				<input class="form-control"  type="hidden" id="city" name="city" placeholder="City" value="" />
				<input type="hidden" class="form-control"  id="state" name="state" placeholder="State" value="" />
				<span><input type="hidden" class="form-control"  id="country" name="country" placeholder="Country" value="" />
				<input type="hidden" class="form-control"  id="Pg" name="Pg" placeholder="PG" value="upi" /></span>
			
    
			<div><input class="form-control bg-dark" tyle="text-align: center; font-size: 70px;" type="button" id="btnsubmit" name="btnsubmit" value="Pay Now" onclick="frmsubmit(); return true;" /></div>
			</form>
		</span>
		
		
		<?php if($html) echo $html; //submit request to PayUBiz  ?>
			</div> 

		
	</div> 
	<script type="text/javascript">		
		<!--
		function frmsubmit()
		{
			document.getElementById("payment_form").submit();	
			return true;
		}
		
	</script>

 
</body>
</html>