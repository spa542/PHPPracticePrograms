<?php

// Cookies in PHP
// This is in the super global $_COOKIE associative array
// We want to define a cookie for a user and then save it for later
// This allows us to customize future occurences

$name = "SomeName";
$value = 100;
// Use the PHP time function to get a correct expiration
// Time function is done in seconds, use the current time and add how many seconds we want till
// the expiration date
$expiration = time() + (60*60*24*7);
// Use function setcookie
// The first parameter is the name of the cookie, second is the value of the cookie, and third
// is the expiration date of the cookie
setcookie($name, $value, $expiration);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- We want to get this cookie value -->
<?php

// We want to first find out if this cookie was set
if (isset($_COOKIE['SomeName'])) {

    // We want to get the value of the cookie into a variable
    $someOne = $_COOKIE['SomeName'];
    
    echo $someOne;
    // Very straightforward concept but this idea is clear and concise
    
} else {
    // We don't want PHP to blow up if it doesn't find anything
    $someOne = "";
}

?>

</body>
</html>
