<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// Global and Local Scope in PHP
// This is like python...
$x = "outside";

echo $x . "<br>";

function convert() {
    global $x; // Must use the global keyword to make that var available inside the function
    $x = "inside"; // Without global keyword, this var is local to function
}

convert();
echo $x;

?>

</body>
</html>
