<html>
<body>
<title>Home Page</title>
<?php
session_start(); 
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$User=$_SESSION['login_user'];

include("connect.php");
$sql = $con->query("SELECT * FROM `product`");
?>

<br>

<a href="cart.php">Home</a>
<a href="cart.php">Cart</a>
<a href="profile.php">Profile</a>

<center><a href = "logout.php" title = "Logout">Logout</a></center>


<br>

	<h1><left>Welcome <?php echo $User; ?>!</left></h1>
	<hr>

	<b><center>Products</center></b>

	<table>
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Description</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Promotion</th>
			<th>Quantity</th>
        </tr>
    </thead>
    <tbody>
		<?php while($row = $sql->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['description']; ?></td>
			<td><?php echo $row['unitprice']; ?></td>
			<td><?php echo $row['stock']; ?></td>
			<td><?php echo $row['promotion']; ?></td>
			<td> <form action="POST"><input type='text' name='add_to_cart'/><input type='submit' value='Add to Cart'/> </form> </td>
		</tr>
        <?php endwhile ?>
    </tbody>
	</table>


<?php
include("connect.php");
?>

</body>
</html>

<?php
