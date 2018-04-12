<?php
    
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>

    $(document).ready(function(){
            
        var p_id = decodeURIComponent("<?php echo rawurlencode($_REQUEST['p_id']); ?>");
        var b_id = decodeURIComponent("<?php echo rawurlencode($_SESSION['user_id']); ?>");
        var price;
        var p_id;
        
        $.ajax({
            
            url: "../service/service_load_product.php?p_id="+p_id,
            method: "post",
            dataType: "text",
            success: function(Result)
            {
                if(Result!="")
                {
                    var data = Result.split("-");
                
                    document.getElementById("p_title").innerHTML = data[0];
                    document.getElementById("p_catagory").innerHTML = data[1];
                    document.getElementById("p_description").innerHTML = data[2];
                    document.getElementById("p_price").innerHTML = data[3];
                    show_image(p_id);
                    set_price(data[3]);
                }
                
                else{
                    
                    console.log("NO RESULT");
                }
            }
        })
        
        $('#add_btn').click(function(){
            console.log(p_id);
            console.log(b_id);
            console.log(price);
            $.ajax({
                
                url: "../service/service_add_to_cart.php?p_id="+p_id+"&b_id="+b_id+"&price="+price,
                method: "post",
                dataType: "text",
                data: $('#order_form').serialize(),
                success: function(Result)
                {
                    console.log(Result);
                }
                
            })
            
        })
        
        function show_image(Result)
        {
            var path = "../~SERVER/"+Result;
             $.ajax({
                url: path,
                success: function(data){
                    $(data).find('a').attr("href", function(i,val){
                        if(val.match(/\.(jpe?g|png)$/)){
                            $('#p_img').append("<img src='"+path+"/"+ val +"' width='200px' height='200px'>");
                        }
                    })
                }
            })
            
        }
        
        function add_to_cart(p_id)
        {
            console.log("ADDED: "+p_id);
        }
        
        function set_price(value)
        {
            price = value;
        }
            
        function set_p_id(value)
        {
            p_id = value;
        }
        
        
    })

</script>
<html>
	<table align = "center" border = "2">
		<thead>
		<title>PickUp.com</title>
			<tr>
				<td colspan = "10" size="600" align = "center-right"><img src="1.png" /></td>
			</tr>
		<thead>
		
		<tbody>
			<tr>
				<td>Product Title</td>
				<td id = "p_title"></td>
			</tr>
            <tr>
				<td>Product Catagory</td>
				<td id = "p_catagory"></td>
			</tr>
            <tr>
				<td id = "p_img" colspan="2"></td>
			</tr>
            <tr>
                <td>Description</td>
				<td id = "p_description"></td>
			</tr>
            <tr>
                <td>Price Per Unit</td>
				<td id = "p_price"></td>
			</tr>
            <form methd = "post" id = "order_form">
            <tr>
				<td>Quantity</td>
				<td><select name = "quantity">
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                    </select></td>
			</tr>
			<tr>
                <td colspan = "2"><input type = "button" id = "add_btn" value = "ADD TO CART"></td>    
            </tr>
            </form>
        </tbody>
        </table>

</html>