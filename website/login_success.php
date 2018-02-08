<?php
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{ 
   header("Location:main_login.php");
}
else
{
	header("Location:home.php"); 
}

?>
