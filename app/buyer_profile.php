<?php
	//if($_SERVER['REQUEST_METHOD']=="POST"){
        session_start();
		$id=$_SESSION['id'];
        //var_dump ($id);
		
		$con = mysqli_connect("127.0.0.1", "root", "", "pickup");
		
		if($con){			
			$result=mysqli_query($con, "SELECT * FROM buyer_profile WHERE fname='$id'");
			$row=mysqli_fetch_assoc($result);
			if($row['fname']==NULL){
				echo "wrong buyer ID!!!";
			}
			else{
				//echo "<a href='buyer_profile_update.php?id=$row[fname]'>edit</a> <br/>";
				echo "User ID: $row[fname] <br/> Name: $row[lname] <br/> Phone: $row[mob] <br/> Email: $row[email] <br/> Address: $row[address] <br/> Sex: $row[sex]";
                echo "<br/>";
			}
		}
		else{
			echo "Could not establish connection with remote server";
		}
	//}
?>

<a href="buyer_profile_update.php">UPDATE</a>
<br/>
<a href="logout.php">LOGOUT</a>

<form method="post">
	<!--ID<br/><input name="id"/><br/>
	<input type="submit"/>-->
</form>

