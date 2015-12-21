<?php

require_once('../src/NumberToWord.php');

class NumberToWordTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  /**
   * test regular number
   */
  public function testRegularNumber()
  {
    $obj = new NumberToWord( );
    
    $this->assertTrue($obj->convert( "999" ) == "nine hundred and ninety-nine");
  }
  
  /**
   * test number with a string
   */
  public function testNotNumber()
  {
    $obj = new NumberToWord( );
    $this->assertTrue($obj->convert( "999x9" ) === false);
    $this->assertTrue($obj->getErrorMessage() == "NOT_NUMBER");
  }
  
  /**
   * test negative number
   */
  public function testNegative()
  {
    $obj = new NumberToWord( );
    $this->assertTrue($obj->convert( "-30" ) == "negative thirty");
  }
  
  /**
   * test a larger number
   */
  public function testOneMillion()
  {
    $obj = new NumberToWord( );
    $this->assertTrue($obj->convert( "1000000" ) == "one million");
  }
  
  /**
   * out of range number needs to be test in utest.php
   * due to segmentation fault on unit test
   */
}
?>
