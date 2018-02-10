<!DOCTYPE html>
<html>
<body>
<title>Register Page</title>
<?php

//error_reporting(0);

include("connect.php");

$error_message = "";
$emailerror = "";
$passerror = "";
$passinputerror = "";
$cpassinputerror = "";
$nameerror = "";
$contacterror = "";



if (isset($_POST['submit'])) 
{
	$ipwd = mysqli_real_escape_string($con, $_POST['ipwd']);
	$icpwd= mysqli_real_escape_string($con, $_POST['icpwd']);
	$iname = mysqli_real_escape_string($con, $_POST['iname']);
	$icontact = mysqli_real_escape_string($con, $_POST['icontact']);
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
	cleanData($icontact);
	cleanData($iemail);
	cleanData($icpwd);

	if(empty($iemail) || empty ($ipwd) || empty($icpwd) || empty($iname) || empty($icontact))
	{
		$error_message="*One or more required fields are blank";
	}
	
	else {		
	
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$iemail))
		{
    		$emailerror= "Email is not valid";
		}

		if($ipwd != $icpwd) 
    	{
    		$passerror= "Passwords are not equal!";
    	}

		if(!preg_match("/^[^\"']*$/", $ipwd))
		{
			$passinputerror= "Password error, please do not use quotations";
		}

		if(!preg_match("/^[^\"']*$/", $icpwd))
		{
			$cpassinputerror= "Password error, please do not use quotations";
		}

    	if (!preg_match("/^[a-zA-Z]*$/",$iname)) 
		{
     		$nameerror = "*Only letters and white space allowed for name"; 
    	}

    	if (preg_match("/\D/",$icontact))
		{
    		$contacterror= "Please insert a 8 digit number";
		}
    			
		else 
		{		
			$sql="SELECT * FROM useraccount WHERE USERNAME='$iemail'";
			$result=mysqli_query($con, $sql);
			$count = mysqli_num_rows($result);
					
			if($count >= 1)
			{
				$usernameexisterror= "Userame already exists";
			}

			else
			{	
				$query1= $con->prepare("INSERT INTO `useraccount` (`USERID`, `EMAIL`,`PASSWORD`, `NAME`, `CONTACT`, `ROLE`) VALUES (NULL, ?,?,?,?,?)");
				$pwd = password_hash($ipwd, PASSWORD_BCRYPT);
				$name = $iname;
				$contact = $icontact;
				$role = "user";
				$email = $iemail;
				$query1->bind_param('sssss', $email, $pwd, $name, $contact, $role); //bind the parameters
		
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
<td><input type="text" id="username" name="iemail" /> * <?php echo $emailerror ?></td>

</tr>
	
<tr>
<td>Password:</td> 
<td><input type="password" name="ipwd" /> * <?php echo $passinputerror?></td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="icpwd" /> * <?php echo $passerror ?><?php echo $cpassinputerror?></td> 
</tr>

<tr>
<td>Name:</td> 
<td><input type="text" name="iname" /> * <?php echo $nameerror ?></td>
</tr>

<tr>
<td>Contact:</td> 
<td><input type="text" name="icontact" /> * <?php echo $contacterror ?></td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left">
<input type="submit" value="submit" name="submit" />
</td>
</tr>
</form>
</table>

<center><p><?php echo $error_message; ?></p></center>
<center><input type="button" value="Back" onclick="window.location.href='main_login.php'" /></center>

</body>
</html>
