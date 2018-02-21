<?php
	session_start();
	if(isset($_SESSION['id'])==false){
		header("location: login.php");
	}
	echo "page2";
?>