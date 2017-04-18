<?php
use PHPUnit\Framework\TestCase;
require_once 'sample.php';
 
class SampleTest extends PHPUnit_Framework_TestCase{
 
  public function setUp(){
    $this->sample = new Sample;
  }
 
  public function testGetValue(){
    $this->sample->set_value(20);
    $this->assertEquals(40,$this->sample->get_value());
  }
}
?>
