<!DOCTYPE html>
<html>
<head>
    <title>Sign up!</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<h1>Sign Up!</h1>
<?php 
    if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
        echo '<p>Successfully signed up</p>';
    }
?>
<form action="signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign up</buttom>
</form>
</body>
</html>