<html>
	<head>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<body>
		<div id="decisionforgotpass">
            <h2>BUYER/SELLER</h2>

            <form method="POST">
                <input type = "submit" size = "30" id="login-btn" name="buyerbtn"  value="Are you Buyer?"/>		
            </form>

            <form method="POST">	
              <input type = "submit" size = "30" id="login-btn" name="sellerbtn"  value="Are you Seller?"/>
            </form>
            
		</div>
	</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_REQUEST['buyerbtn']){
			header("location: buyerForgotPassword.php");
		}
		else{
			header("location: sellerForgotPassword.php");
		}
		
	}		
?>