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
require 'connect.php';
$result = mysqli_query($con, 'SELECT * FROM product');
?>

<br>

<a href="home.php">Home</a>
<a href="cart.php">Cart</a>
<a href="profile.php">Profile</a>

<center><a href = "logout.php" title = "Logout">Logout</a></center>
<br>

<table cellpadding="2" cellspacing="2" border="0">
    <tr>
        <th>Product ID</th>
        <th>Item Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Promotion</th>
    </tr>
    <?php while($product = mysqli_fetch_object($result)) {?>
        <tr>
            <td><?php echo $product->productid; ?></td>
            <td><?php echo $product->productname; ?></td>
            <td><?php echo $product->description; ?></td>
            <td><?php echo $product->unitprice; ?></td>
            <td><?php echo $product->stock; ?></td>
            <td><?php echo $product->promotion; ?></td>
			<td><a href="cart.php?productid=<?php echo $product->productid;?>">Add to Cart</a></td>
        </tr>
	<?php } ?>
</table>
</body>
</html>