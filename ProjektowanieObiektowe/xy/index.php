<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>

<?php
include "punkt.php";
include "xy3D.php";
include "prostokat.php";


$obiekt=new Punkt3D(1024,2048,3072);
$a=$obiekt->fajne();
print($a);



 ?>

</body>
</html>