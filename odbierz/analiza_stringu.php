<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
echo<<<KONIEC
<form acion="analiza_stringu.php" method="post">
<input type="text" name="kwota" value="" />
<input type="submit" value="Wyślij" />
</form>
KONIEC;
if(isset($_REQUEST["kwota"]))
{
	$kwota = $_REQUEST["kwota"];
	$kwota = str_replace(',','.',$kwota);
	echo ($kwota);
	
	}
	else
	{
		echo "Wpisz kwotę do formularza";
	}

?>
</body>
</html>