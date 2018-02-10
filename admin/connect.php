<?php
$con = mysqli_connect("localhost","root","","dokidoki"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error if connection fail
}
?>