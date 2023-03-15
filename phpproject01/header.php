<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
    <link rel="icon" href="../includes/icon.png">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <ul>
                <a href="index.php"><img src="includes/home.jpg"></a>
                <p><img src="includes/welcome.png"></p>
                <?php
                    session_start();
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='logout.php'>Log out</a></li>";
                        
                    }
                    else {
                        echo "<li><a href='signup.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>Log in</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

<div class="wrapper">