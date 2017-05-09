<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?
$connect = mysql_connect("localhost","root","");
if($connect)
{
	$baza = mysql_select_db("korporacja");
	if($baza)
	{
		
	}
	else echo "Brak połączenia z wybraną bazaą":
}
mysql_close($connect);
else
{
	echo"Brak połączenia";
}
?>
</body>
</html>