<?php

$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");

if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}

	$em=$_POST["em"]; 
	$pas=$_POST["pw"];
	
	$query = "SELECT * FROM details WHERE email='$em' AND password='$pas'";
	$result= mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	
  
if ($count == 1)
  {
      session_start();
	  $_SESSION['login']=$em;
	  header('Location:dashboard.php');
  }
  else
  {
        header("Location:index.php?login='invalid'");
	}
?>












































