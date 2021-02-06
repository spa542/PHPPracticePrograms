<?php

// Using GET in PHP
// Must use the super global $_GET just like $_POST
// Must use print_r to print the array 
print_r($_GET);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- Get request works using links 
 - We want to set this id dynamically though 
 - We can get information from the url, this can be extremely useful -->
    <?php

    // We are going to set the id dynamically by inserting PHP
    $id = 10;
    $button = "CLICK HERE NOW";

    ?>
    <a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>

</body>
</html>
