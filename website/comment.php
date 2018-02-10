<?php 
require 'connect.php';

if(isset($_GET['id']))
{
 $Comment = $_POST['iComment'];
 $Id = $_GET['id'];

 $query = $con->prepare("UPDATE `audit_log` SET `comment`= '$Comment' WHERE id='$Id'");
 $query->execute();

 header("Location:http://localhost/secure_web_app/website/audit_home.php");

}

?>




