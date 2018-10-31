<?php session_start();?>
<html>
<head>
<title>Forgot password</title>
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
.error_message {
	color: #b12d2d;
    background: #ffb5b5;
    border: #c76969 1px solid;
}
.message {
	width: 100%;
    max-width: 300px;
    padding: 10px 30px;
    border-radius: 4px;
    margin-bottom: 5px;    
}
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
</head>
<body>

<form name="frmUser" method="POST" action="otp.php">
	<div class="tblLogin">
		
		<div class="tableheader">Reset Password</div>
		<!--<p style="color:#31ab00;">Check your mobile for the OTP</p>-->
			
		<div class="tablerow">
			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder="Enter Email" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Next" class="btnSubmit"></div>
		<!--<div style="margin:20px"><a href="details.php"  style="text-decoration:none;color:black">Did not received any OTP?</div>
		-->
		
	</div>
</form>
</body></html>