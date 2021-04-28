<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="POST">
Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

<input type="submit">
</form>

<?php 
$fruits = $_POST["fruits"];
echo $fruits[0];
/* I was just testing if this piece of code works
 * Now the video is at 1:57:28 and "for" lesson
 * is at 3:15:00 
for ($i=0;$i <= count($fruits);$i++) {
echo $fruits[$i];
} */
?>

</body>
</html>
