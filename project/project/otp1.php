<?php session_start();?>
<html>
<head>
<title>OTP verification</title>
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
</head>
<body>


	<div class="tblLogin">
		<form name="frmUser" method="POST" action="process.php">
		<div class="tableheader">Enter OTP</div>
		<p style="color:#31ab00;">Check your mobile for the OTP</p>
			
		<div class="tablerow">
		    <input type="text" name="admin" placeholder="Enter admin id" class="login-input" required>
		    <br><br>
		    <span><?php if($_GET['m'])
		                {
		                    echo "<style 'color:red'>".$_GET['m'];
		                }
		            ?></span>
			<input type="text" name="otp1" placeholder="One Time Password" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
		</form>
		<div style="margin:20px"><form method="POST" action="details.php"><input type="submit" name="dotp1"  style="background:none;border:none;"value="Did not received any OTP!"></input></div>
		</form></div>
		
		
	</div>

</body></html>