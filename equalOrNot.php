<!DOCTYPE html>
<html>
    <head></head>
    <title>Hello Kim Jay!</title>
    <body>
    <form method="GET">
        <input type="text" name="number1">
        <input type="text" name="number2">
        <button>SUBMIT</button>
    </form>
    <?php
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];

        if ($number1 == $number2) {
             echo "True!";
        }
        else {
            echo "False!";
        }
    ?>
    </body>
</html>