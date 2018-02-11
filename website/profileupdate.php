<?php 
error_reporting(0);
session_start();
require 'connect.php';
include ("cipher.php");

if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole= $_SESSION['user_role'];
if($irole != "manager")
{
    header("location:home.php");
}
$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}

$email = $_SESSION['login_user'];
function cleanData($data)
    {
        //$data=mysqli_real_escape_string($con, $data);
        $data=trim($data);
        $data=strip_tags($data);
        $data=stripslashes($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }


if(isset($_POST['iName']))
{
$iName =  mysqli_real_escape_string($con,$_POST['iName']);
cleanData($iName);
if (!preg_match('/^[a-zA-Z]*$/',$iName)) 
		{
     		 
     		echo "Only letters and white space allowed for name";
    	}
else
	{
		$query = $con->prepare("UPDATE `useraccount` SET `name`= '$iName' WHERE email='$email'");

		$query->execute();
		echo "name changed.";

	}
}

if(isset($_POST['icontact']))
{
	$icontact = $_POST['icontact'];
	if (!preg_match('/^[0-9]+$/', $icontact))
	{
		echo "only numbers accepted!";
	}
	else
	{
	$secret_key = random_str(32);
	$secret_iv = random_str(16);
	// hash
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);

	
	$encrypted_contact = encrypt_decrypt('encrypt', $icontact, $key, $iv);
	$query = $con->prepare("UPDATE `useraccount` SET `contact`= '$encrypted_contact', `secretkey`= '$key', `iv` = '$iv' WHERE email='$email'");
	$query->execute();
	echo "contact added";
	}
}

if(isset($_POST['iAddress1']))
{

$iAddress1 = mysqli_real_escape_string($con,$_POST['iAddress1']);
cleanData($iAddress1);
if(!preg_match('/^[a-z0-9 .\-]+$/i', $iAddress1)) 
	{
		echo "Only letters, numbers and white spaces allowed for address";
	}
else
	{
	$query = $con->prepare("UPDATE `useraccount` SET `address1`= '$iAddress1' WHERE email='$email'");
	$query->execute();
	echo "address added";
	}
}

if(isset($_POST['iAddress2']))
{

$iAddress2 = mysqli_real_escape_string($con, $_POST['iAddress2']);
cleanData($iAddress2);
if(!preg_match('/^[a-z0-9 .\-]+$/i', $iAddress2)) 
	{
		echo "Only letters, numbers and white spaces allowed for address";
	}
else
	{
	$query = $con->prepare("UPDATE `useraccount` SET `address2`= '$iAddress2' WHERE email='$email'");
	$query->execute();
	echo "address added";
	}
}

if(isset($_POST['iCity']))
{

$iCity = mysqli_real_escape_string($con ,$_POST['iCity']);
cleanData($iCity);
if (!preg_match('/^[a-zA-Z]*$/',$iCity)) 
		{
     		 
     		echo "Only letters and white space allowed for city";
    	}
else
	{
		$query = $con->prepare("UPDATE `useraccount` SET `city`= '$iCity' WHERE email='$email'");
		$query->execute();
		echo "City added";
	}
}
if(isset($_POST['iState']))
{
$iState = mysqli_real_escape_string($con, $_POST['iState']);
cleanData($iState);
if (!preg_match('/^[a-zA-Z]*$/',$iState)) 
		{
     		 
     		echo "Only letters and white space allowed for state";
    	}
else
		{
			
			$query = $con->prepare("UPDATE `useraccount` SET `state`= '$iState' WHERE email='$email'");
			$query->execute();
			echo "state added.";
		}

}
if(isset($_POST['iPostalcode']))
{
$iPostalcode =  mysqli_real_escape_string($con ,$_POST['iPostalcode']);
cleanData($iPostalcode);
if (!preg_match('/^[0-9]+$/', $iPostalcode))
{
	echo "Only numbers alowed for postalcode";
}
else
{
$query = $con->prepare("UPDATE `useraccount` SET `postalcode`= '$iPostalcode' WHERE email='$email'");
$query->execute();
echo "postalcode added";
}
}
?>
<br>
<a href="profile.php"> Back </a>




