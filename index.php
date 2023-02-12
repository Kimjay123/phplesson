<!DOCTYPE html>
<html>
    <head></head>
    <title>Hello Kim Jay!</title>
    <body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>
    <?php
        $name = $_GET["person"];
        echo $name. " Gwapo";
    ?>
    </body>
</html>