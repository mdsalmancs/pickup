<?php
	//include 'buyer_profile.php';
	//$id=$_REQUEST['user_id'];
    session_start();
    $id=$_SESSION['id'];
    //$id = "Nahid";
	$conn = mysqli_connect("127.0.0.1","root", "", "pickup");
	if($conn){
		$query="SELECT * FROM buyer_profile WHERE fname='$id'";
		$result = mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
	}
?>

<form method="post">
	ID: <?=$row['fname']?><input type="hidden" name="fname" value="<?=$row['fname']?>"/><br/>
    
	Last Name: <br/><input name="lname" value="<?=$row['lname']?>"/><br/>
    
	Phone: <br/><input name="mob" value="<?=$row['mob']?>"/><br/>
    
	Email: <br/><input name="email" value="<?=$row['email']?>"/><br/>
    
	Address: <br/><input name="address" value="<?=$row['address']?>"/><br/>
    
    Password: <br/><input name="pass" value="<?=$row['pass']?>"/><br/>
    
    Sex: <br/><input name="sex" value="<?=$row['sex']?>"/><br/>
    
	<input type="submit"/>
</form>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST['fname'];
		$lname=$_POST['lname'];
		$phone = $_POST['mob'];
		$email = $_POST['email'];
		$address = $_POST['address'];
        $password = $_POST['pass'];
        $sex = $_POST['sex'];
		
		$conn = mysqli_connect("127.0.0.1","root", "", "pickup");
		
		if($conn){
			$query="UPDATE buyer_profile SET lname= '$lname', mob=$phone, email= '$email', address='$address', pass='$password', sex='$sex' WHERE fname='$id'";
            $query2="UPDATE user SET password='$password' WHERE user_id='$id'";
			//var_dump(mysqli_query($conn,$query));
			$result = mysqli_query($conn,$query);
            //$row=mysqli_fetch_assoc($result);
            //var_dump ($query);
            $result2 = mysqli_query($conn,$query2);
			header("location: buyer_profile.php");
			//echo 'updated';
			
		}
		else{
			echo 'Can not connect!!';
		}
	}
?>