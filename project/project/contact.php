<!doctype html>
<?php session_start();?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />-->

	<title>contacts</title>

	<!--<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 {
    width: 100%;    
    background-color: #ffccff;
}
.tableheader { font-size: 20px; }
.tablerow { padding:20px; }
.tblLogin{
	margin-left:150px;
	
	 width: 500px;
   
}
.tr{
	margin:10px;
}
.login-input {
	border: #CCC 1px solid;
    padding: 5px 10px;
	border-radius:4px;
	text-color:green;
	
}
.btnSubmit {
	padding: 5px 10px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;
	
}
</style>

</head>
<body>
<?php if($_SESSION['login']):?>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

   
    	<div class="sidebar-wrapper">
            <div class="logo">
               <img src="img1.jpg" width="200"></img>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
              
                
				<li class="active">
				     <a href="contact.php">
					     <i class="ti-user"></i>
						 <p>Contacts</p>
					  </a>
				</li>
				<li>
				     <a href="setvalue.php">
					     <i class="ti-shine"></i>
						 <p>Set threshold value</p>
					  </a>
				</li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <h1 class="navbar-brand" style="text-align:center;color:black">Weather conditions in warehouse</h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="day.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-calendar"></i>
								<P>Day to Day report</p>
								</a>
                            
                        </li>
						<li>
						   <a href="setting.php">
                              <i class="ti-settings"></i>
							  <p>settings</P>
						   </a>
						</li>
                        
						<li>
                            <a href="logout.php">
								<i class="ti-user"></i>
								<P>logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card" id="card">
                            <div class="header">
                                <h4 class="title">Contacts</h4>
                                   
                            </div>

<form name="frmUser" method="POST" action="cupdate.php">
	<div class="tblLogin">
		
		<!--<div class="tableheader">Change Password</div>-->
		
			
		<div class="tablerow" >
		
		    <label style="margin-right:25px" >Firestation near by warehouse</label>
		    <label class="tr">:</label>
			
			 <input type="tel" name="pass1" class="login-input"pattern="^\d{4}\d{3}\d{3}$" autocomplete="off" placeholder="mobile number"required>
			<br><br>
			<label style="margin-right:40px">Hospital near by warehouse</label>
			 <label class="tr">:</label>
			
			
			<input type="tel" name="pass2" class="login-input" pattern="^\d{4}\d{3}\d{3}$" autocomplete="off" placeholder="mobile number"required onkeyup="checkPass();">
			<br><br>
			<label style="margin-right:5px">Police station near by warehouse</label>
			 <label class="tr">:</label>
			
			<input type="tel" name="pass3" class="login-input" pattern="^\d{4}\d{3}\d{3}$" autocomplete="off" placeholder="mobile number"required onkeyup="checkPass();">
			
			<br> <br>
			<input type="submit" name="save" value="Save"class="btnSubmit" style="margin-left:230px">
			
			
			
		</div>
		
		
		
		
	</div>
</form>							
                                    
					</div>
				</div>
				 <?php else:header("Location:index.php");?>
			</div>
</div>
<?php endif?>
</body>

   

</html>
