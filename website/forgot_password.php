<?php
include("connect.php");
include("regex_check.php");
include("cipher.php");
$email = $_POST['email'];

if(isset($_POST) && !empty($_POST) && checkEmail($email)){
	$sql = "SELECT * FROM `useraccount` WHERE email = '$email'";
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
        $r = mysqli_fetch_assoc($res);
        $randstring = random_str(16);
        $token = substr(hash('sha256', $randstring), 0, 16);
        mysqli_query($con, "UPDATE useraccount SET password_token = '$token' WHERE email = '$email'");
		$to = $r['email'];
        $subject = "Recover your password";
        
        $message = "Please use this link to reset your password: localhost/secure_web_app/website/reset_password.php?token=" . $token;
        
		$headers = "From: test@testing.com";
		if(mail($to, $subject, $message, $headers)){
            echo "Your Password has been sent to your email address";
        } else {
            echo "Failed to recover your password, try again";
        }
	}else{
		echo "Email does not exist in database";
	}
}

?>
