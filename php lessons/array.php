<!DOCTYPE html>
<html>
    <head>
        <title>Hello Kim Jay!</title>
        <link rel="stylesheet" href="array.css">
    </head>
    <body>
        <h1>Type a name!</h1>
        <form>
            <input type="text" name="name1" placeholder="Name 1"><br>
            <input type="text" name="name2" placeholder="Name 2"><br>
            <input type="text" name="name3" placeholder="Name 3"><br>
            <input type="text" name="name4" placeholder="Name 4"><br>
            <input type="text" name="name5" placeholder="Name 5"><br>
            
            <input type="submit" name="choice" value="Odd">
            <input type="submit" name="choice" value="Even">
            <input type="submit" name="choice" value="All">
        </form>
        <h2>Results:</h2>
        <?php
        $arr = [];

        if (isset($_GET['choice'])) {
            $choice = $_GET['choice'];

            $arr[0] = $_GET['name1'];
            $arr[1] = $_GET['name2'];
            $arr[2] = $_GET['name3'];
            $arr[3] = $_GET['name4'];
            $arr[4] = $_GET['name5'];

            if ($choice == "Odd") {

                for ($kj = 0; $kj < 5; $kj++)
                {
                    if ($kj % 2 == 0)
                    {
                    echo $arr[$kj]."<br>";
                    }
                }

            }

            if ($choice == "Even") {

                for ($kj = 0; $kj < 5; $kj++)
                {
                    if ($kj % 2 != 0)
                    {
                        echo $arr[$kj]."<br>";
                    }
                }

            }
            
            if ($choice == "All") {

                for ($kj = 0; $kj < 5; $kj++)
                {
                    echo $arr[$kj]."<br>";
                }

            }
        }
        ?>
    </body>
</html>