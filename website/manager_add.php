<?php
session_start();
require 'connect.php';
include("regex_check.php");

if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

$post_product_name = $_POST['post_product_name'];
$post_description = $_POST['post_description'];
$post_unit_price = $_POST['post_unit_price'];
$post_stock = $_POST['post_stock'];
$post_promotion = $_POST['post_promotion'];

if (checkAlphaNumSpecial($post_product_name) && checkAlphaNumSpecial($post_description) && checkNumDecimal($post_unit_price) && checkNum($post_stock) && checkNumDecimal100($post_promotion) ){
    mysqli_query($con, "INSERT INTO `product`(`productname`, `description`, `unitprice`, `stock`, `promotion`) 
    VALUES ('$post_product_name', '$post_description', '$post_unit_price', '$post_stock', '$post_promotion')");
    echo "Product added successfully!";
}
else{
    echo "You have entered an invalid value. Please try again.";
}

?>
<a href="manager_home.php">Back</a>
