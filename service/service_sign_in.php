<?php
    
    require_once("connection.php");
    require_once("../data/data_sign_in.php");

    if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        
        $user_type = try_sign_in($con, $username, $password);

        if($user_type != "")
        {
            if(!isset($_SESSION))
            {
                session_start();

                $_SESSION['user_id'] = set_id($con,$username,$user_type);
                $_SESSION['type'] = $user_type;
            }
            
            switch($user_type)
            {
                case "buyer": 
                    header("location: ../view/view_home_new.php");
                    break;
                    
                case "seller": 
                    header("location: ../view/view_home_new.php");
                    break;
                        
            }

            
        }
    }

    else 
    {
        echo "Failed";
    }

   

?>