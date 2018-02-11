<?php
error_reporting(0);
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}

class Item{
    var $productid;
    var $productname;
    var $unitprice;
    var $quantity;
    var $promotion;
}
?>