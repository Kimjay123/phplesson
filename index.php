<!DOCTYPE html>
<html>
    <head></head>
    <title>Hello Kim Jay!</title>
    <link rel="stylesheet" href="index.css">
    <body>
    <form>
        <input type="text" name="first">
        <input type="text" name="second">
        <button id="button">SUBMIT</button>
    </form>
    <?php
    $first = $_GET["first"];
    $second = $_GET["second"];

    if($first == $second) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    ?>
    </body>
</html>