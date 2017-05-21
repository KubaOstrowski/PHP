<?php
class Pojazd {
	public $v;
	public $v_max;
	function __construct($v_pocz, $v_mx){
		$this->v = $v_pocz;
		$this->v_max = $v_mx;
	}
	
	
	public function przyspiesz($value) {
		$this->v = $this->v + $value;
		if($this->v > $this->v_max) {
			$this->v = $this->v_max;
		}
	}
	public function zwolnij($value) {
		$this->v -= $value;
		if($this->v < 0) $this->v = 0;	
	}
	public function show() {
		return $this->v;
	}
}
//public - dostęp otwarty
//protected - dostęp chroniony
//private - dostęp prywatny
?>
