<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) {
    // Good to go, no message needed here
    //echo 'We are connected';
} else {
    die('Database connection failed');
}

?>
