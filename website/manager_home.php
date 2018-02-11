<html>
<body>
<title>Manager Home Page</title>
<?php
session_start(); 
if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}
$irole= $_SESSION['user_role'];
if($irole != "manager")
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
$result = mysqli_query($con, 'SELECT * FROM product');
?>

<br>

<a href="manager_home.php">Home</a>
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
			<td><a href="manager_delete.php?del=<?php echo $product->productid;?>">Delete</a></td>
        </tr>
	<?php } ?>
</table>

<br>
Add Product
<br>
<form action="manager_add.php" method="POST">
<table cellpadding="2" cellspacing="2" border="0">
    <tr>
        <th>Item Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Promotion</th>
    </tr>
        <th><input type="text" name="post_product_name"/></th>
        <th><input type="text" name="post_description"/></th>
        <th><input type="text" name="post_unit_price"/></th>
        <th><input type="text" name="post_stock"/></th>
        <th><input type="text" name="post_promotion"/></th>
</table>
<input type="submit" name="addproduct" value="Add Product"/>
</form>

<br>
Update Product(select product based on product ID)
<form action="manager_edit.php" method="post">
    Product ID
    <input type="text" name="post_product_id"/>
    <br>
    <table cellpadding="2" cellspacing="2" border="0">
    <tr>
        <th>Item Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Promotion</th>
    </tr>
        <th><input type="text" name="post_product_name"/></th>
        <th><input type="text" name="post_description"/></th>
        <th><input type="text" name="post_unit_price"/></th>
        <th><input type="text" name="post_stock"/></th>
        <th><input type="text" name="post_promotion"/></th>
</table>
    <input type="submit" name="updateproduct" value="Update">
</form>

</body>
</html>
