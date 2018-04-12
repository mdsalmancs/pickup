<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>
    
    function validate()
    {
        var formObj = document.getElementsByTagName("form")[0];
        
        var fname = document.getElementById("fname").value;
        var password = document.getElementById("pass").value;
        var conf_password = document.getElementById("conf_pass").value;
        
        if(fname == "")
        {
            document.getElementById("fname").style.borderColor = "RED";
        }
        
        if(password != conf_password)
        {
           document.getElementById("pass").style.borderColor = "RED"; 
           document.getElementById("conf_pass").style.borderColor = "RED"; 
        }
        
        if(fname != "" && password == conf_password)
        {
            formObj.action = "../service/service_sign_up.php?type=buyer";
            formObj.submit();
        }
    }


</script>
<html>
<form method = "POST">

	<table align = "center" border = "1">
		<thead>
			<tr>
				<td colspan = "3" align = "center"><b>Create An Account</b></td>
			</tr>
		<thead>
		
		<tbody>
			<tr>
				
				<td colspan = "2">
					<input type = "text" size = "30" name = "fname" id = "fname" placeholder="FIRST NAME">
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "text" size = "30" name = "lname" id = "lname" placeholder="LAST NAME"><br>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "text" size = "30" name = "email" id = "email" placeholder="ENTER EMAIL"><br>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type = "text" size = "30" name = "mob" placeholder="MOBILE NO."><br>
				</td>
			</tr>
            <tr>
				
				<td colspan = "2"> 
					<input type = "text" size = "30" name = "address" placeholder="ADDRESS"><br>
				</td>
			</tr>
			<tr>
				
				<td colspan = "2"> 
					<input type = "password" size = "30" name = "pass" id = "pass" placeholder="ENTER PASSWORD"><br>
				</td>
			</tr>
			<tr>
				
				<td colspan = "2"> 
					<input type = "password" size = "30" name = "conf_pass" id = "conf_pass" placeholder="CONFIRM PASSWORD"><br>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2">
                    <input type = "radio" name = "sex" value = "Male">Male
<input type = "radio" name = "sex" value = "Female">Female
<input type = "radio" name = "sex" value = "Other">Other<br>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					<input type="button" value="register"name="reg" onclick = "validate()">
				</td>
			</tr>
			
        </table>
    </form>

</html>

