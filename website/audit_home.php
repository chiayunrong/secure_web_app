<html>
<body>
<title>Audit Page</title>
<?php


session_start(); 
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole = $_SESSION['user_role'];
if($irole != "auditor")
{
    header("location:redirect_home.php");
}
$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}

$User=$_SESSION['login_user'];

require 'connect.php';
$result = mysqli_query($con, 'SELECT * FROM audit_log');
?>

<br>


<center><a href = "logout.php" title = "Logout">Logout</a></center>
<br>

<table cellpadding="2" cellspacing="2" border="0">
    <tr>
        <th>Date</th>
        <th>Details</th>
        <th>Category</th>
        <th>Comment</th>

    </tr>
    <?php while($audit_log = mysqli_fetch_object($result)) {?>
        <tr>
            <td><?php echo $audit_log->datetime; ?></td>
            <td> 
                <?php 
                echo $audit_log->new_value;
                echo "\n";
                echo$audit_log->operation; 
                ?>
                    
            </td>
            <td><?php echo $audit_log->tablename; ?></td>
            <td><?php echo $audit_log->comment; ?></td>
		

            <td> 
                <form action="comment.php?id=<?php echo $audit_log->id;?>" method="POST"> 
                    <input type="text" name="iComment" placeholder= "Enter comment">
                    <input type="submit" name="submitvar" value="Insert">
                </form> 
            </td>
        </tr>
	<?php } ?>
<meta http-equiv="refresh" content="<?php echo 5 ?>;URL='<?php echo $_SERVER['PHP_SELF']?>">
</body>
</html>
