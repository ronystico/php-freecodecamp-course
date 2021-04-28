<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php 
$isMale = false;
$isTall = false;
if ($isMale && $isTall){
echo "You are a tall male";
} 
elseif($isMale && !$isTall) {
echo "You are a short male";
}
elseif (!$isMale && $isTall){
echo "You are not male but are tall";
}
else {
echo "You are not male and not tall";
}
?>

</body>
</html>
