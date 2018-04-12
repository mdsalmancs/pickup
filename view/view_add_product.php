<script language="JavaScript" type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script>

    $(document).ready(function(){
        
        $('#upload_btn').click(function(){
           
            get_id();
                
        })
        
        function get_id()
        {
            $.ajax({
                
                url: "../service/service_new_product.php",
                dataTpe: "text",
                success: function(Result)
                {
                    upload(Result);
                }
            })
        }
        
        function upload(Result)
        {
            var fileObj = document.getElementsByName("img")[0];
            var file = fileObj.files[0];
            var formdata = new FormData();
            formdata.append("img", file);
            xhttp = new XMLHttpRequest();

            var path = "../service/service_upload.php?p_id="+Result;

            xhttp.open("POST", path, true);

            xhttp.onreadystatechange = function(){
                if(xhttp.readyState==4){
                    document.getElementById("notification").append(xhttp.responseText);  
                }
            };
            xhttp.send(formdata);
            
        }
    })

</script>

<html>
<form method = "POST">

	<table align = "center" border = "1">
		<thead>
			<tr>
				<td colspan = "3" align = "center"><img src="1.png" /></td>
				</tr>
				<tr>
				<td colspan = "3" align = "center"><b>Add New Product</b></td>
			</tr>
		<thead>
		
		<tbody>
			<tr>
				
				<td colspan = "2">
					Category:
        <select name="item">
        <option value="item">bag</option>
        <option value="item">sandle</option>
        <option value="item">perfume</option>
        <option value="item">phone</option>
</select><br>



				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					Ad Title:<input type = "text" size = "100" name = "" placeholder="100 characters left"><br><br>
				</td>
			</tr>
			
			<tr>
				
				<td colspan = "2"> 
					Ad Description:<textarea></textarea><br>
				</td>
			</tr>
			
			<tr>
				<form method = "post" id = "upload_form">
				<td colspan = "2">
                    <input name="img" id = "img" type="file"/>
                    <input type="button" value="Upload" id = "upload_btn"/>
                </td>
                </form>
            
            </tr>
        </table>
    </form>
    <p id = "notification"></p>

</html>

