<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form action="check_login.php" method="post" >
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td><br>
</tr>
</table>
</td>
</tr>
</table>
<center><div class="g-recaptcha" data-sitekey="6LcNiUUUAAAAAC1Zn7TfchgfRwzLcjjWyqr9hShp"></div></center>
<center><input type="submit" name="submit" value="Login"></center>
</form>

<center><input type="button" value="Register" onclick="window.location.href='register.php'" /></center>
</tr>

</html>
