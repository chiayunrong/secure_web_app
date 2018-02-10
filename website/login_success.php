<?php
session_start();
//
if(!isset($_SESSION["login_user"])) //check if you are in a session, if not redirect to login page
{ 
   	header("Location:main_login.php");
}
else
{	
	header("Location:home.php");
	/*include("connect.php");
	$iusername = $_SESSION["login_user"];
	echo $iusername;
	$query=$con->prepare("SELECT role FROM useraccount WHERE email='$iusername'");
	$query->execute();
	$query->bind_result($irole);
	//$irole = $_SESSION['user_role'];
	echo $irole;
	if($irole=='admin')
	{
		header("location:admin.php");
	}
	elseif ($irole=='user') 
	{
		header("Location:home.php"); 
	}
	*/
}
?>
