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
//$User=$_SESSION['login_user'];


?>

<?php

$iusername = $_SESSION['login_user'];
include("connect.php");
include("cipher.php");
$query=$con->prepare("SELECT `email`, `name`, `contact`, `address1`, `address2`, `city`, `state`, `postalcode`, `iv`, `secretkey` FROM useraccount WHERE email='$iusername'"); //print out the user information table
$query->execute();
$query->bind_result($email, $name, $contact, $address1, $address2, $city, $state, $postalcode, $iv, $key);
$output_pass = "*******"; // Do not show password, can be changed by commenting out this line
$icontact = encrypt_decrypt('decrypt', $contact, $key, $iv);
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
?>

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
<center><a href="home.php" title="home">Back to Home</a></center>
<center><a href = "logout.php" title = "Logout">Logout</a></center>

</body>
</html>