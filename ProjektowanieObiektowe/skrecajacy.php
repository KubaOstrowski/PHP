<?php
class Skrecajacy Extends Pojazd {
	function __construct($v_pocz, $v_mx, $skr){
		$this->v = $v_pocz;
		$this->v_max = $v_mx;
		$this->kierunek += $skr;
	}
	
	public $kierunek;
	
	public function zwrot($value){
		$this->kierunek += $value;
	}
	public function zwolnij($value){
		$this->v = 20;
		parent::zwolnij(6);
	}
	public function show_zwrot(){
		return $this->kierunek;
	}
}
?>
