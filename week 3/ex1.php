<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Test</title>
</head>
<p>
<?php
$name = "Mr.A";
$age = 38;
$courses = array("PHP","HTML","CSS","Java");
echo "Name" . $name. ",age". $age.
"<br/>3rd course is:" .$courses[2];
?>
</p>
</html>