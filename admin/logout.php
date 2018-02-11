<?php
   session_start(); 
   if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
   {
   header("Location:main_login.php");
   }
   unset($_SESSION["login_user"]); // the session will be destroyed and cleaned
   session_destroy();
   $_SESSION = array();
   
   echo 'You have cleaned session'; //logout process
   header('Refresh: 2; URL = main_login.php');
?>