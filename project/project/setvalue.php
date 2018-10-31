<!doctype html>
<?php session_start();?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>set threshold value</title>

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
              
                
				<li>
				     <a href="contacts.php">
					     <i class="ti-user"></i>
						 <p>Contacts</p>
					  </a>
				</li>
				<li class="active">
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
                                <h4 class="title">Set threshold value</h4>
                                   
                            </div>

<form name="frmUser" method="POST" action="up.php">
	<div class="tblLogin">
		
		<!--<div class="tableheader">Change Password</div>-->

		<div class="tablerow">
		    <i class="ti-shine" style="color:green"></i>
		    <label>Current threshod value is</label>
		    <?php 
				$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");

                if (mysqli_connect_errno())
                {
                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
 $query1="SELECT * FROM setvalue";
       $result=mysqli_query($con,$query1);
       $row=mysqli_fetch_array($result);
       echo "\t";
       echo "<span style='color:green'>".$row['temperature'];
       echo "</span>";
       
       ?>
       <br><br>
       		    <i class="ti-shine" style="color:green"></i>
		    <label>Set threshold value</label></label><input type="text" name="va">
		    <input type="submit" value="set"name="sub">
		</form>
			
			
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
