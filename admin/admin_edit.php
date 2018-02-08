<html>
<form method="post" action="admin_index.php">
<table align="center" border="0">
<tr>
<b><center>Update Record</center></b>
<tr>
<td>Username:</td>
<td><input type="text" name="Username" value="<?php echo $_GET['Username']; ?>"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="Password" value="<?php echo $_GET['Password']; ?>"/></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="Name" value="<?php echo $_GET['Name']; ?>"/></td>
</tr>
<tr>
<td>Role:</td>	
<td><input type="text" name="Role" value="<?php echo $_GET['Role']; ?>"/></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="text" name="Contact" value="<?php echo $_GET['Contact']; ?>"/></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="Email" value="<?php echo $_GET['Email']; ?>"/></td>
</tr>
<td>Credit ID:</td>
<td><input type="text" name="CreditID" value="<?php echo $_GET['CreditID']; ?>"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right">
<input type="hidden" name="UserID" value="<?php echo $_GET['UserID'] ?>" />
<input type="hidden" name="update" value="yes" />
<input type="submit" value="Update Record"/>

</td>
</tr>
</table>
</form>
<html>