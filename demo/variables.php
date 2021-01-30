<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<?php

// For variables
// Use a $ followed by the name of the variable
// You can just initialize but is not common practice
$name = 'Ryan'; // Strings use single quotes
$number = 100; // PHP will know this is a number
$number_list = 100.5; // This is a double

echo $name; // Print the name 
echo $number; // Print the number
// PHP uses camel case! That is common practice

// Concatenation operator is the .
echo $name . " " . $number;

// You can put html in the string **Must use the ""
// You can only assign one value -> basic variable syntax
$name_modified = "<h1>Ryan Rosiak</h1>";

echo $name_modified;

?>


</body>

</html>
