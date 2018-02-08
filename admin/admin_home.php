<?php
$connect=mysqli_connect("localhost","root","","dokidoki");

if(isset($_POST["insert"])){
	if($_POST["insert"]=="yes")
	{
		//$uid=$_POST["UserID"];
		$username=$_POST["Username"];
		$password=$_POST["Password"];
		$name=$_POST["Name"];
		$role=$_POST["Role"];
		$contact=$_POST["Contact"];	
		$email=$_POST["Email"];
		$creditcardid=$_POST["CreditID"];
		$query=$connect->prepare("insert into user(Username, Password, Name, Role, Contact, Email, CreditID) values('$username', '$password', '$name', '$role', '$contact', '$email', '$creditcardid');");
		if($query->execute())
		{
			echo "<center>Record Inserted!</center><br>";
		}
	}
}

if(isset($_POST["update"])){
	if($_POST["update"]=="yes")
	{
		$uid=$_POST["UserID"];
		$username=$_POST["Username"];
		$password=$_POST["Password"];
		$name=$_POST["Name"];
		$role=$_POST["Role"];
		$contact=$_POST["Contact"];	
		$email=$_POST["Email"];
		$creditcardid=$_POST["CreditID"];

	
	$query=$connect->prepare("update user set UserID='$uid', Username='$username', Password='$password', Name='$name',  Role='$role', Contact='$contact', Email='$email', CreditID='$creditcardid' where UserID=".$_POST['UserID']);
		
	//$query=$connect->prepare("update item set ITEM_NAME='$itemname' , STOCK='$stock', UNITPRICE='$unitprice', COSTPRICE='$costprice', SHORT_DESC='$shortdesc', MERCHANT='$merchant' where ITEM_ID=".$_POST['id']);
	if($query->execute())
	{
		echo "<center>Record Updated!</center><br>";
	}
	}
}

if(isset($_GET['operation'])){
	if($_GET['operation']=="delete")
	{
		$query=$connect->prepare("delete from user where UserID=".$_GET['uid']);
		if($query->execute())
		{
			echo "<center>Record Deleted!</center><br>";
		}
	}
}
?>
<html>
    <head>
        <title>Administrator page</title>
    </head>
    <body>

        <fieldset>
            <legend>Welcome <?php echo $admin->get_nicename(); ?></legend>
                <p>
                    Here are some of the basic informations
                </p>
                <p>
                    Username: <?php echo $_SESSION['admin_login']; ?>
                </p>
                <p>
                    Email: <?php echo $admin->get_email(); ?>
                </p>
        </fieldset>
        <p>
            <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" />
        </p>
    </body>
</html>