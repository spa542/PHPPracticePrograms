<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Associative Arrays in PHP
// This is the regular contiguous array in PHP
$numberList = array(10, 20, 49);
echo $numberList[1] . "<br>";
print_r($numberList);
echo "<br>";
// This is an associative array in PHP
// It is basically a dictionary in python or a map in c++
// This array has key-value pairs and are stored in contiguous memory
$names = array("first_name" => 'Ryan', "second_name" => "Travis", 
    "third_name" => "Keith");
echo $names["first_name"] . "<br>"; // Can print by association like a dict
print_r($names); // Can use print_r to print the whole array like a normal array
// You can use the "" and '' interchangeably in most instances but is common practice
// to keep consistency with what you are using to specify what

$testValues = array(45 => 'James Kent', 32.5 => 31, "Yeet" => 55);
echo "<br>";
print_r($testValues); // If you run this, you will see that the associative array
// is dynamic just like dicts in python -> This works as intended

?>

</body>
</html>
