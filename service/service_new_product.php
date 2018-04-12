<?php

    require_once("connection.php");
    require_once("../data/data_new_product.php");
    
    $result = add_product($con);
    
    if($result)
    {
        $count = get_new_id($con);

        echo $count; 
    }

    else
    {
        echo "";
    }
   



?>