<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>

    $(document).ready(function(){
        
        $('#button_buyer').click(function(){
           
            window.location.href = "view_sign_up_buyer.php";
            
        })
        
        $('#button_seller').click(function(){
            
            window.location.href = "view_sign_up_seller.php";
        })
    })

</script>

<html>
<form method = "POST">

	<table align = "center" border = "1">
		<thead>
			<tr>
				<td colspan = "3" align = "center"><b>Sign In</b></td>
			</tr>
		<thead>
		
		<tbody>
			
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "button" size = "400" id="button_buyer"  value="Sign Up as Buyer"/>
				</td>
			</tr>
			
				<td colspan = "2"> 
					<input type = "button" size = "400" id="button_seller"  value="Sign Up as Seller"/>
				</td>
			</tr>
			
			
			
			
        </table>
    </form>

</html>

