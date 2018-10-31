<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="style.css">
	  

  
</head>

<body style="background-color:gray">
<?php
if(isset($_GET["login"]))
{
		echo '<script>alert("'.$_GET["login"].'")</script>';
}

?>

  <div class="form" >
      
      <ul class="tab-group">
        <li class="tab active" ><a href="#login">Login</a></li>
        <li class="tab"><a href="#signup">Sign-Up</a></li>
      </ul>
      
      <div class="tab-content">
	          <div id="login">   
          
          <form action="verify.php" 
		  method="POST">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"required autocomplete="off" name="em"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pw"/>
          </div>
          
          <p class="forgot"><a href="fp.php">Forgot Password?</a></p>
          
          <input type="submit" class="button button-block" value="login" name="sub"/>
          
          </form>

        </div>
        <div id="signup">   
          
          <form method="POST" action="details.php" >
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Company Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fn" />
            </div>
        
            <div class="field-wrap">
              <label>
                UserName<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="un"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req" >*</span>
            </label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"required autocomplete="off" name="mn"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd"/>
          </div>
          <div class="field-wrap">
		  <label>
		  Mobile no<span class="req">*</span>
		  </label>
		  <input type="tel" pattern="[0-9]{10}"required autocomplete="off" name="mob" /><
		  </div>
          <input type="submit" class="button button-block" name="sub" value="submit"/>
          
          </form>

        </div>
        

        
      </div>
      
</div> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="index.js"></script>




</body>

</html>
