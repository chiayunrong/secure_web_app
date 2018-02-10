<html>
<form method="post" action="admin_home.php">
<table align="center" border="0">
<tr>
<b><center>Update Account Information</center></b>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $_GET['email']; ?>"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="password" value="<?php echo $_GET['password']; ?>"/></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $_GET['name']; ?>"/></td>
</tr>
<tr>
<tr>
<td>Contact:</td>
<td><input type="text" name="contact" value="<?php echo $_GET['contact']; ?>"/></td>
</tr>
<tr>
<td>Role:</td>	
<td><input type="text" name="role" value="<?php echo $_GET['role']; ?>"/></td>
</tr>
<tr>
<td>Address1:</td>
<td><input type="text" name="address1" value="<?php echo $_GET['address1']; ?>"/></td>
</tr>
<tr>
<td>Address2:</td>
<td><input type="text" name="address2" value="<?php echo $_GET['address2']; ?>"/></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city" value="<?php echo $_GET['city']; ?>"/></td>
</tr>
<tr>
<td>State:</td>
<td><input type="text" name="state" value="<?php echo $_GET['state']; ?>"/></td>
</tr>
<td>Postalcode:</td>
<td><input type="text" name="postalcode" value="<?php echo $_GET['postalcode']; ?>"/></td>
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
<html>