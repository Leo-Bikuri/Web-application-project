<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['fName']);
    unset($_SESSION['lName']);
    header("Location:login.php");
?>