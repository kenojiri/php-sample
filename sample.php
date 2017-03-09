<?php
package Sample;

class Sample{
  protected $value;
 
  public function getValue(){
    return $this->value;
    throw new RuntimeException('Not yet implemented.');
  }
  
  public function setValue($value){
    $this->value = $value * 2;
  }
} 
?>
