<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inicio</title>
</head>
<body>
    <?php

        session_start();

        if (isset($_SESSION['tipo'])) {
            session_unset();
            session_destroy();
        }



    ?>
        <h2>Has Cerrado Sesion correctamente</h2>
    </body>
</html>