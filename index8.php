<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="GET">
Color: <input type="text" name="color">
<br>
Plural Noun: <input type="text" name="pluralNoun">
<br>
Celebrity: <input type="text" name="celebrity">
<input type="submit">
</form>

<?php 
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity <br>";

?>

</body>
</html>
