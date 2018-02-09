<?php
session_start();
require 'connect.php';

if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

$productid = $_GET['del'];
mysqli_query($con, "DELETE FROM product WHERE productid='$productid'");
?>

<meta http-equiv="refresh" content="0;URL=manager_home.php" />
