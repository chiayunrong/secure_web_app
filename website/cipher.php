<?php

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