<?php

require_once"parse.php";

class PhoneTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
  	$msi = new Parsing\Parser();
        $this->assertEquals('+38640734068', $msi->f('+38640734068'));
        $msi = new msisdn();
        $this->assertEquals('Si.mobil, 386, 40734068, SI', $msi->f('+38640734068'));
  }
}
?>