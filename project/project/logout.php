<?php 
   session_start();
   session_unset();
   
   $_SESSION['login'] = NULL;
   
   header("Location: index.php");        
?>