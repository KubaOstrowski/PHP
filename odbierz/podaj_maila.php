<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

echo<<<KONIEC
<form acion="index2.php" method="post">
<input type="text" name="email" value="" />
<input type="submit" value="Wyślij" />
</form>
KONIEC;
if(isset($_REQUEST["email"]))
{
	$wzorzec = "/^([0-9]|[a-z]|[-_\.])+@([0-9]|[a-z]){2,63}(\.[a-z]{3,3})?\.[a-z]{2,3}$/";
	$email = $_REQUEST["email"];
	if(preg_match($wzorzec, $email))
	{
		echo "Ciąg znaków zgodny ze wzorem";
	}
	else
	{
		echo "Ciąg znaków nie jest zgodny";
	}
}
else
{
	echo "Wpisz mail przyjacielu";
}
?>
</body>
</html>