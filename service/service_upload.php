<?php

    $src = $_FILES['img']['tmp_name'];
    $dest = $_FILES['img']['name'];

    if(isset($_REQUEST['p_id']))
    {
        $id = $_REQUEST['p_id'];
        
        $path = "../~SERVER/".$id;
    
        if(!file_exists($path))
        {
            mkdir($path, 0777, true); 
            if(move_uploaded_file($src, $path."/".$dest)){
                echo "file uploaded";
            } 
        }
        
         else if (move_uploaded_file($src, $path."/".$dest)){
            echo "file uploaded";
        }  
        
        else
        {
            echo "failed";
        }
    }

    else
    {
        echo "failed";
    }
    
?>