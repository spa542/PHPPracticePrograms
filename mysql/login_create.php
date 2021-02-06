<?php include "db.php";?>
<?php include "functions.php";?>
<?php 
// THIS FILE IS A CONTINUATION OF THE LOGIN.PHP FILE FOR FUTURE LEARNING PURPOSES
// I don't want things to get too cluttered in one file when looking back

// Check if there is information is submitted
if (isset($_POST['submit'])) {
    createRows();
}

?>
<!-- Include the Header HTML of the file -->
<?php include "includes/header.php" ?>
<!-- Gonna have to read up on a lot of bootstrap classes for styling and html formatting.
These things go hand in hand with PHP and will be learned as I go along -->
<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Create">

        </form>
    </div>
<?php include "includes/footer.php" ?>
