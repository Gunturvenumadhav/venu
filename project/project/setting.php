<!doctype html>
<?php session_start();?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>settings</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}.tableheader { font-size: 20px; }
.btnSubmit {
	padding: 5px 10px;
    margin-left:55px;
    border: #d1e8ff 1px solid;
    color:green;
	border-radius:4px;
}
.change{
	padding: 5px 10px;
    
    border: #d1e8ff 1px solid;
    color: green;
	border-radius:4px;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 {
    width: 100%;    
    background-color: #ffccff;
}

.tablerow { padding:20px; }
.tblLogin{
	margin-left:150px;
	
	 width: 500px;
   
}


.login-input {
	border: #CCC 1px solid;
    padding: 5px 10px;
	border-radius:4px;
	text-color:green;
	
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
<?php if($_SESSION['login']):?>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

   
    	<div class="sidebar-wrapper">
            <div class="logo">
               <img src="img1.jpg" width="220"></img>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
              
                
				<li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
			<div class="card" id="card">
                <div class="row">

                    <div class="col-md-6">
                        
						
                            <div class="header">
							
                                <h4 class="title"><i>Change password</i></h4>
                                    <div class="tblLogin">
		                                <form name="frmUser" method="POST" action="update.php">
		
		                                    <div class="tablerow">
			
			                                 <input type="password" name="pass3" class="login-input" placeholder="Enter old password"required ><br><br>
			                                 <input type="password" name="pass1" class="login-input" placeholder="Enter new password"required id="pass1">
			                                 <br><br>
			                                  <input type="password" name="pass2" class="login-input" placeholder="Renter password"required id="pass2" onkeyup="checkPass();">
			                                 <span id="sp" style="color:red" ><?php if(isset($_GET["m"]))
                                                 {
	                                             	echo $_GET["m"];
                                                 }
                                               ?></span>
			                                 <br><br>
			                                 <input type="submit" name="save1" value="change" class="btnSubmit">
		                                    </div>
										</form>
		
	                                </div>
                            </div>
				    </div>
					<div class="col-md-6">
					    <div class="header">
					         <h4 class="title"><i>Change mobileno</i></h4>
							 <div class="tblLogin">
		                                <form name="frmUser" method="POST" action="update.php">
		
		                                    <div class="tablerow">
			
			                                 <input type="text" name="pass1" class="login-input" placeholder="Enter mobile no"required id="pass1">
			                                
			                                  <!--<input type="password" name="pass2" class="login-input" placeholder="Renter password"required id="pass2" onkeyup="checkPass();">
			                                --> 
			                                
			                                 <input type="submit" name="save2" value="change" class="change">
		                                    </div>
										</form>
										<span style="color:green;"><?php if(isset($_GET["n"]))
                                                 {
	                                             	echo $_GET["n"];
                                                 }
                                               ?></span>
		
	                                </div>
					    </div>
						
		            </div>    
					</div>
				</div>
			</div>
		
				 <?php else:header("Location:index.php");?>
	    </div>
		</div>
    </div>
<?php endif?>
</body>

   

</html>
