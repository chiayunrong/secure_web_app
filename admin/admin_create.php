<html>
<body>
<b><center>Create an account</center></b>
<form method="post" action="admin_create.php">
<table align="center" border="0">
<tr>
<td>Email:</td>
<td><input type="text" required="required" name="email" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" required="required" name="password" /></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" required="required" pattern="[a-zA-Z]{1,}" name="name" /></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="text" required="required" pattern="[0-9]{1,}" name="contact" /></td>
</tr>
<tr>
<td>Role:</td>
<td><input type="text" value="user" readonly="readonly" name="role" /></td>
</tr>
<tr>
<td>Address1:</td>
<td><input type="text" required="required" name="address1" /></td>
</tr>
<td>Address2:</td>
<td><input type="text" name="address2" /></td>
</tr>
<td>City:</td>
<td><input type="text" required="required" pattern="[a-zA-Z]{1,}" name="city" /></td>
</tr>
<td>State:</td>
<td><input type="text" required="required" pattern="[a-zA-Z]{1,}" name="state" /></td>
</tr>
<td>Postal Code:</td>
<td><input type="text" required="required" name="postalcode" /></td>
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

session_start();
include("connect.php");	

if(isset($_POST["insert"]))
	{
		$email=$_POST["email"];
		$password=$_POST["password"];
		$name=$_POST["name"];
		$contact=$_POST["contact"];
		$role=$_POST["role"];
		$address1=$_POST["address1"];	
		$address2=$_POST["address2"];
        $city=$_POST["city"];
		$state=$_POST["state"];
		$postalcode=$_POST["postalcode"];		
	
		
		$query=$con->prepare("INSERT INTO `useraccount`(`userid`, `email`, `password`, `name`, `contact`, `role`, `address1`, `address2`, `city`, `state`, `postalcode`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?)");
		$query->bind_param('sssisssssi', $email, $password, $name, $contact, $role, $address1, $address2, $city, $state, $postalcode);
		if ($query->execute())
					
					{   //execute query
  						echo "<center>Account created.</center> <br>";
  						echo '<p align=center><a href ="admin_home.php">Back</a></p>';
					}
		else
					{
  						echo "<center>Error creating account.</center> <br>";
						echo '<p align=center><a href ="admin_home.php">Back</a></p>';
					} 	
	
	

	}
?>


</body>
</html>