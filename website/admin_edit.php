<html>
<?php
error_reporting(0);
if (isset($_GET['name']) && !empty($_GET['name'])) {
?> 
	<form method="post" action="admin_home.php">
		<table align="center" border="0">
			<tr>
				<b>
					<center>Update Account Information</center>
				</b>
			<tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" required="required" placeholder="Name" pattern="[a-zA-Z]{1,}" value="<?php echo $_GET['name']; ?>"/></td>
			</tr>
			<tr>
			<tr>
				<td>Address1:</td>
				<td><input type="text" name="address1" required="required" placeholder="Address1"  value="<?php echo $_GET['address1']; ?>"/></td>
			</tr>
			<tr>
				<td>Address2:</td>
				<td><input type="text" name="address2" placeholder="Address2" value="<?php echo $_GET['address2']; ?>"/></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="city" required="required" placeholder="City" pattern="[a-zA-Z]{1,}" value="<?php echo $_GET['city']; ?>"/></td>
			</tr>
			<tr>
				<td>State:</td>
				<td><input type="text" name="state" required="required" placeholder="State" pattern="[a-zA-Z]{1,}" value="<?php echo $_GET['state']; ?>"/></td>
			</tr>
			<td>Postalcode:</td>
			<td><input type="integer" name="postalcode" required="required" placeholder="PostalCode" pattern="[0-9]{1,}" value="<?php echo $_GET['postalcode']; ?>"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td align="right">
					<input type="hidden" name="userid" value="<?php echo $_GET['userid'] ?>" />
					<input type="hidden" name="update"value="yes"/>
					<input type="submit" value="Update Account"/>
				</td>
			</tr>
		</table>
	</form>
	</html>
	<td>Contact:</td>
	<td><input type="text" name="contact" /></td>
	</tr>
	<tr>
		<td>Role:</td>
		<td><input type="text" name="role" /></td>
	</tr>
	<tr>
		<td>Address1:</td>
		<td><input type="text" name="address1" /></td>
	</tr>
	<td>Address2:</td>
	<td><input type="text" name="address2" /></td>
	</tr>
	<td>City:</td>
	<td><input type="text" name="city" /></td>
	</tr>
	<td>State:</td>
	<td><input type="text" name="state" /></td>
	</tr>
	<td>Postal Code:</td>
	<td><input type="text" name="postalcode" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="right">
			<input type="hidden" name="insert"/>
			<input type="submit" value="Create Account"/>
		</td>
	</tr>
	</table>
	</form>


<?php
}
else
{
	header("location:admin_home.php");
}
?>


<?php
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole = $_SESSION['user_role'];
if($irole != "admin")
{
	header("location:redirect_home.php");
}
$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}

?>