<html>
	<head>
	<!--<title>Create An Account</title>
		<link href="style_reg_buyer.css" rel="stylesheet" type="text/css"/>-->
	</head>
	
	<body>
		<div id="navig">
			<form method="post">
				<h2>FORGOT PASSWORD<h2><br>
				<input type = "text" size = "30" name = "fname" placeholder="ENTER ID">
                    
				<input type = "password" size = "8" name = "pass" placeholder="ENTER PASSWORD"><br>
                    
				<input type = "password" size = "8" name = "con_pass" placeholder="CONFIRM PASSWORD"><br>
                    
				<input type="submit" value="submit"name="forgotpass"><br>
                    
			</form>
		</div>
	</body>
</html>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		if(empty($_REQUEST['fname']) || empty($_REQUEST['pass']) || empty($_REQUEST['con_pass'])){
			echo "Please enter all values!! <br/>";
		}
			
		else if(!empty($_REQUEST['fname']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['con_pass']))
		{
		
            $fname = $_REQUEST['fname'];
            $pass = $_REQUEST['pass'];
            $con_pass = $_REQUEST['con_pass'];
            
            if($pass==$con_pass){
                 require("../database/connect.php"); //or die ("connection failed");
	
                if($conn){
                    $query = "SELECT user_id FROM user WHERE user_id = '$fname'";
                    $result = mysqli_query($conn,$query) or die("QUERY ERROR: $query");
                    $row=mysqli_fetch_assoc($result);
                    
                    if($fname == $row['user_id']){
                        
                        $query1 = "UPDATE seller_profile SET pass='$pass' WHERE cname='$fname'";
                        $query2 = "UPDATE user SET password='$pass' WHERE user_id='$fname'";
                        $result1 = mysqli_query($conn,$query1) or die("QUERY ERROR: $query1");
                        $result2 = mysqli_query($conn,$query2) or die("QUERY ERROR: alert");
                        if($result){
                            header("location: sign_in.php");
                            //echo "successfull!!";
                        }
                        else{
                            echo "failed!!";
                        }
                    }
                    else{
                        echo "Invalid user ID";
                    }
                    
                }
            }
            else{
                echo "Passwords are not same!";
            }

           
		}		
	}		
?>

