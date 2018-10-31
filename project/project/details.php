
<?php
session_start();
$con = mysqli_connect("localhost","id5177629_venumadhav","madhav","id5177629_project");
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
if(isset($_POST["sub"]))
{
	$_SESSION['cname']=$_POST["fn"]; 
	$_SESSION['name']=$_POST["un"];$_SESSION['pwd']=$_POST["pwd"];
	$_SESSION['mob']=$_POST["mob"];
	$_SESSION['em']=$_POST["mn"];	$em=$_POST["mn"];
     $query = "SELECT * FROM details WHERE email='$em'";
	$result= mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	
  
if ($count == 1)
  {
      header("Location:index.php?login='email already exists'");
  }
  else
  {
	//$sql="INSERT INTO `details`(`company name`, `username`, `email`, `password`, `mobile no`) VALUES ('$fn','$u','$em','$pwd',$mob)";
//include_once("EnggTGR_CURL_LIB.php");
//$mobile=8886826301;
//echo $mobile;
$message=rand(1000, 9999);
$_SESSION['otp']=$message;
$uid='8500870852';//10 digit mobile number

$pwd='8897006043';

$phone=$_POST['mob'];

//$msg='from way 2 sms master ' ;

include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $message);
if (is_array($res))
        header("Location:otp1.php");
    


}
}

if(isset($_POST['submit_otp'])) 
{
	$em=$_POST["email"];
	$query = "SELECT * FROM details WHERE email='$em'";
	$result= mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	
  
 if ($count == 1)
  {
	  $message=rand(1000, 9999);
$_SESSION['otp']=$message;
$uid='8500870852';//10 digit mobile number

$pwd='8897006043';
$row=mysqli_fetch_array($result);
$m=$row['mobile'];
$_SESSION['mobile1']=$m;
$mn=substr($m, -2);
$mn1="xxxxxxxx".$mn;
$mn1='"'.$mn1.'"';
$_SESSION['m']=$mn1;
$_SESSION['em']=$em;
$phone=$m;

//$msg='from way 2 sms master ' ;

include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $message);
if (is_array($res))
        header("Location:otp.php?m=".$_SESSION['m']);
    
 
  }
  
  else
	  header("Location:fp.php?in=Invalid email");
}
if(isset($_POST['dotp']))
{
	 $message=rand(1000, 9999);
$_SESSION['otp']=$message;
$uid='9182554142';//10 digit mobile number
$pwd='123456789';
$phone=$_SESSION['mobile1'];
$mn=substr($phone, -2);
$mn1="xxxxxxxx".$mn;
$mn1='"'.$mn1.'"';
$_SESSION['m']=$mn1;
include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $message);
if (is_array($res))
        header("Location:otp.php?m=".$_SESSION['m']);
    
 
  
}
if(isset($_POST['dotp1']))
{
	 $message=rand(1000, 9999);
$_SESSION['otp']=$message;
$uid='9182554142';//10 digit mobile number
$pwd='123456789';
$phone=$_SESSION['mob'];

include ('way2sms-api.php');

$res= sendWay2SMS ( $uid , $pwd , $phone , $message);
if (is_array($res))
        header("Location:otp1.php");
    
 
  
}
?>
