<!DOCTYPE html>
<html>
<head>
<title>OOP w PHP</title>
<meta charset="utf-8" />
</head>
<body>
<?php
/*
class Pojazd
{
public $v;
public $v_max;

public function przyspiesz($value)
{
$this->v = $this->v + $value; //$this->v += $value
if($this->v > $this->v_max) $this->v = $this->v_max;
}
public function zwolnij($value)
{
$this->v -= $value;
if($this->v < 0)$this->v = 0;
}
public function show_v()
{
return $this->v;
}
}
class Skrecajacy Extends Pojazd
{
public $kierunek;
public function zwrot($value)
{
$this->kierunek += $value;
}
}
*/
function ladujKlasy($nazwaKlasy)
{
require "$nazwaKlasy.php";
}
spl_autoload_register('ladujKlasy');

$szynobus = new Pojazd(0, 30);
$bus = new Skrecajacy(0, 30);
?>
</body>
</html>