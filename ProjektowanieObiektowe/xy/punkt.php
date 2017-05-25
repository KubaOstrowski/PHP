
<?php


class punkt{
  public $x;
  public $y;

  public function __construct($x,$y){
    $this->x=$x;
    $this->y=$y;
    }

    function fajne(){
      return "X=".$this->x."<br />"."Y=".$this->y;
      }
}

 ?>