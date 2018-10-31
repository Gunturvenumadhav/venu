<?php
session_start();
$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");

// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 if(isset($_POST['sub']))
 {
     $em=$_SESSION['login'];
$pas1=$_POST['va'];
 $sql="SELECT * from setvalue";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$te=$row['temperature'];
		$query="UPDATE `setvalue` SET `temperature`='$pas1' WHERE temperature='$te'";
if (mysqli_query($con, $query))
{   
    //echo"<script>alert('your password successfully reseted');</script>";
	$_SESSION['login']=$em;
	header("Location:dashboard.php");
}
else
echo"error".$con->error;
 }	
 
 ?>
