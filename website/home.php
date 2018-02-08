<html>
<body>
<title>Home Page</title>
<?php
session_start(); 
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$User=$_SESSION['login_user'];

?>

<br>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="profile.php">Profile</a>
</div>



<br>

	<h1><left>Welcome <?php echo $User; ?>!</left></h1>
	<hr>

	<b><center>SELECT MY DATA</center></b>

<?php
include("connect.php");
?>




</body>
</html>

<?php
/*
$iusername = $_SESSION['login_user'];

$query=$con->prepare("SELECT `UID`, `USERNAME`, `PASSWORD`, `NAME`, `ADDRESS`, `CONTACT`, `EMAIL`, `CREDITCARDNO` FROM `user` WHERE USERNAME='$iusername'"); //print out the user information table
$query->execute();
$query->bind_result($UID, $username, $password, $name, $address, $contact, $email, $creditcardno);
$output_pass = "*******"; // Do not show password, can be changed by commenting out this line
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Contact</th>";
echo "<th>Email</th>";
echo "<th>Credit Card No</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$UID."</td>";
	echo "<td>".$username."</td>";
	echo "<td>".$output_pass."</td>";
	echo "<td>".$name."</td>";
	echo "<td>".$address."</td>";
	echo "<td>".$contact."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$creditcardno."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>

	<br><br><br>
	<b><center>UPDATE PARTICULARS</center></b> <!-allow user to update their information->
	<form action="update_data.php" method="post">
	<table align="center" border=0>
	<tr>
	<td>Password:</td> 
	<td><input type="password" name="ipwd" /></td>
	</tr>
	<tr>
	<td>Name:</td> 
	<td><input type="text" name="iname" /></td>
	</tr>
	<tr>
	<td>Address:</td> 
	<td><input type="text" name="iaddress" /></td>
	</tr>
	<tr>
	<td>Contact:</td> 
	<td><input type="text" name="icontact" /></td>
	</tr>
	<tr>
	<td>Email:</td>
	<td><input type="text" name="iemail"></td>
	</tr>
	<tr>
	<td>Credit Card No.:</td> 
	<td><input type="text" name="icreditcardno" /></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td align="right">
	<input type="submit" />
	</td>
	</tr>
	</table>
	</form>

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


	<center><a href = "logout.php" title = "Logout">Logout</a></center> <!-logout to end session->

</body>
</html>

*/