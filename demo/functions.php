<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Functions in PHP
// Looks like javascript, like any scripting language, remember that they need to be up top
// Very simply, this is nothing new, just a little different syntax
function say_Something() { // Common practice has a combination of snake and camel case
    echo "Hello World!<br>";
}
// Function parameters work like normal as well
// Return is the same
function calculate($num1, $num2) { // Args are just like python, no specification -> must check
    return $num1 + $num2;
} 
/* Overloaded functions is not supported :(
function calculate($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}
 */

say_Something(); // Call like normal
echo calculate(25, 40); // We like compounding things... all is well!

?>

</body>
</html>
