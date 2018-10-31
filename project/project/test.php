<?php

                                $servername = "localhost";
                                 $username = "username";
                                 $password = "password";
                                 $conn = new mysqli($servername, "root", "","mydb");
                                  if ($conn->connect_error) {
                                  echo"Connection failed: " . $conn->connect_error;
                                   }
								  $query = "SELECT * FROM weather";
	                              $result= mysqli_query($conn,$query);
	                              //$count=mysqli_num_rows($result);
								  while($row=  mysqli_fetch_array($result))
								  {
                                     if($row['temperature']>20)
									 {
                              include_once("EnggTGR_CURL_LIB.php");
$mobile="9182554142";
$message="temperature rised";
$json = json_decode(URL("https://smsapi.engineeringtgr.com/send/?Mobile=9182554142&Password=123456789&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=geethHoVBFhPT14RGQ70Uw") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
								 }
								  }
									  
								  ?>