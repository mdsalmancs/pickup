<?php
    
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>
    
    $(document).ready(function(){
        
        $.ajax({
            
            url: "../service/service_get_product.php",
            dataType: "text",
            success: function(Result)
            {
                if(Result != "")
                {
                    var product = Result.split(",");
                    
                    for(var i = 0; i < product.length - 1 ; i++)
                    {
                        show(product[i]);
                    }
                }
                
            }
        })
        
        $('#search_bar').on('keyup',function(){
            
            $.ajax({
                
                url: "../service/service_search.php",
                method: 'post',
                dataType: 'text',
                data: $('#my_form').serialize(),
                success: function(Result)
                {
                    console.log(Result);
                    if(Result!="")
                        {
                            var product = Result.split(",");
                            console.log(Result);
                            for(var i = 0; i < product.length - 1 ; i++)
                            {
                                console.log(product[i]);
                                search_show(product[i]);
                            }
                        }
                    
                    else
                        {
                            no_search_result();
                        }
                        
                }
            })
        })
    })
        function show(Result)
        {   
            document.getElementById("pro").style.display = "block";
            document.getElementById("ser").style.display = "none";
            var path = "../~SERVER/"+Result;
             $.ajax({
                url: path,
                success: function(data){
                    $(data).find('a').attr("href", function(i,val){
                        if(val.match(/\.(jpe?g|png)$/)){
                            $('#pro').append("<img src='"+path+"/"+ val +"' width='200px' height='200px'><a href='view_product_on_click.php?p_id="+Result+"'>SHOW</a>");
                        }
                    })
                }
            })
        }
    
        function search_show(Result)
        {
            document.getElementById("pro").style.display = "none";
            document.getElementById("ser").style.display = "block";
           var path = "../~SERVER/"+Result;
             $.ajax({
                url: path,
                success: function(data){
                    $(data).find('a').attr("href", function(i,val){
                        if(val.match(/\.(jpe?g|png)$/)){
                            $('#ser').append("<img src='"+path+"/"+ val +"' width='200px' height='200px'><a href='#'>SHOW</a>");
                            console.log(path+"/"+ val);
                        }
                    })
                }
            }) 
        }
        
        function no_search_result()
        {
            document.getElementById("pro").style.display = "block";
            document.getElementById("ser").style.display = "none";
            document.getElementById("ser").innerHTML = "";
        }

</script>
<html>
	<table align = "center-right" border = "2">
		<thead>
		<title>PickUp.com</title>
			<tr>
				<td colspan = "10" size="600" align = "center-right"><img src="1.png" /></td>
			</tr>
		<thead>
		
		<tbody>
			<tr>
				<td>
                    <form method = "post" id = "my_form">
                        
                        <select name = "cat">
                            <option value = ''>Select</option>
                            <option value = 'Mobile'>Mobile</option>
                            <option value = 'Bag'>Bag</option>
                        </select>

				<td colspan = "4">
					Search <input type="text" name = "search_bar" id = "search_bar"/>
				    <input type = "button" value = "search">
                    </form>
				</td>
				<td colspan ="4">
				<nav >
                <?php
                  
                    if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null && $_SESSION['type']=="buyer")
                    {
                        echo "<a href='../service/service_logout.php'>Log out</a> or";
					    echo "<a href='view_buyer_profile.php'>View Profile</a>";
                    }
                    
                    else if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null && $_SESSION['type']=="seller")
                    {
                        echo "<a href='../service/service_logout.php'>Log out</a> or";
					    echo "<a href='view_seller_profile.php'>View Profile</a>";
                    }
                    
                    else{
                        
                        echo "<a href='view_decision_signup.php'>Sign up</a> or";
					    echo "<a href='view_sign_in.php'>Sign in</a>";
                    }
                    
                    
                    
                    
                ?>
				</nav>
				</td>
			</tr>
        </tbody>
    </table>               
					
    <div id = "pro">
                        
    </div>
    <div id = "ser">
                        
    </div>
    

</html>