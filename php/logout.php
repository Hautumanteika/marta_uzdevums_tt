<?php
    require_once "db.php"; //connection with database
    unset($_SESSION['logged_user']); //exit from user account
    header('Location: ../index.html'); //transistion to main page
?>
