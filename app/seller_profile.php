<?php
	//if($_SERVER['REQUEST_METHOD']=="POST"){
        session_start();
		$id=$_SESSION['id'];
		
		$con = mysqli_connect("127.0.0.1", "root", "", "pickup");
		
		if($con){			
			$result=mysqli_query($con, "SELECT * FROM seller_profile WHERE cname='$id'");
			$row=mysqli_fetch_assoc($result);
			if($row['cname']==NULL){
				echo "wrong seller ID!!!";
			}
			else{			
			echo "User ID: $row[cname] <br/> Phone: $row[mob] <br/> Email: $row[email] <br/> Sex: $row[sex] <br/>";
			}
		}
		else{
			echo "Could not establish connection with remote server";
		}
	//}
?>
<a href="seller_profile_update .php">UPDATE</a>
<br/>
<a href="logout.php">LOGOUT</a>

<form method="post">
	<!--ID<br/><input name="id"/><br/>
	<input type="submit"/>-->
</form>
