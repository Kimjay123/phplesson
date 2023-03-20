<?php
    include_once 'header.php';

    if (isset($_SESSION["useruid"])) {
        echo '<p class="msg">This is your profile page ' . $_SESSION["useruid"] . '!</p>';
        }
?>

<h1 class="fyp">This page is empty!</h1>
