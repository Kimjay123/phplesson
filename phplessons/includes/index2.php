<?php
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
    $data = "kimjay123a";
    //Created a template
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    //Create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Statement Failed!";
    } else {
        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }
    }
?>

</body>
</html>