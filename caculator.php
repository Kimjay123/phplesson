<!DOCTYPE html>
<html>
    <head>
        <title>Hello Kim Jay!</title>
    </head>
    <body>
        <h1>Basic and Simple Calculator</h1>
        <h5>By: Kim Jay</h5>
    <form>
        <input type="text" name="number1" placeholder="Number 1">
        <input type="text" name="number2" placeholder="Number 2"><br>
    <select name="operator">
        <option>None</option>
        <option>Addition</option>
        <option>Subtraction</option>
        <option>Multiplication</option>
        <option>Division</option>
    </select><br>
    <button type="submit" name="submit" value="value">Calculate</button>
    </form>
    <h2>The answer is:</h2>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['number1'];
        $result2 = $_GET['number2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "You need to select a method!";
            break;
            case "Addition":
                echo $result1 + $result2;
            break;
            case "Subtraction":
                echo $result1 - $result2;
            break;
            case "Multiplication":
                 echo $result1 * $result2;
            break;
            case "Division":
                echo $result1 / $result2;
            break;
        }
    }
    ?>
    </body>
</html>