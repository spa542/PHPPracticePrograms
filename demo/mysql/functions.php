<?php
include "db.php";

function createRows() {
    global $connection;
    // Get the information from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // This is to avoid an sql injection
    // The first argument is the connection and the second argument is the string you want to clean
    // It returns a 'Sanitized' string
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Now we want to encrypt our password for more security
    // Read the PHP documentation to understand what type of salt and prefix is needed to get what hash
    $hashFormat = "$2y$10$"; // This will run 10 times --> $0$
    $salt = "iusesomecrazystrings22"; // Need at least 22 characters for this hash
    $hashSalt = $hashFormat . $salt; // Need to concatenate the hash format and the salt
    // Use crypt function to encrypt once everything is set
    // First argument is the password to encrypt and the second argument is the hashFormat and salt combo
    // The crypt function returns your encrypted password
    $password = crypt($password, $hashSalt);

    // Make sure that the information is there
    if ($username && $password) { // This is a way to use it when the variable has no default value
        // Now to connect to the mysql database
        // The default username is root and the default password is empty
        // Params: host/domain name, username, password, database name
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if ($connection) {
            // This is not needed for full use
            // echo 'We are connected';
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

function readRows() {
    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function showAllData() {
    // Must set the connection as global because the connection is global in the 
    // db.php file
    global $connection;
    // Create our query
    $query = "SELECT * FROM users";

    // Submit our query
    // In order for this to work, we need our connection which is in db.php
    $result = mysqli_query($connection, $query); 

    if (!$result) {
        // Use concatenation operator here NOT A COMMA -> only one arg for die()
        die('Query failed' . mysqli_error($connection)); // Added the mysql error to know what went wrong
    } 

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    } 

}

function updateTable() {
    global $connection;

    // Get the information
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $id = $_POST['id'];

    // Create the query
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    // Submit the query
    $result = mysqli_query($connection, $query);
    // Check if the query went through or not
    if (!$result) {
        die('Query failed :(' . mysqli_error($connection));
    } else {
        echo "Update Successful";
    }
}

function deleteRows() {
    global $connection;

    // Get the information
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $id = $_POST['id'];

    // Create the query
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    // Submit the query
    $result = mysqli_query($connection, $query);
    // Check if the query went through or not
    if (!$result) {
        die('Query failed :(' . mysqli_error($connection));
    } else {
        echo "Row Deletion Successful";
    }

}

?>
