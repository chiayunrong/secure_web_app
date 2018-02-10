<html>
<body>
<b><center>DELETE MY DATA</center></b>

<?php
session_start();
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

include("connect.php");
?>

<?php
$iusername=$_SESSION['login_user'];
$ipassword=$_POST['ipwd'];

$sql1="SELECT * FROM useraccount WHERE EMAIL='$iusername'";
$result=mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
if (password_verify($ipassword, $row['password']))
{
		$sql2 ="DELETE FROM useraccount WHERE EMAIL='$iusername'";

		if ($con->query($sql2) === TRUE) 
		{ //if query runs, record deleted
    		echo "Record deleted successfully";
    		header("location:main_login.php");
		}

		else 
		{
    		echo "Error deleting record: " . $con->error;
		}
}

session_destroy(); //end the session as account is no longer valid

$con->close();

?>

</body>
</html>