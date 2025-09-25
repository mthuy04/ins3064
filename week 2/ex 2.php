<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Test</title>
</head>
<p>
<?php
$x = $_GET["x"];
$y = $_GET["y"];
$z = $x + $y;

echo "The sum of $x and $y is: <br>$z";
?>
</p>

<p>
<?php
$x = $_GET["x"];
$y = $_GET["y"];
$z = $x - $y;

echo "The subtraction of $x and $y is: <br>$z";
?>
</p>

<p>
<?php
$x = $_GET["x"];
$y = $_GET["y"];
$z = $x * $y;

echo "The multiplication of $x and $y is: <br>$z";
?>
</p>

<p>
<?php
$x = $_GET["x"];
$y = $_GET["y"];
$z = $x / $y;

echo "The division of $x and $y is: <br>$z";
?>
</p>

</html>