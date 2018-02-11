<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) 
{
    
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: redirect_home.php' ) );

}

function checkAlphaNum($string){
    return ctype_alnum($string);
}

function checkAlpha($string){
    return ctype_alpha($string);
}

function checkNum($num){
    return ctype_digit($num);
}

function checkNumDecimal($num){
    if (preg_match('/[0-9.]+/', $num) && strpos($num, ' ') === False && preg_match('/^\d/', $num) === 1){
        return True;
    } 
    else {
        return False;
    }
}

function checkNumDecimal100($num){
    if (preg_match('/[0-9.]+/', $num) && $num <= 100.00 && strpos($num, ' ') === False && preg_match('/^\d/', $num) === 1){
        return True;
    } 
    else {
        return False;
    }
}

function checkAlphaNumSpecial($string){
    if (preg_match('/^[ A-Za-z0-9().]*$/', $string)){
        return True;
    }
    else {
        return False;
    }
}
?>

