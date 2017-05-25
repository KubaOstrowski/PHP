<?php
class Punkt3D Extends punkt{
	public $z;
	
	
	public function __construct($x,$y,$z){
		parent::__construct($x,$y);
    $this->z=$z;
    }

    function fajne(){
      return parent::fajne()."<br />"."Z=".$this->z;
      }
}
 ?>