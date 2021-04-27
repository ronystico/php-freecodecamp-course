<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="GET">
Name: <input type="text" name="name">
<br>
Age: <input type="number" name="age">
<input type="submit">
</form>
Your name is <?php echo $_GET["name"] ?>
<br>
Your age is <?php echo $_GET["age"] ?>

</body>
</html>
