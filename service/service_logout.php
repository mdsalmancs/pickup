<?php
    
    session_start();
    $_SESSION['user_id'] = null;
    $_SESSION['type'] = null;
    $_SESSION = array();
    session_destroy();
	header("location: ../view/view_home_new.php");
?>