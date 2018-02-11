<?php 
error_reporting(0);
$bottomValue = 60*8;
$upperValue = 60*20;;
$currentValue = date("G") *60 + date("i");

if (($currentValue >= $bottomValue) && ($currentValue <= $upperValue)){
	
	header("Location:admin_home.php"); 
}
else
{
	echo("<center>Access Denied. You currently do not have access to this page right now.</center>");
	header('Refresh: 2; URL = main_login.php');

}
?>	