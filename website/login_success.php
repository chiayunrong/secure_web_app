<?php
session_start();
//
if(!isset($_SESSION["login_user"])) //check if you are in a session, if not redirect to login page
{ 
   	header("Location:main_login.php");
}
else
{	
	//header("Location:home.php");
	include("connect.php");
	$iusername = $_SESSION["login_user"];

	$sql ="SELECT role FROM useraccount WHERE email = '$iusername'";
	$result = $con->query($sql);
	while($row=$result->fetch_assoc())
	{
		$irole = $row['role'];
		//echo $irole;
	}
	$_SESSION['user_role'] = $irole;

	
	echo $irole;
	if($irole=='admin')
	{
		header("location:admin_home.php");
	}
	elseif ($irole=='user') 
	{
		header("Location:home.php"); 
	}
	elseif ($irole=='manager')
	{
		header("location:manager_home.php");
	}
	elseif ($irole=='auditor')
	{
		header("location:audit_home.php");
	}
}
?>
