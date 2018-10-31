<html>
<head>
<title>Password verification</title>
<style>
body{
	font-family: calibri;
}
.tblLogin {
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
    max-width: 300px;
	padding:20px 30px 30px;
	text-align:center;
	 position: absolute;

    width: 400px;
    height: 250px;

    /* Center form on page horizontally & vertically */
    top: 40%;
    left: 50%;
    margin-top: -150px;
    margin-left: -150px;
}
.tableheader { font-size: 20px; }
.tablerow { padding:20px; }

.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
	border-radius:4px;
	text-color:green;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;
}
</style>
<script>
function checkPass()
{
    
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('sp');
    
    if(pass1.value != pass2.value){
        
		message.innerHTML = "Passwords Do Not Match!"
		message.style.color="red";
		return false;
        }
		else
		{
			message.innerHTML = "Passwords Matched!"
		message.style.color="green";
		return true;
		}
}  

</script>

</head>
<body>
<form name="frmUser" method="POST" action="update.php">
	<div class="tblLogin">
		
		<div class="tableheader">Change Password</div>
		
			
		<div class="tablerow">
			 <input type="password" name="pass1" class="login-input" placeholder="Enter password"required id="pass1">
			<br><br>
			<input type="password" name="pass2" class="login-input" placeholder="Renter password"required id="pass2" onkeyup="checkPass();">
			<span id="sp" style="color:red"></span>
		</div>
		
		<div class="tableheader"><input type="submit" name="save" value="Save" class="btnSubmit" ></div>
		
		
	</div>
</form>
</body></html>