<?php
// THIS FILE IS A CONTINUATION OF THE LOGIN.PHP FILE FOR FUTURE LEARNING PURPOSES
// I don't want things to get too cluttered in one file when looking back

// Check if there is information is submitted
if (isset($_POST['submit'])) {

    // Get the information from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Make sure that the information is there
    if ($username && $password) { // This is a way to use it when the variable has no default value
        // Now to connect to the mysql database
        // The default username is root and the default password is empty
        // Params: host/domain name, username, password, database name
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if ($connection) {
            echo 'We are connected';
        } else {
            // Kill the executing code and fail the database
            die('Database connection failed');
        }

        // Create our query
        $query = "INSERT INTO users(username, password)";
        // Concatenate string to same variable operator
        $query .= "VALUES ('$username', '$password')"; // This is bad practice **SQL INJECTION

        // Now use our insert query
        // Params: Connection, query string
        // Good to check what the return result of the query
        $result = mysqli_query($connection, $query); 

        if (!$result) {
            // Use concatenation operator here NOT A COMMA -> only one arg for die()
            die('Query failed' . mysqli_error()); // Added the mysql error to know what went wrong
        } else {
            echo 'Successful query insertion';
        }
        
    } else {
        echo 'This field cannot be blank';
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title> 
    <!-- Using bootstrap cached import -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<!-- Gonna have to read up on a lot of bootstrap classes for styling and html formatting.
These things go hand in hand with PHP and will be learned as I go along -->
<div class="container">
    
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

</div>

</body>
</html>
