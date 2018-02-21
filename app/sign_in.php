<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
        $id=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        
        if($_REQUEST['radio-btn']==NULL){
            echo "Select one radio button!";
        }
              
        else{
            $radioVal = $_REQUEST['radio-btn'];
        
            if($id!=NULL && $password!=NULL){
                require_once("../database/connect.php");
                if($conn){

                    $query="SELECT user_id, password FROM user WHERE user_id = '$id'";
                    $result = mysqli_query($conn,$query) or die("QUERY ERROR");

                    if($result)
                    {
                        $row=mysqli_fetch_assoc($result);										
                        if($id==$row['user_id'] && $password==$row['password']){
                           session_start();
                           $_SESSION['id']=$id;
                            if($radioVal=="BUYER"){
                                header("location: buyer_profile.php");
                            }
                            else if($radioVal=="SELLER"){
                                header("location: seller_profile.php");
                            }

                            //header("location: index/project1.php");

                        }
                        else{
                        //header("location: ../app/sign_in.php");
                        echo "Invalid User Name or Password!!";
                        }
                    }

                }

            }
            else{
                echo "Enter ID and Password both";
            }
        }
    }
?>

<html>
	<head>
		<link href="style_sign_in.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<body>
		<div id="login">
			<form method="POST">
                
				<h2>Sign In</h2>
                
                BUYER:<input type = "radio" size="30" id="buyer" name="radio-btn" value="BUYER"/>
                
                SELLER:<input type = "radio" size="30" id="seller" name="radio-btn" value="SELLER"/>
                
				<input type = "text" size="30" id="username" name="username" placeholder="ENTER USERNAME"/>
                
				<input type = "password" size = "30" id="password" name="password"  placeholder="ENTER PASSWORD"/>
                
				<input type = "submit" size = "30" id="login-btn"  value="Sign In"/>
				
			</form>
			
			<form action = "DecisionForgotPass.php">
				<input type = "submit" size = "30" id="forgotPass-btn" name="fgorgotpasswordbtn"  value="Forgot Password?"/>				
			</form>
			
			<form action = "DecisionReg.php">
				<input type = "submit" size = "30" id="registration-btn" name="registrationbtn" value="Registration"/>
			</form>
		</div>
	</body>
</html>

