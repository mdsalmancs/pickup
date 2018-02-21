<html>
	<head>
		<title>Create An Account</title>
		<link href="style_reg_seller.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<body>
		<div id="nav">
			<form method="post">
				<h2>Create An Acount<h2><br>
				<input type = "text" size = "80" name = "cname" placeholder="COMPANY NAME"><br>				
				<input type = "text" size = "11" name = "mob" placeholder="MOBILE NO."><br>
				<input type = "text" size = "30" name = "email" placeholder="ENTER EMAIL"><br>
				<input type = "password" size = "8" name = "pass" placeholder="ENTER PASSWORD"><br>
				<input type = "password" size = "8" name = "con_pass" placeholder="CONFIRM PASSWORD"><br>
				<input type = "radio" name = "sex" value = "Male">Male
				<input type = "radio" name = "sex" value = "Female">Female
				<input type = "radio" name = "sex" value = "Other">Other<br>

				<input type="submit" value="register"name="reg">
			</form>
		</div>
	</body>
</html>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		if(empty($_REQUEST['cname']) || empty($_REQUEST['mob']) || empty($_REQUEST['email']) || empty($_REQUEST['pass']) || empty($_REQUEST['con_pass']) || empty($_REQUEST['sex'])){
			echo "Please enter all values <br/>";
		}
		
		else if($_REQUEST['pass'] != $_REQUEST['con_pass']){
				echo "Please enter same value in password field and confirm password field";
		}
			
		else if(!empty($_REQUEST['cname']) && !empty($_REQUEST['mob']) && !empty($_REQUEST['email']) && !empty($_REQUEST['pass']) == $_REQUEST['con_pass'] && !empty($_REQUEST['sex']))
		{
					$cname = $_REQUEST['cname'];
					$mob = $_REQUEST['mob'];
					$email = $_REQUEST['email'];
					$pass = $_REQUEST['pass'];
					$con_pass = $_REQUEST['con_pass'];
					$sex = $_REQUEST['sex'];

					require("../database/connect.php"); //or die ("connection failed");
	
		
			if($conn){
				$query = "insert into seller_profile(cname, mob, email, pass, sex) values ('$cname' , $mob, '$email', '$pass', '$sex')";
				$query2 = "insert into user(user_id, password) values('$cname', '$pass')";
				$result = mysqli_query($conn,$query) or die("QUERY ERROR: $query");
				$result2 = mysqli_query($conn,$query2) or die("alert");
				if($result){
					header("location: sign_in.php");
					//echo "successfull!!";
				}
				else{
					echo "failed!!";
				}
			}
		}		
	}		
?>

