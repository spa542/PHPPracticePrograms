<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Built in String Functions in PHP
// Just some string functions that PHP provides

$string = 'Hello! How are you today?';

// Length of the string
echo strlen($string) . "<br>"; // Same as C++

// Make all upper case
echo strtoupper($string) . "<br>"; // Same as C++

// Make all lower case
echo strtolower($string) . "<br>"; // Same as C++

// You can use a function to print a different way
print($string); // Basically python
print "<br>" . $string;

?>

</body>
</html>
