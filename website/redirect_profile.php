<?php 
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole = $_SESSION['user_role'];
if($irole=="admin")
	{
		header("Refresh: 0; URL = admin_home.php");
	}
elseif ($irole=="user") 
	{
		header("Refresh: 0; URL = home.php"); 
	}
elseif ($irole=="manager")
	{
		header("Refresh: 0; URL = manager_home.php");
	}
elseif ($irole=="auditor")
	{
		header("Refresh: 0; URL = audit_home.php");
	}	
else
{
		echo "error cannot find home page";
}
?>