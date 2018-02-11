<?php
   include("connect.php");
   session_start(); 
   if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
   {
   header("Location:main_login.php");
   }

   $user=$_SESSION['login_user'];
   
   $sql="INSERT INTO `audit_log`(`new_value`, `datetime`, `operation`, `tablename`) VALUES ('$user', CURRENT_TIMESTAMP(), 'has logged out', 'Logout')";
   // log logouts
   mysqli_query($con,$sql);


   unset($_SESSION["login_user"]); // the session will be destroyed and cleaned
   session_destroy();
   $_SESSION = array();
   
   echo 'You have cleaned session'; //logout process
   header('Refresh: 2; URL = main_login.php');
?>