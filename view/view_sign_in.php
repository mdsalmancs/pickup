<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>
   
    function login()
    {
        console.log("IN");
        var formObj = document.getElementsByTagName("form")[0];
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(username == "")
        {
            document.getElementById("username").style.borderColor = "RED";
        }
        
        if(password == "")
        {
             document.getElementById("password").style.borderColor = "RED";
        }
        
        if(username != null && password != null)
        {
            console.log("submitted");
            formObj.action = "../service/service_sign_in.php";
            formObj.submit();
        }
    }
    
    

</script>

<html>
<form method = "POST" id = "sign_in_form">

	<table align = "center" border = "1">
		<thead>
			<tr>
				<td colspan = "3" align = "center"><b>Sign In</b></td>
			</tr>
		<thead>
		
		<tbody>
			<tr>
				
				<td colspan = "2">
					<input type = "text" size="30" id="username" name = "username" placeholder="ENTER USERNAME"/>



				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "password" size = "30" id="password" name = "password" placeholder="ENTER PASSWORD"/>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "button" size = "30" id="login-btn"  value="Sign In" onclick = "login()"/>	
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2">
                    <input type = "checkbox" name = "confirmation" sixe="30" value = "Remember Me"/>Remember Me				
					<input type = "button" size = "30" id="forgotPass-btn"  value="Forgot Password?"/>
				</td>
			</tr>
			
			
        </table>
    </form>

</html>

