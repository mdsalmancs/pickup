<?php

    require_once("connection.php");
    require_once("../data/data_load_product.php");

    if(isset($_REQUEST['p_id']))
    {
        $result = load_product($con,$_REQUEST['p_id']);
        
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo $row['product_name']."-".$row['catagory']."-".$row['description']."-".$row['price_per_unit'];
            }
        }
        
        else
        {
            echo "";
        }
    }
     


?>