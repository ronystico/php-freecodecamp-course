<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="GET">
<input type="number" name="num1">
<br>
<input type="number" name="num2">
<input type="submit">
</form>

Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>

</body>
</html>
