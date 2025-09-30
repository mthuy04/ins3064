<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Test</title>
</head>
<p>
<?php
echo strrev(".dlrow olleH");//Reverse string
echo str_repeat("Hip ", 2);//Repeat string
echo strtoupper("hooray!");//String to uppercase
?>
</p>
<p>
<?php
function sum($x, $y) {
    return $x + $y;
}

echo sum (5, 10);
?>
</p>
<p>
<?php
$a = 7;
$b = 10;
echo $sum;

?>
</p>
<p>
<?php
include("utilities/function.php");
echo sum(5, 8);

?>
</p>

<p>
<?php
include_once("utilities/function.php");
echo sum(5, 8);

include_once("utilities/function.php");
?>
</p>
</html>