<!DOCTYPE html>
<html>
<head>
	<title>OTP</title>
</head>
<body>

<form action="otp.php" name="OTPcheck" method="post">
<td>Enter OTP: </td>
<td><input type="text" name="otp"></td>	

<td>
<input type="submit" value="submit" name="submit" />
</td>

<form method="POST" action=''>
<input type="submit" name="resendotp"  value="Resend otp">

<br>

<center><a href = "logout.php" title = "Logout">Logout</a></center>

</form>
</form>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

include("connect.php");

$iusername = $_SESSION["login_user"];
$sql ="SELECT role FROM useraccount WHERE email = 'keeruitao@gmail.com'";
$result = $con->query($sql);
while($row=$result->fetch_assoc())
{
	$irole = $row['role'];
}
$_SESSION['user_role'] = $irole;

if (isset($_POST['resendotp'])) 
{ 
   echo "OTP has been resend!";
   //$_SESSION["login_user"]=$iusername;
   include("email_send.php"); 
} 

if($_SESSION['user'] == 1) //check if you are in a session, if not redirect to login page
{
   header("Location:redirect_home.php");
}

$_SESSION['user'] = 0;
$otpsession = $_SESSION['user'];
//echo $otpsession;

$iusername=$_SESSION['login_user'];

echo "<br>";
$otpcheck=$_SESSION['secretpassword'];
echo $otpcheck; //to make life easier if you do not want to check email everytime
echo "<br>";
if (isset($_POST['submit'])) 
{ 
	$inputotp= mysqli_real_escape_string($con, $_POST['otp']);
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

    cleanData($inputotp);
	if($inputotp == $otpcheck)
	{
		$_SESSION['user'] = 1;
		echo "Success";
		header("location:login_success.php");
	}
	else
	{
		echo "OTP incorrect, please try again!";
	}
}
?>
</body>
</html>

