<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php"; ?>
<!-- Gonna have to read up on a lot of bootstrap classes for styling and html formatting.
These things go hand in hand with PHP and will be learned as I go along -->
<div class="container">
    
    <div class="col-sm-6">
        
        <pre>
        <?php
        // Some fun little bootstrap thing, that is why this is sectioned out weird 

        // This is going to fetch a row of the table and assign it to the row variable
        // **Can also use mysqli_fetch_row($result) returns a regular array instead 
        // of an associative array
        // THIS FUNCTION MOVED TO FUNCTIONS.PHP FILE
        readRows(); 
        ?>
        </pre>
        
        </pre>

    </div>
<?php include "includes/footer.php"; ?>
