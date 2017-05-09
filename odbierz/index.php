<!DOCTYPE html>
<html>
<head>
	<title>SQL injection</title>
	<meta charset="utf-8" />
</head>
<body>
<?php
echo<<<END
<form action="odbierz.php" metchod="post">
Login: <input type="text" name="login" value="" /><br /><br />
Hasło: <input type="text" name="haslo" value="" /><br /><br />
<input type="submit" value="Wyślij" />
</form>
END;
?>
</body>
</html>