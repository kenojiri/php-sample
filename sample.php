<?php
class Sample{
  protected $value;
 
  public function get_value(){
    return $this->value;
    throw new RuntimeException('Not yet implemented.');
  }
  
  public function set_value($value){
    $this->value = $value * 3;
  }
} 
?>
