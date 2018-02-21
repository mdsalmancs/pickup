<html>
	<head>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<body>
		<div id="login">
		<form method="POST">
		<h2>Sign In</h2>

		<input type = "submit" size = "30" id="login-btn" name="buyerbtn"  value="Sign Up as Buyer"/>		
		</form>
		
		<form method="POST">
		
		<input type = "submit" size = "30" id="login-btn" name="sellerbtn"  value="Sign Up as Seller"/>
		</form>
		</div>
	</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_REQUEST['buyerbtn']){
			header("location: buyer_reg.php");
		}
		else{
			header("location: seller_reg.php");
		}
		
	}		
?>