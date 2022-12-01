<?php
  class Calculate{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a -$this->b;
        return $this->C;
    }
  }
  $obj1 = new Calculate();
  $obj2 = new Calculate();

  $obj1->a = 20;
  $obj1->b = 10;
  print("objact1=".$obj1->sum())."<br/>";

  $obj2->a = 50;
  $obj2->b = 30;
  print("objact1=".$obj1->sum());
  ?>