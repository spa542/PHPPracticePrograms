<?php

// isset determines if a variable is declared and si different than NULL
if (isset($_POST['submit'])) { // This checks the value in the associative array
     
    // This would usually be in a database to check for usernames
    $name = array("Ryan", "Travis", "Keith", "James", "Robert", "Maria");
    // Set max and min lengths
    $minimumUserLength = 5;
    $maximumUserLength = 12;
    echo 'The submit button was pressed!' . "<br>";
    $username = $_POST['username']; // Get the values just like above
    $password = $_POST['password']; // You need to make sure form data has a name attribute!!
    //echo $username . "<br>" . $password . "<br>";

    // Now we should validate the data
    if (strlen($username) < $minimumUserLength) { 
        // You can style this message directly
        echo 'Username has to be longer than ' . $minimumUserLength . ' characters';
    }
    if (strlen($username) > $maximumUserLength) {
        echo 'Username cannot be longer than ' . $maximumUserLength . ' characters';
    }
    // Use in_array function to check if a value is within an array
    if (in_array($username, $name)) {
        echo 'Welcome!<br>';
    } else {
        echo 'Sorry, you are not allowed in!<br>';
    }
}

?>
