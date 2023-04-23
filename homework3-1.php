<!DOCTYPE html>
<html>
<body>

<?php  

$sum = 0;
for ($i = 1; $i <= 30; $i++) {
  $sum += $i;
}

echo "<br>The number is: " . $sum;
?>

<?php
$factorial = 1;
for ($i = 1; $i <= 30; $i++) {
  $factorial *= $i;
}

echo "<br>The number is: " . $factorial;
?>
</body>
</html>