<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}
//session_start();
$_SESSION["login_user"]=$iusername;
$from = 'roseusalpaca@gmail.com';
$to = $iusername;
$subject = 'One time password for login';
$str = '';
for($i=7;$i>0;$i--){
    $str = $str.chr(rand(97,122)); 

    /*  The above line concatenates one character at a time for
        seven iterations within the ASCII range mentioned.
        So, we get a seven characters random OTP comprising of
        all small alphabets. 
    */
}
$body = 'Your one time password is : '.$str;
$headers .= 'From: '.$from. "\r\n" .
   'Reply-To: '.$from. "\r\n";

mail($to, $subject, $body, $headers);

session_start();
$_SESSION['loggedinuser'] = 1;
$_SESSION['secretpassword'] = $str;
?>