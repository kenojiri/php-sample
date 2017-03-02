<?php
namespace sample;
require_once 'sample.php';
 
class SampleTest extends PHPUnit_Framework_TestCase{
 
  public function setUp(){
    $this->sample = new Sample;
  }
 
  public function testGetValue(){
    $this->sample->setValue(20);
    $this->assertEquals(40,$this->sample->getValue());
  }
}
?>
