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
    
    session_start();
    $_SESSION["nombre"] = "Javier";
    $_SESSION["edad"] = 23;
    /*print "<p>El nombre es $_SESSION[nombre]</p>";
    print "<p>Se ha guardado su nombre.</p>\n";*/

    echo session_id();

    
?>
</body>
</html>