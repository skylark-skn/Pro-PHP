<?php
    require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php
            echo('<script>alert("This is Dangerous !")</script>');
            echo(e('<script>alert("This is Safe !")</script>'));
        ?>
    </h2>
</body>
</html>