<!-- We need to set the session at the start of the file 
- Session start needs to be on every page that you use session on -->
<?php session_start();

// Sessions in PHP
// These can be used to carry values and possibly personalize certain aspects of your program
// You can save a lot of data using sessions
// WE use the $_SESSION super global to do what we want and we can assign values so that 
// we can carry over data

// This is session 2
echo $_SESSION['greeting'];

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
