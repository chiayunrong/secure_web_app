<?php
session_start();
include ("connect.php");

if(isset($_POST["update"]))
{
	
$error_message = "";
$emailerror = "";
$passworderror = "";
$nameerror = "";
$contacterror = "";
$cityerror = "";
$address1error = "";
$stateerror = "";
$postalcodeerror = "";
{
		
	$userid = mysqli_real_escape_string($con, $_POST['userid']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$address1 = mysqli_real_escape_string($con, $_POST['address1']);
	$address2 = mysqli_real_escape_string($con, $_POST['address2']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$state = mysqli_real_escape_string($con, $_POST['state']);
	$postalcode = mysqli_real_escape_string($con, $_POST['postalcode']);

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

	cleanData($userid);
	cleanData($name);
	cleanData($contact);
	cleanData($address1);
	cleanData($address2);
	cleanData($city);
	cleanData($state);
	cleanData($postalcode);
	
if(empty($iname) || empty($icontact) || empty($iaddress1) || empty($icity) || empty($state) || empty($postalcode))
	{
		$error_message="*One or more required fields are blank";

	}
	
	else {		
		
		if (!preg_match("/^[a-zA-Z]*$/",$iname)) 
		{
     		$nameerror = "*Only letters allowed for name"; 
    	}
	
		if (!preg_match("/\D/",$icontact))
		{
    		$contacterror= "Please insert a 8 digit number";
		}
		
		if (!preg_match("/^([a-z])+$/i", $iaddress1))
		{
			$cityerror = "Please insert a valid address";
		}
		
		if (!preg_match("/^([a-z])+$/i", $icity))
		{
			$addresserror = "Please insert a valid address";
		}
		if (!preg_match("/^([a-z])+$/i", $istate))
		{
			$stateerror = "Please insert a valid state";
		}
		
		if(!preg_match("/^[^\"']*$/", $ipostalcode))
		{
			$postalcodeerror	= "Please only insert numbers for postal code";
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
		}
	}

		$userid=$_POST["userid"];
		$name=$_POST["name"];
		$contact=$_POST["contact"];
		$address1=$_POST["address1"];	
		$address2=$_POST["address2"];
        $city=$_POST["city"];
		$state=$_POST["state"];
		$postalcode=$_POST["postalcode"];	
	
	$query=$con->prepare("update `useraccount` set `userid`='$userid', `name`='$name', `contact`='$contact', `address1`='$address1', `address2`='$address2', `city`='$city', `state`='$state', `postalcode`='$postalcode' where userid=".$_POST['userid']);
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
	if($userid == 1)
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
		    <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" />


        </p>
    </body>
</html>
