<?php
session_start();

$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
if(isset($_POST['save']))
{
$pas1=$_POST['pass1'];
$em=$_SESSION['em'];
$query="UPDATE details SET password='$pas1' WHERE email='$em'";
if (mysqli_query($conn, $query)) 
{   
    echo"<script>alert('your password successfully reseted');</script>";
	$_SESSION['login']=$em;
	header("Location:dashboard.php");
}

}
if(isset($_POST['save1']))
{

$pas1=$_POST['pass1'];
$pas2=$_POST['pass3'];
echo $pas2;
echo $pas1;
$em=$_SESSION['login'];
$sql="SELECT password from details WHERE email='$em'";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result))
{
	if($row['password']==$pas2)
	{
		$query="UPDATE details SET password='$pas1' WHERE email='$em'";
if (mysqli_query($conn, $query))
{   
    //echo"<script>alert('your password successfully reseted');</script>";
	$_SESSION['login']=$em;
	header("Location:setting.php?m=Password has been changed");
}
	}
	else
	{
		//echo"<script>alert('old password is incorrect')</script>";
		header("Location:setting.php?m=Old Password is incorrect");
	}
}


}
if(isset($_POST['save2']))
{

$pas1=$_POST['pass1'];
echo $pas1;
$em=$_SESSION['login'];

$query="UPDATE details SET mobile='$pas1' WHERE email='$em'";
if (mysqli_query($conn, $query))
{   
    //echo"<script>alert('your password successfully reseted');</script>";
	$_SESSION['login']=$em;
	header("Location:setting.php?n=mobile no has been changed");
}
	
}



?>
