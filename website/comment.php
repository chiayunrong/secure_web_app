<?php 
error_reporting(0);
require 'connect.php';
session_start();
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}


if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole = $_SESSION['user_role'];
if($irole != "auditor")
{
    header("location:redirect_home.php");
}
$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}


if(isset($_GET['id']))
{
 $Comment = $_POST['iComment'];
 $Id = $_GET['id'];
if(!preg_match('/^[a-z0-9 .\-]+$/i', $Comment)) 
	{
		echo "Only letters, numbers and white spaces allowed";
	}
else
{
  $query = $con->prepare("UPDATE `audit_log` SET `comment`= '$Comment' WHERE id='$Id'");
  $query->execute();
  echo "comment added.";
}

}

?>
<br>
<a href="audit_home.php">Back</a>



