<?php
session_start();

$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
if(isset($_POST['save']))
{
$pas1=$_POST['pass1'];
$pas2=$_POST['pass2'];
$pas3=$_POST['pass3'];

$em=$_SESSION['em'];

$sql="INSERT INTO `contacts`(`fire`, `police`, `hospital`) 
VALUES ('$pas1','$pas3','$pas2')";
if (mysqli_query($conn, $sql))
{
	
	header("Location:dashboard.php");
}

}
?>
