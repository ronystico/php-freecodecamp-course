<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="GET">
Name: <input type="text" name="name">
<br>
<input type="submit">
</form>

<?php 
echo $_GET["age"];

?>

</body>
</html>
