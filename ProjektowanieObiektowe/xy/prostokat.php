<?php
class Prostokat Extends punkt{
	public $z;
	
	
	public function __construct($x,$y)
	{
		parent::__construct($x,$y);
    }
	
    function Pole()
	{
      return ($this->x)*($this->y);
      }
	  function Obwod()
	{
      return ($this->x*2)*($this->y*2);
	  }
}
 ?>