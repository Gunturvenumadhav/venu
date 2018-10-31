<?php

//http://myprojectd4.esy.es/?temp=10&humidity=11&fire=1
$con = mysqli_connect("localhost","u131269312_venu","madhav","u131269312_iot");

// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 if(isset($_GET["temp"])||isset($_GET["humidity"])||isset($_GET["fire"])||isset($_GET["gas"]))
 {
   $temp=$_GET["temp"];
   $hum=$_GET["humidity"];
   $fire=$_GET["fire"];
   //fire
   $f=$fire;
   if($fire==0)
   $fire="detected";
   else {
     $fire="Safe";
   }
   $gas=$_GET["gas"];
   //gas
   $g=$gas;
   if($gas>140&&$gas<200)
   $gas="smoke detected";

   else if($gas>200)
   $gas=" Harmful gas detected";
   else {
     $gas="safe";
   }
   $sql = "INSERT INTO weather (date,temperature,humidity,fire,gas) VALUES (CURRENT_DATE(),'$temp','$hum','$fire','$gas')";

   if ($con->query($sql) === TRUE) {
     echo "New record created successfully";
     //temperature

       include('way2sms-api.php');
       $query1="SELECT * FROM setvalue";
       $result=mysqli_query($con,$query1);
       $row=mysqli_fetch_array($result);

       if($temp>$row['temperature'])
       {
       $msg="temperature rised".$temp;

								  $query = "SELECT * FROM details";
	                 $result= mysqli_query($con,$query);
	                              //$count=mysqli_num_rows($result);

								  while($row=  mysqli_fetch_array($result))
								  {
                    $phone=$row['mobile'];
                  $res = sendWay2SMS('8500870852','8897006043',$phone,$msg);
                  if (is_array($res))
                      echo " hello";
                  else
                      echo "geetha";
								  }
   }

    //
    //$res = sendWay2SMS('8500870852','8897006043','9182554142',$msg);
    if($f==0)
    {
      $msg="fire detected".$f;

                 $query = "SELECT * FROM details";
                  $result= mysqli_query($con,$query);
                               //$count=mysqli_num_rows($result);

                 while($row=  mysqli_fetch_array($result))
                 {
                   $phone=$row['mobile'];
                 $res = sendWay2SMS('9182554142','123456789',$phone,$msg);
                 if (is_array($res))
                     echo " hello";
                 else
                     echo "not working";
                 }
                 $query = "SELECT * FROM contacts";
                  $result= mysqli_query($con,$query);
                               //$count=mysqli_num_rows($result);

                 while($row=  mysqli_fetch_array($result))
                 {
                   $phone=$row['fire'];
                   $ph1=$row['hospital'];
                   $ph2=$row['police'];
                 $res = sendWay2SMS('9000108722','10291ee015',$phone,$msg);
                 $res = sendWay2SMS('9000108722','10291ee015',$ph1,$msg);
                 $res = sendWay2SMS('9000108722','10291ee015',$ph2,$msg);
                 if (is_array($res))
                     echo " hello";
                 else
                     echo "geetha";
                 }

    }
    if($g>400)
    {
      $msg="harmful gas detected".$g;

                 $query = "SELECT * FROM details";
                  $result= mysqli_query($con,$query);
                               //$count=mysqli_num_rows($result);

                 while($row=  mysqli_fetch_array($result))
                 {
                   $phone=$row['mobile'];
                 $res = sendWay2SMS('8500870852','8897006043',$phone,$msg);
                 if (is_array($res))
                     echo " hello";
                 else
                     echo "geetha";
                 }
    }




    }
    else
     {
     echo "Error: " . $sql . "<br>" . $con->error;
   }
 }

$con->close();


?>
