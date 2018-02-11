<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

<?php
session_start(); 
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}
include("connect.php");
$User=$_SESSION['login_user'];
$result=mysqli_query($con, "SELECT * FROM useraccount where email='$User'");
?>

<?php

$iusername = $_SESSION['login_user'];
include("connect.php");
include("cipher.php");
include("regex_check.php");
include("google_auth/GoogleAuthenticator.php");
include("google_auth/FixedBitNotation.php");
$query=$con->prepare("SELECT `email`, `name`, `contact`, `address1`, `address2`, `city`, `state`, `postalcode`, `iv`, `secretkey`, `googletoken` FROM useraccount WHERE email='$iusername'"); //print out the user information table
$query->execute();
$query->bind_result($email, $name, $contact, $address1, $address2, $city, $state, $postalcode, $iv, $key, $googletok);
$output_pass = "*******"; // Do not show password, can be changed by commenting out this line
$icontact = encrypt_decrypt('decrypt', $contact, $key, $iv);
echo $icontact;
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>Name</th>";
echo "<th>Contact</th>";
echo "<th>Address1</th>";
echo "<th>Address2</th>";
echo "<th>City</th>";
echo "<th>State</th>";
echo "<th>Postal Code</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$email."</td>";
	echo "<td>".$name."</td>";
	echo "<td>".encrypt_decrypt('decrypt', $contact, $key, $iv)."</td>";
	echo "<td>".$address1."</td>";
	echo "<td>".$address2."</td>";
	echo "<td>".$city."</td>";
	echo "<td>".$state."</td>";
	echo "<td>".$postalcode."</td>";
	echo "</tr>";	
	
}
echo "</table>";

$error_message="";
$passinputerror="";

if (isset($_POST['submit1'])) 
{
	$opwd = mysqli_real_escape_string($con, $_POST['opwd']);
	$ipwd = mysqli_real_escape_string($con, $_POST['ipwd']);
	$icpwd = mysqli_real_escape_string($con, $_POST['icpwd']);
	$otptoken = mysqli_real_escape_string($con, $_POST['otptoken']);

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

    cleanData($opwd);
    cleanData($ipwd);
    cleanData($icpwd);
    cleanData($otptoken);

    if (empty($opwd) || empty($ipwd) || empty($icpwd || emtpy($otptoken)))
    {
    	$error_message="Please fill up all fields!";
    }

    else
    {

    	if(!preg_match("/^[^\"']*$/", $ipwd) || !preg_match("/^[^\"']*$/", $icpwd) || $ipwd != $icpwd)
		{
			$passinputerror= "Password error";
		}

		else if(!checkNum($otptoken))
		{
			echo "Only Numbers Accepted for OTP";
		}
		else
		{
			$g = new \Google\Authenticator\GoogleAuthenticator();
			$checktoken = $g->getCode($googletok);
			if($checktoken == $otptoken){
				$sql ="SELECT password FROM useraccount WHERE email = '$User'";
				$result = $con->query($sql);
				while($row=$result->fetch_assoc())
				{
					$currentpassword = $row['password'];
				}

	    		if(password_verify($opwd, $currentpassword))
	    		{	
					$pwd = password_hash($ipwd, PASSWORD_BCRYPT);
					$sql="UPDATE useraccount SET password= '$pwd' WHERE email='$User'";
					if ($con->query($sql) === TRUE)
						{   //execute query
	  						echo "<center>Password Updated!</center> <br>";
						}
					else
						{
	  						echo "<center>Error has occured</center> <br>";
						}
	    		}
	    		else
	    		{
	    			$wrongpasserror = "Old password not correct!";
	    		}

			}
			else{
				echo "OTP entered incorrectly";
			}




		}
    }
}
?>
<br>
<b><center>UPDATE PASSWORD</center></b>
	<form action="profile.php" method="post">
	<table align="center" border=0>
	<tr>
	<td>Old Password:</td>
	<td><input type="password" name="opwd" /></td>
	</tr>

	<tr>
	<td>New Password:</td>
	<td><input type="password" name="ipwd" /></td>
	</tr>

	<tr>
	<td>Confirm New Password:</td>
	<td><input type="password" name="icpwd" /></td>
	</tr>

	<tr>
	<td>Google OTP:</td>
	<td><input type="text" name="otptoken" /></td>
	</tr>

	<tr>
	<td>&nbsp;</td>
	<td align="right">
	<input type="submit" name="submit1" value="submit" />
	</td>
	</tr>

	</table>
	</form>


<center><?php echo $passinputerror ?></center>
<center><?php echo $error_message ?></center>




<b><center>UPDATE ACCOUNT DETAILS</center></b> 
<table align='center' border='1'>
<tr>
        <th>Email</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>City</th>
        <th>State</th>
        <th>Postal Code</th>

 </tr>
<?php while($useraccount = mysqli_fetch_object($result)) 
	{?>
		    <tr>
            <td>
            	<?php echo $useraccount->email; ?>
            </td>
            <td> <form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iName" >
                    <input type="submit" value="update" >
 
                </form>      
            </td>
            <td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="icontact" >
                    <input type="submit" value="update" >
 
            </form>
            </td>
            <td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iAddress1"   >
                    <input type="submit" value="update" >
 
            </form>
        	</td>
			<td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iAddress2" >
                    <input type="submit" value="update" >
 
                </form>
            </td>
			<td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iCity" >
                    <input type="submit" value="update" >
 
                </form>
            </td>
			<td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iState"  >
                    <input type="submit" value="update" >
 
                </form>
            </td>
			<td><form action="profileupdate.php?email=<?php echo $useraccount->email;?>" method="POST"> 
                    <input type="text" name="iPostalcode"   >
                    <input type="submit" value="update" >
 
                </form>
            </td>
            
        </tr>

	<?php } ?>
</table>
<br><br><br>

<br>
<center>Set Up Google Auth <br>
<?php
//include("google_auth/GoogleAuthenticator.php");
//include("google_auth/FixedBitNotation.php");

$g = new \Google\Authenticator\GoogleAuthenticator();
//$salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
//$googlesecret = $salt.$iv;
//$secret = 'XVQ2UIGO75XRUKJO';

//$secret = $g->generateSecret();
//echo $g->getCode($secret);
//echo $googletok;
//mysqli_query($con, "UPDATE useraccount SET googletoken = '$secret' WHERE email='$iusername'");
echo '<img src="'.$g->getURL('DokiDoki', 'example.com', $googletok).'" />';
//echo \Google\Authenticator\GoogleQrUrl::generate('chregu', $secret, 'GoogleAuthenticatorExample');
?>
</center>
<b><center>DELETE ACCOUNT</center></b> <!-allow user to delete their account and end the session->
	<form action="delete_data.php" method="post">
	<table align="center" border=0>
	<tr>
	<td>Enter password to delete:</td> 
	<td><input type="password" name="ipwd" /></center></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td align="right">
	<input type="submit" />
	</td>
	</tr>
	</table>
	</form>
	
<br>
<center><a href="redirect_profile.php" title="home">Back to Home</a></center>
<center><a href = "logout.php" title = "Logout">Logout</a></center>

</body>
</html>