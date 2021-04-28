<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php 
function cube($num){
/* He uses "return $num * $num * $num;"
 * without quotes, but I use a similar way that I read in PHP Manual
 * you can even use "return pow($num,3);" */
echo "Hello";
return $num ** 3;
}
$cubeResult = cube(4);

echo $cubeResult;
?>

</body>
</html>
