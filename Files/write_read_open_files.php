<?php

// Writing, Reading, and Opening Files in PHP
// First opent eh file
// SAME AS C************
$file = "example.txt";

// **Make sure the server has the right to write to files
// Not a problem for windows users
if ($fh = fopen($file, 'w')) {
    // Use fwrite
    // First parameter is the file handle and the second is what you want to write
    fwrite($fh, 'I love PHP so much!');
} else {
    echo 'File could not be opened properly or found';
}
fclose($fh);

// Now lets read from the file we just wrote to
if ($fh = fopen($file, 'r')) {
    // The second parameter for fread is the bytecount
    // PHP filesize function returns the size of the file in bytes with 
    // parameter, string, -> the name of file
    $contents = fread($fh, filesize($file)); // char is one byte in PHP
    echo $contents;
}
fclose($fh);

// Now let's delete the file
// Use the unlink function
// It takes on parameter, string, -> the name of the file to delete
unlink($file);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
