<?php
// POST super global in PHP
// Used for getting information from forms
// This has already been demonstrated but this is another small demonstration
if (isset($_POST['name'])) {
    print_r($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="the_post.php" method="post">
    
    <input type="text" name="name">
    <input type="submit">

</form>

</body>
</html>
