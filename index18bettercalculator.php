<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="POST">
First Num:<input type="number" step="0.001" name="num1"><br>
OP: <input type="text" name="op"><br>
Second Num:<input type="number" name="num2"><br>
<input type="submit">
</form>

<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
if ($op == "+"){
	echo $num1 + $num2;
}
elseif ($op == "-"){
	echo $num1 - $num2;
}
elseif ($op == "/"){
	echo $num1 / $num2;
}
elseif ($op == "*"){
	echo $num1 * $num2;
}
else {
	echo "Invalid Operator";
}
?>

</body>
</html>
