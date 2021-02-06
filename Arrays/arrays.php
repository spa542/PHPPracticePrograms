<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Contiguous Arrays in PHP
// Must use the array function!!
$numberList = array(); // This is the traditional way to initialize memory
$numberList2 = []; // This is the more modern way to initialize memory

// Arrays in PHP work a lot like lists in python
// They can have any data type in them
// Array indices start with 0
$filledNumberList = array(23,64,44,58,90,'300',"<h1>Hello World!</h1>");

// Display a list element
echo $filledNumberList[4];
echo "<br>";
// Use a built in PHP function -> print_r
// print_r prints the block chain of the array in memory
// It looks kind of like python print when displayed
print_r($filledNumberList);

?>

</body>
</html>
