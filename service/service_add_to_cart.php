<?php
    
    require_once("connection.php");
    require_once("../data/data_add_to_cart.php");
    
    if(isset($_REQUEST['b_id']) && isset($_REQUEST['p_id']) && isset($_REQUEST['quantity']) && isset($_REQUEST['price']))
    {
        $buyer_id = $_REQUEST['b_id'];
        $product_id = $_REQUEST['p_id'];
        $quantity = $_REQUEST['quantity'];
        $price = $_REQUEST['price'];
        
        $result = add($con,$buyer_id,$product_id,$quantity,$price);
        
        if($result)
        {
            echo "added";
        }
        
        else
        {
            echo "failed";
        }
    }

else
        {
            echo "no data";
        }
    


?>