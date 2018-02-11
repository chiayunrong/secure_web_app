<?php
error_reporting(0);
include("connect.php");
include("regex_check.php");


if (isset($_GET['token']) && !empty($_GET['token']))
{
    $token = $_GET['token'];
    $result = mysqli_query($con,"SELECT * FROM `useraccount` WHERE `password_token` = '$token'");
    $r = mysqli_fetch_object($result);
    $count = mysqli_num_rows($result);
    if($count >= 1 && isset($_POST['ipwd']) && !empty($_POST['ipwd'])) {
        $ipwd = $_POST['ipwd'];
        $pwd = password_hash($ipwd, PASSWORD_BCRYPT);
        mysqli_query($con, "UPDATE `useraccount` SET `password` = '$pwd' WHERE `password_token` = '$token'");
        echo "Password changed!";
    }
}
?>

<center><form action="reset_password.php?token=<?php echo $token; ?>" method="POST">
Enter your new password <br>
<input type="password" name="ipwd"> <br>
<input type="submit" name="submit" value="Submit">
</form></center>
<a href="main_login.php">Back </a>