<?php
session_start();
include ("connect.php");
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

if(isset($_POST["update"]))
{
	if($_POST["update"]=="yes")
	{
		$userid=$_POST["userid"];
		$name=$_POST["name"];
		$address1=$_POST["address1"];	
		$address2=$_POST["address2"];
        $city=$_POST["city"];
		$state=$_POST["state"];
		$postalcode=$_POST["postalcode"];	
	
	$query=$con->prepare("update `useraccount` set `userid`='$userid', `name`='$name', `address1`='$address1', `address2`='$address2', `city`='$city', `state`='$state', `postalcode`='$postalcode' where userid=".$_POST['userid']);
	if($query->execute())
	{
		echo "<center>Account Information Updated!</center><br>";
	}
	else
	{
		echo "Error updating account";
	}
	}	
}

if(isset($_GET['operation'])){
	if($_GET['operation']=="delete")
	{
		$query=$con->prepare("delete from `useraccount` where userid=".$_GET['userid']);
		if ($query->execute())
					
					{   //execute query
  						echo "<center>Account successfully deleted.</center> <br>";
					}
	}
}

?>

<!DOCTYPE html>
<html>
<body>


    <head>
        <title>Administrator page</title>
    </head>


    <body>

        <fieldset>
            <legend>Welcome Admin</legend>
                <p>
                    Here are information of users:
                </p>
				
				
				
<?php
include("connect.php");

$query = $con->prepare("SELECT `userid`, `email`, `name`, `contact`, `role`, `address1`, `address2`, `city`, `state`, `postalcode` FROM useraccount");
$query->execute();
$query->bind_result($userid, $email, $name, $contact, $role, $address1, $address2, $city, $state, $postalcode );
echo "<table border='1'>
<tr>
<th>Userid</th>
<th>Email</th>
<th>Name</th>
<th>Contact</th>
<th>Role</th>
<th>Address1</th>
<th>Address2</th>
<th>City</th>
<th>State</th>
<th>Postalcode</th>
</tr>";

while($query->fetch())
{
	if($role == 'admin')
	{
		echo "<tr>";
	}


else{
echo "<tr>";
echo "<td>".$userid."</td>";
echo "<td>".$email."</td>";
echo "<td>".$name."</td>";
echo "<td>".$contact."</td>";
echo "<td>".$role."</td>";
echo "<td>".$address1."</td>";
echo "<td>".$address2."</td>";
echo "<td>".$city."</td>";
echo "<td>".$state."</td>";
echo "<td>".$postalcode."</td>";
echo "<td><a href='admin_edit.php?operation=edit&userid=".$userid."&name=".$name."&contact=".$contact."&role=".$role."&address1=".$address1."&address2=".$address2."&city=".$city."&state=".$state."&postalcode=".$postalcode."'>edit</a></td>";	
echo "<td><a href='admin_home.php?operation=delete&userid=".$userid."'>delete</a></td>"; 
echo "</tr>";
}
}
echo "</table>";		

mysqli_close($con);
?>	

				</tr>
				</table>
				
        </fieldset>
        <p>

            <input type="button" onclick="javascript:window.location.href='admin_create.php'" value="create account"/>
            <input type="button" onclick="javascript:window.location.href='profile.php'"" value="profile"/>
		    <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" />


        </p>
    </body>
</html>
