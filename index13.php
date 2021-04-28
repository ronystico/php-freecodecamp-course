<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="index.php" method="POST">
<input type="text" name="student">
<input type="submit">
</form> 

<?php 
$grades = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
$grades["Jim"] = "F";
echo $grades[$_POST["student"]];

?>

</body>
</html>
