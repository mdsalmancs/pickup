<?php
    
    require_once("connection.php");
    require_once("../data/data_get_product.php");

    $array = get_product($con);

    $limit = count($array);

    for($i = 0; $i < $limit; $i++)
    {
        echo $array[$i].",";
    }



?>