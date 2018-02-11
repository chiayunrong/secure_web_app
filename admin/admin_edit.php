<html>
<form method="post" action="admin_home.php">
<table align="center" border="0">
<tr>
<b><center>Update Account Information</center></b>
<tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" required="required" placeholder="Name" pattern="[a-zA-Z]{1,}" value="<?php echo $_GET['name']; ?>"/></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="integer" name="contact" required="required" placeholder="Contact" pattern="[0-9]{1,}" value="<?php echo $_GET['contact']; ?>"/></td>
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
<td><input type="text" name="city" required="required" placeholder="City" value="<?php echo $_GET['city']; ?>"/></td>
</tr>
<tr>
<td>State:</td>
<td><input type="text" name="state" placeholder="State"value="<?php echo $_GET['state']; ?>"/></td>
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
<html>