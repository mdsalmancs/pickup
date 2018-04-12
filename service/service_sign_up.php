<?php
    
    require_once("connection.php");
    require_once("../data/data_sign_up.php");

    if($_REQUEST['type'] == "buyer")
    { 
        if(isset($_REQUEST['fname']) && isset($_REQUEST['pass'])) // I have only checked two parameters check others also!!
        {
            $id = uniqid("B-");
            $fname = $_REQUEST['fname'];
            $password = $_REQUEST['pass'];
            $lname = $_REQUEST['lname'];
            $email = $_REQUEST['email'];
            $mob = $_REQUEST['mob'];
            $sex = $_REQUEST['sex'];
            $address = $_REQUEST['address'];
            
            $result = sign_up_as_buyer($con, $id, $fname, $password, $lname, $mob, $email, $address, $sex);
            
            if($result)
            {
                return true;
            }
            
            else
            {
                return false;
            }
        }
    }

    else if($_REQUEST['type'] == "seller")
    {
        if(isset($_REQUEST['cname']) && isset($_REQUEST['pass']))
        {  
            $id = uniqid("S-");
            $c_name = $_REQUEST['cname'];
            $password = $_REQUEST['pass'];
            $mob = $_REQUEST['mob'];
            $email = $_REQUEST['email'];
            
            $result = sign_up_as_seller($con, $id, $c_name, $password, $mob, $email);
            
            if($result)
            {
                echo "done";
                return true;
            }
            
            else
            {
                return false;
            }
            
        }
    }

    else 
    {
        echo "Empty Type";
    }
    
    


?>