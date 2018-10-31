<?php
session_start();

$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");
if(isset($_POST['submit_otp']))
{
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
$cn=$_SESSION['cname'];
$un=$_SESSION['name'];
$mb=$_SESSION['mob'];
$em=$_SESSION['em'];
$pwd=$_SESSION['pwd'];
$rno=$_SESSION['otp'];
$urno=$_POST['otp1'];
$ad="food345";
$ad1=$_POST['admin'];
echo $rno;
echo $urno;
if($ad1==$ad)
{
if($rno==$urno)
{
	echo"hello";
$sql="INSERT INTO `details`(`company name`, `username`, `email`, `password`, `mobile`) 
VALUES ('$cn','$un','$em','$pwd','$mb')";
echo $sql;
if (mysqli_query($conn, $sql))
{   
   // echo"<script>alert('your password successfully reseted');</script>";
	$_SESSION['login']=$em;
	header("Location:dashboard.php");
}
else
	echo"Connection failed: " . $conn->connect_error;
}


else
{
	
	header("Location:otp1.php?m=Invalid");
}
}
else
header("Location:otp1.php?m=Invalid admin id");
}
if(isset($_POST['submit_otp1']))
{
	$rno1=$_SESSION['otp'];
	$urno=$_POST['otp1'];
if($rno1==$urno)
{
header("Location:settings.php");
	
}
else
	header("Location:otp.php?login=Invalid otp");
}
?>
