<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_COOKIE["nombrecookie"];
    echo"<br>";
    echo $_COOKIE["edadcookie"];
    echo "<br>";
    print_r($_COOKIE);
    echo"<br>";
    echo $_COOKIE["nombrecookie"]. " tiene" . $_COOKIE["edadcookie"]. " años.";



    ?>
</body>
</html>