<html>
<body>
<?php
include("connect.php");

// username and password sent from form 

function cleanData($data)
   	{
        //$data=mysqli_real_escape_string($con, $data);
        $data=trim($data);
        $data=strip_tags($data);
        $data=stripslashes($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        echo "hehexd";
        $secret = '6LcNiUUUAAAAAJpCxQccdvDx1xHaacLzXW6cmqd2';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success){

            $iusername=mysqli_real_escape_string($con, $_POST['myusername']); 
            $ipassword=mysqli_real_escape_string($con, $_POST['mypassword']); 

            cleanData($iusername);
            cleanData($ipassword);

            $sql="SELECT * FROM useraccount WHERE EMAIL='$iusername' AND PASSWORD='$ipassword' ";
            $result=mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);

            if($count == 1) { //check if username and password are from the same row
            // Register $myusername and redirect to file "login_success.php"
            session_start();
            $_SESSION["login_user"]= $iusername;
            header("location:login_success.php");
            }
            else { // If done wrongly, user can click the back button to go back to the login page
            echo "<p align=center>Wrong Username or Password</p>";
            echo '<p align=center><a href ="main_login.php">Back</a></p>';
            }
        }
        else{
           echo "reCAPTCHA verification failed. Are you a bot?";
      }
    }   
    else{
        echo "reCAPTCHA is not complete. Please check the box to complete it.";
    }
}
else{
    echo "Error, please try again.";
}

$con->close();

?>
</body>
</html>