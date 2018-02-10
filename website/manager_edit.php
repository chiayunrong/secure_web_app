<?php
session_start();
require 'connect.php';
include("regex_check.php");

if(!isset($_SESSION['login_user'])) //check if you are in a session, if not redirect to login page
{
   header("Location:main_login.php");
}

$post_product_id = $_POST['post_product_id'];
$post_product_name = $_POST['post_product_name'];
$post_description = $_POST['post_description'];
$post_unit_price = $_POST['post_unit_price'];
$post_stock = $_POST['post_stock'];
$post_promotion = $_POST['post_promotion'];

if (checkNum($post_product_id) && checkAlphaNumSpecial($post_product_name) && checkAlphaNumSpecial($post_description) && checkNumDecimal($post_unit_price) && checkNum($post_stock) && checkNumDecimal100($post_promotion) ){
    mysqli_query($con, "UPDATE product SET productname='$post_product_name', description='$post_description', unitprice='$post_unit_price', stock='$post_stock', promotion='$post_promotion' WHERE productid = '$post_product_id'");
    echo "Product edited successfully!";
}
else{
    echo "You have entered an invalid value. Please try again.";
}
?>
<a href="manager_home.php">Back</a>