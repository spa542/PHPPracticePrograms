<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- Create the form -->
<!-- This will send the information to another PHP file => Go to form_process to see result --> 
<form action="form_process.php" method="post"> <!-- Extract the Post using PHP -->
    <input type="text" name="username" placehold="Enter Username"><br>
    <input type="password" name="password" placehold="Enter Password"><br>
    <input type="submit" name="submit"> <!-- Need name to send data to post variable!!! -->
</form>

</body>
</html>
