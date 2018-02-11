<?php
session_start();
require 'connect.php';
require 'item.php';

if(isset($_GET['productid']) && !isset($_POST['update'])){
    
    $result = mysqli_query($con, 'SELECT * FROM product WHERE productid='.$_GET['productid']);
    $product = mysqli_fetch_object($result);
    $item = new Item();
    $item->productid = $product->productid;
    $item->productname = $product->productname;
    $item->unitprice = $product->unitprice;
    $item->quantity = 1;
    $item->promotion = $product->promotion;
    // Check if product exists in cart
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart); $i++)
        if ($cart[$i]->productid==$_GET['productid']) {
            $index = $i;
            break;
        }
    if($index==-1)
        $_SESSION['cart'][] = $item;
    else {
        $cart[$index]->quantity++;
        $_SESSION['cart'] = $cart;
    }
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}

//Update quantity in cart
if(isset($_POST['update'])) {
    $arrQuantity = $_POST['quantity'];

    // Check validate quantity
    $valid = 1;
    for($i=0; $i<count($arrQuantity); $i++)
        if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
            $valid = 0;
            break;
        }
    if($valid==1){
        $cart = unserialize(serialize($_SESSION['cart']));
        for($i=0; $i<count($cart); $i++) {
            $cart[$i]->quantity = $arrQuantity[$i];
        }
        $_SESSION['cart'] = $cart;
    }
    else
        $error = 'Please enter a proper quantity';
}

?>
<?php echo isset($error) ? $error : ''; ?>
<form method="post">
    <table cellpadding="2" cellspacing="2" border="1">
        <tr>
            <th>Option</th>
            <th>Product ID</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity<input type="image" src="../images/update.png"></th>
                <input type="hidden" name="update">
            <th>Promotion</th>
            <th>Sub Total</th>
        </tr>
        <?php
        $cart = unserialize(serialize($_SESSION['cart']));
        $s = 0;
        $index = 0;
        for($i=0; $i<count($cart); $i++){
            $s += $cart[$i]->unitprice * $cart[$i]->quantity;
        ?>
        <tr>
            <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            <td><?php echo $cart[$i]->productid; ?></td>
            <td><?php echo $cart[$i]->productname; ?></td>
            <td><?php echo $cart[$i]->unitprice; ?></td>
            <td><input type ="text" value="<?php echo $cart[$i]->quantity; ?>"
                style="width: 50px;" name="quantity[]"></td>
            <td><?php echo $cart[$i]->promotion; ?></td>
            <td><?php echo $cart[$i]->unitprice * $cart[$i]->quantity; ?></td>
        </tr>
        <?php 
                $index++;
            }     
        ?>
        <tr>
            <td colspan ="6" align="right">Grand Total</td>
            <td align="left"><?php echo $s?></td>
        </tr>
    </table>
</form>
<a href="home.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
