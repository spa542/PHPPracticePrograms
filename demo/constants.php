<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Constants in PHP
// Normal variable
$number = 10;
echo $number . "<br>";

// To declare a constant, use built in PHP function
define("MYCONSTANT", 1000); // First value is the name of the constant and the second the value
// NOTE: The name of the value must be a string when passed to the function
echo MYCONSTANT . "<br>"; // When referencing, you do not need the $

// Above is the old way to create a constant
// The more modern way is the way OOP languages do it -> See below
const ANOTHERONE = 'Hello World!'; // This is how we are used to seeing it
echo ANOTHERONE; // The first way to define a constant is very C language-like

?>

</body>
</html>
