<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}


$con = mysqli_connect("localhost","root","","dokidoki"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error if connection fail
}
?>