<?php

/**
 * Special test for out of range number
 */
 
/**
 * include original function for comparing
 * Not need the function anymore
 * include_once( "func.php");
 */

/**
 * include the class
 */
include_once( "../src/NumberToWord.php");

$number = "99999999999999999999999999";
// original function by Karl
// convert_number_to_words($number);

$converter = new NumberToWord( $number );

$result = $converter-> convert( $number );
if( $result === false){
    echo $converter->getErrorMessage()."\n";
    exit();
}

