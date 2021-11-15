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

        if (empty($_SESSION["perfil"])) {
            header("Location: ejercicio7.php");    
        }else if ($_SESSION["perfil"]=="admin") {
            echo"Eres el jefe supremo, ¿no quieres ir a tu pagina?";    
        }else{
            echo "hola pringao";
        }
    ?>


    <a href= "cierraSesion.php">Eliminar sesion</a>
</body>
</html>


