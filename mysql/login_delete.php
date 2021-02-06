<!-- Must include this way so that you do not redeclare functions within this file -->
<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    /*
    include "db.php"; // include other files 
    include "functions.php";
     */
    
    if (isset($_POST['submit'])) {
        // Just some refactoring to a function
        deleteRows();
    }
?>

<?php include "includes/header.php"; ?>
<!-- Gonna have to read up on a lot of bootstrap classes for styling and html formatting.
These things go hand in hand with PHP and will be learned as I go along -->
<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <!-- DONT FORGET TO MAKE THIS THE CORRECT FILE -->
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">

                <!-- I am going to dynamically update specific rows in the table by using 
                a selection of id from the table -->
                <select name="id" id="">
                    <?php
                        // Inject the function to make it easier and nicer to look at
                        showAllData();
                    ?>
                    <!--<option value="">1</option>-->
                </select>

            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Delete">

        </form>
    </div>
<?php include "includes/footer.php"; ?>
