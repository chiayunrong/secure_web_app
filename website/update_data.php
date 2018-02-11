<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{ 
   header("Location:main_login.php");
}
$con = mysqli_connect("localhost","root","","customer info"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error if connection fail
}
?>

<?php

$iusername = $_SESSION['login_user'];
$ipwd = $_POST['ipwd'];
$iname = $_POST['iname'];
$iaddress =$_POST['iaddress'];
$icontact = $_POST['icontact'];
$iemail = $_POST['iemail'];
$icreditcardno = $_POST['icreditcardno'];

$sql ="UPDATE user SET PASSWORD='$ipwd', NAME='$iname', ADDRESS='$iaddress', CONTACT='$icontact', EMAIL='$iemail', CREDITCARDNO='$icreditcardno' WHERE USERNAME='$iusername'"; 

if($con->query($sql) === TRUE) //if query runs, record updated
{
	echo "<center>Record Updated!</center> <br>";
	echo '<p align=center><a href="home.php">Back</a></p>';
}
else
{
	echo "error";
	echo '<p align=center><a href="home.php">Back</a></p>';
}

$con->close();
?>
</body>
</html>	
















