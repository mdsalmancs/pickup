<?php
    
    require_once("connection.php");
    require_once("../data/data_search.php");
    
    $catagory = "";
    if(isset($_REQUEST['cat']))
    {
        $catagory = $_REQUEST['cat'];
        
    }
    
    
    if(isset($_REQUEST['search_bar']) && $_REQUEST['search_bar'] != "")
    {
        $result = search($con, $_REQUEST['search_bar'],$catagory);
        
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $products = $row['product_id'];
                echo "$products,";
            }
            
        }
        
        else
        {
           echo "";
        }
    }
    
    
    


?>