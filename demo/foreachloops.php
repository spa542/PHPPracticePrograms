<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
// For Each Loops in PHP
// This is like any other loop but treats each element as objects
// This is the exact same in C++ or C# and many other languages of the sort
$numbers = array(320,45,333,222,123,500);

foreach($numbers as $num) { // Array goes first and the name of the tmp variable goes next
    echo $num . "<br>";
}

?>

</body>
</html>
