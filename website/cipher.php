<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}

function encrypt_decrypt($action, $string, $key, $iv) {
    $output = "";

    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, "AES-256-CBC", $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), "AES-256-CBC", $key, 0, $iv);
    }
    return $output;
}

?>