<?php
/**
 * This command line script allows user to input a number and
 * convert it to English words
 */

/**
 * include the class
 */
include_once( "src/NumberToWord.php");

/**
 * Message Array
 */
$errorMessage = array(
    "NOT_NUMBER" => "The string entered is not a number.\n",
    "OUT_OF_RANGE" => "This code only accepts numbers between -".
        PHP_INT_MAX . " and " . PHP_INT_MAX.".\n"
);

/**
 * Start the script
 */
echo "Please enter a number to convert to word: \n";

/**
 * Get the input from command line
 */
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$number = trim($line);

/**
 * initial the class
 */
$converter = new NumberToWord( $number );

/**
 * get the result
 */
$result = $converter-> convert( $number );

/**
 * error handling
 */
if( $result === false){
    echo $errorMessage[ $converter->getErrorMessage() ]."\n";
    exit();
}

/**
 * echo out the word if no error
 */
echo $result."\n";

