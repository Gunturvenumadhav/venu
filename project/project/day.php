<!doctype html>
<?php session_start();
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>day to day report</title>

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
    background-color: #eff0f2;
}
</style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <script>
  $(function() {

	$( "#div1" ).click(function(){
		$(this).datepicker({
		  onSelect: function(date){
		    $('#div1').html(date);
		  }
		});
	});
	
	$( "body" ).click(function(e){
	    if (e.target.id !== 'div1')
		{
		   $('.ui-datepicker').hide();
		}
		
		if (e.target.id === 'div1')		
		{
		   $('.ui-datepicker').show();
		}		
	});	
  });
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
                    <!--<button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>-->
                    <h1 class="navbar-brand" style="text-align:center;color:black">Weather conditions in warehouse</h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li >
                            <a href="day.php">
                                <i class="ti-calendar" id="datepicker"></i>
								<span>Day to Day report</span>
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title">History</h4>
                            </div>
							 
                            <div class="content">
							<form action="day.php" method="POST">
                               <label>Select date</label> <input type="date"  name="da">
								<input type="submit" value="Get data" name='su'>
                            </form>
							</div>
							<div class="content">
							<?php if(isset($_POST['su']))
							            {
											$da=$_POST['da'];
								            if($da!=NULL)
											{
							
                                $con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");
                                  if ($conn->connect_error) {
                                  echo"Connection failed: " . $conn->connect_error;
                                   }
								  $query = "SELECT * FROM weather WHERE Date='$da'";
	                              $result= mysqli_query($conn,$query);
	                              $count=mysqli_num_rows($result);
								  if($count>0)
								  {
									  echo "<table id='t01'>
                                         <tr>
                                         <th>gas</th>
                                
                                 <th>Temperature</th>
								 <th>Humidity</th>
								 <th>Fire</th>
                                 </tr>";
								  while($row=  mysqli_fetch_array($result))
								  {
									  echo"<tr>";
									   if($row['gas']=="safe")
									   {
									   echo "<td style='color:green'>";
									   echo $row['gas'];
									   }
									   else
									   {
									   echo"<td style='color:red'>";
									   echo $row['gas'];
									   }
									   
									   echo "</td><td>";
									   echo $row['temperature'];
									   echo "</td><td>";
						               
                                       									   
									   echo $row['humidity'];
									   echo "</td>";
									   if($row['fire']=="detected")
									   {
									   echo "<td style='color:red'>";
									   echo $row['fire'];
									   }
									   else
									   {
									   echo"<td style='color:green'>";
									   echo $row['fire'];
									   }
									   echo"</td>
									  </tr>";
									 
								  }
								
								  }
								   else
								  {
								  ?>
								 </div>
								  <div class="content" style="color:red;float:center">
								  <?php 
								  $mn1="no data is recorded at partiular date!";
                                  $mn1='"'.$mn1.'"';
								 
									  
								  echo $mn1;
								  
								  }
								}
								else{
									echo "<div class='content' style='color:red'>";
									echo "please select date";
									echo "</div>";
								}
							     }
								 
								 
								?>
								
								</div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
   <?php else:header("Location:index.php");?>

        

    </div>
</div>
<?php endif?>

</body>
</html>


