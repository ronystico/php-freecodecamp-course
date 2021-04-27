<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="POST">
Password: <input type="password" name="password">
<br>
<input type="submit">
</form>
<br><br>

<?php 
echo $_POST["password"];

?>

</body>
</html>
