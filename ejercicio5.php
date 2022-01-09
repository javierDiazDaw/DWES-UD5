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

    include"ejercicio5BBDD.php";

    $usuario = "";   
    $contrasenia = "";   
    $cuentaBancaria = "";
   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario=$_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];
        $cuentaBancaria = $_POST["cuentaBancaria"];
        $perfil = $_POST["perfil"];

        
            $usuario = stripslashes($usuario);
            $usuario = strip_tags($usuario);
            $usuario = htmlspecialchars($usuario);

            $perfil = stripslashes($perfil);
            $perfil = strip_tags($perfil);
            $perfil = htmlspecialchars($perfil);

            $contrasenia = stripslashes($contrasenia);
            $contrasenia = strip_tags($contrasenia);
            $contrasenia = htmlspecialchars($contrasenia);
            //Para encriptar la contraseña y que no aparezca en la base de datos
            $contrasenia = password_hash($contrasenia,PASSWORD_DEFAULT);

            $cuentaBancaria = stripslashes($cuentaBancaria);
            $cuentaBancaria = strip_tags($cuentaBancaria);
            $cuentaBancaria = htmlspecialchars($cuentaBancaria);

            insertarDatos($usuario, $contrasenia, $cuentaBancaria, $perfil);
    } 

    ?>
    <div class="wrapper">
    <div class="container">
        <h1>REGISTRO</h1>
        
        <form class="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

            <input class="input" type="text" name="usuario" placeholder="usuario" >
            <input class="input" type="password" name="contrasenia" placeholder="contraseña">
            <input class="input" type="text" name="cuentaBancaria" placeholder="Cuenta bancaria" >
            <input class="input" type="text" name="perfil" placeholder="Perfil" >
            <button type="submit" id="login-button">Entrar</button>
            
        </form>
    </div>
</body>
</html>