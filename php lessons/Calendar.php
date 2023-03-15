<!DOCTYPE html>
<html>
    <head>
        <title>Hello Kim Jay!</title>
    </head>
    <body>
    <?php
        $dayofweek = date("w");
        
        switch ($dayofweek) {
            case 1:
                echo "<p>Karun kay Lunes!</p>";
                break;
            case 2:
                echo "<p>Karun kay Martes!</p>";
                break;
            case 3:
                echo "<p>Karun kay Merkules!</p>";
                break;
            case 4:
                echo "<p>Karun kay Huybes!</p>";
                break;
            case 5:
                echo "<p>Karun kay Bernes!</p>";
                break;
            case 6:
                echo "<p>Karun kay Sabado!</p>";
                break;
            case 0:
                echo "<p>Karun kay Dominggo!</p>";
                break;
        }
    ?>
    </body>
</html>