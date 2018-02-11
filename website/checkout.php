<?php
session_start();
require 'connect.php';
require 'item.php';

if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

$irole = $_SESSION['user_role'];
if($irole != "user")
{
    header("location:redirect_home.php");
}

$otpsession= $_SESSION['user'];
if ($otpsession != 1)
{
    header("location:otp.php");
}
$User=$_SESSION['login_user'];

//Save new order
mysqli_query($con, 'INSERT INTO customerorders( timestamp,  email) 
VALUES("'.date('Y-m-d H:i:s').'", "cny@gmail.com")');
$ordersid = mysqli_insert_id($con);


//Save order details for new order
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart); $i++) {
    mysqli_query($con, 'INSERT INTO orderinfo(productid, orderid, unitprice, quantity) 
    VALUES('.$cart[$i]->productid.', '.$ordersid.', '.$cart[$i]->unitprice.', '.$cart[$i]->quantity.')');
}

//Clear all products in cart
$_SESSION['cart'] = array();
?>

Your order will be sent to you within 3 business days. Click <a href="home.php">here</a> to continue.