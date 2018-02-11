<!DOCTYPE html>
<html>
<body>
<title>Register Page</title>
<?php

//error_reporting(0);

include("connect.php");
include("cipher.php");
include("google_auth/GoogleAuthenticator.php");
include("google_auth/FixedBitNotation.php");

$error_message = "";
$error_input = "";
$usernameexisterror = "";

$secret_key = random_str(32);
$secret_iv = random_str(16);
$g = new \Google\Authenticator\GoogleAuthenticator();
$secret_tok = $g->generateSecret();

// hash
$key = hash('sha256', $secret_key);
$iv = substr(hash('sha256', $secret_iv), 0, 16);

if (isset($_POST['submit'])) 
{
	$ipwd = mysqli_real_escape_string($con, $_POST['ipwd']);
	$icpwd= mysqli_real_escape_string($con, $_POST['icpwd']);
	$iname = mysqli_real_escape_string($con, $_POST['iname']);
	$post_contact = mysqli_real_escape_string($con, $_POST['icontact']);
	$iemail = mysqli_real_escape_string($con, $_POST['iemail']);

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

	cleanData($ipwd);
	cleanData($iname);
	//cleanData($icontact);
	cleanData($iemail);
	cleanData($icpwd);

	if(empty($iemail) || empty ($ipwd) || empty($icpwd) || empty($iname) || empty($post_contact))
	{
		$error_message="*One or more required fields are blank";
	}
	
	else {		
		
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$iemail) || $ipwd != $icpwd || !preg_match("/^[^\"']*$/", $ipwd) || !preg_match("/^[^\"']*$/", $icpwd) || !preg_match("/^[a-zA-Z]*$/",$iname) || preg_match("/\D/",$post_contact))
		{
    		$error_input= "You have entered an invalid input";
		}
    			
		else 
		{	
			$icontact = encrypt_decrypt('encrypt', $post_contact, $key, $iv);
			$sql="SELECT * FROM useraccount WHERE email='$iemail'";
			$result=mysqli_query($con, $sql);
			$count = mysqli_num_rows($result);		
			if($count >= 1)
			{
				$usernameexisterror= "Username already exists";
			}

			else
			{	
				$query1= $con->prepare("INSERT INTO `useraccount` (`USERID`, `EMAIL`,`PASSWORD`, `NAME`, `CONTACT`, `ROLE`, `iv`, `secretkey`, `googletoken`) VALUES (NULL, ?,?,?,?,?,?,?,?)");
				$pwd = password_hash($ipwd, PASSWORD_BCRYPT);
				$name = $iname;
				$contact = $icontact;
				$role = "user";
				$email = $iemail;
				$query1->bind_param('ssssssss', $email, $pwd, $name, $contact, $role, $iv, $key, $secret_tok); //bind the parameters
		
				if ($query1->execute())
					{   //execute query
  						echo "<center>Query executed.</center> <br>";
  						header("location:register_success.php");
					}
				else
					{
  						echo "<center>Error executing query.</center> <br>";
  						//header("location:register_failure.php");
					}
			}
		}
	}
}
$con->close();
?>









<h1><center>Enter your particulars</center></h1> <!-Currently, checking of required field is not done yet->
<p><center>* required field.</center></p>

<form action="register.php" method="post" onsubmit="return checkforblank()" name="registerform">
<table align="center" border=0>
<tr>
<td>Email:</td>
<td><input type="text" id="username" name="iemail" /> * </td>

</tr>
	
<tr>
<td>Password:</td> 
<td><input type="password" name="ipwd" /> * </td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="icpwd" /> * </td> 
</tr>

<tr>
<td>Name:</td> 
<td><input type="text" name="iname" /> * </td>
</tr>

<tr>
<td>Contact:</td> 
<td><input type="text" name="icontact" /> * </td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left">
<input type="submit" value="submit" name="submit" />
</td>
</tr>
</form>
</table>

<center><p><?php echo $error_message; ?><?php echo $error_input; ?><?php echo $usernameexisterror ?></p></center>

<center><input type="button" value="Back" onclick="window.location.href='main_login.php'" /></center>

</body>
</html>
