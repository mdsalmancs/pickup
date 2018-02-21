<?php
	//include 'buyer_profile.php';
	//$id=$_REQUEST['user_id'];
    //$id = "Mash";
    session_start();
    $id=$_SESSION['id'];
	$conn = mysqli_connect("127.0.0.1","root", "", "pickup");
	if($conn){
		$query="SELECT * FROM seller_profile WHERE cname='$id'";
		$result = mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
	}
?>

<form method="post">
	ID: <?=$row['cname']?><input type="hidden" name="cname" value="<?=$row['cname']?>"/><br/>
    
	Phone: <br/><input name="mob" value="<?=$row['mob']?>"/><br/>
    
	Email: <br/><input name="email" value="<?=$row['email']?>"/><br/>
    
    Password: <br/><input name="pass" value="<?=$row['pass']?>"/><br/>
    
    Sex: <br/><input name="sex" value="<?=$row['sex']?>"/><br/>
    
	<input type="submit"/>
</form>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST['cname'];
		$phone = $_POST['mob'];
		$email = $_POST['email'];
        $password = $_POST['pass'];
        $sex = $_POST['sex'];
		
		$conn = mysqli_connect("127.0.0.1","root", "", "pickup");
		
		if($conn){
			$query="UPDATE seller_profile SET mob=$phone, email= '$email', pass='$password', sex='$sex' WHERE cname='$id'";
            $query2="UPDATE user SET password='$password' WHERE user_id='$id'";
			//var_dump(mysqli_query($conn,$query));
			$result = mysqli_query($conn,$query);
            //$row=mysqli_fetch_assoc($result);
            //var_dump ($query);
            $result2 = mysqli_query($conn,$query2);
			header("location: seller_profile.php");
			//echo 'updated';
			
		}
		else{
			echo 'Can not connect!!';
		}
	}
?>