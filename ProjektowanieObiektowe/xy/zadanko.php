<!DOCTYPE html>
<html>
<head>
<title>OOP w PHP</title>
<meta charset="utf-8" />
</head>
<body>

<?php
function ladujKlasy($nazwaKlasy)
{
require "$nazwaKlasy.php";
}
spl_autoload_register('ladujKlasy');

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

$obiekt=new punkt(1024,2048);
$z=$obiekt->fajne();
print($z);



 ?>

</body>
</html>