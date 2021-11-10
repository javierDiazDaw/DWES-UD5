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
    $errorusuario = "";
    $contrasenia = "";
    $errorcontrasenia = "";
    $cuentaBancaria = "";
    $errorcuentaBancaria = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario=$_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];
        $cuentaBancaria = $_POST["cuentaBancaria"];

        if (empty($usuario)){
            $errorusuario = "Este campo debe estar relleno";
        } else{
            $errorusuario = "";
           
        } 


        if (empty($contrasenia)){
            $errorcontrasenia = "Este campo debe estar relleno";
        } else{
    
             $errorcontrasenia = "";
            
        } 

        if (empty($cuentabancaria)){
            $erroruentabancaria = "Este campo debe estar relleno";
        } else{
    
             $errorcuentabancaria = "";
            
        }       

            $usuario = stripslashes($usuario);
            $usuario = strip_tags($usuario);
            $usuario = htmlspecialchars($usuario);

            $contrasenia = stripslashes($contrasenia);
            $contrasenia = strip_tags($contrasenia);
            $contrasenia = htmlspecialchars($contrasenia);
            $contrasenia = password_hash($contrasenia,PASSWORD_DEFAULT);

            $cuentaBancaria = stripslashes($cuentaBancaria);
            $cuentaBancaria = strip_tags($cuentaBancaria);
            $cuentaBancaria = htmlspecialchars($cuentaBancaria);

            instertarDatos($usuario, $contrasenia, $cuentaBancaria);
    }

    

?>
<div class="wrapper">
<div class="container">
    <h1>REGISTRO</h1>
    
    <form class="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

        <input class="input" type="text" name="usuario" placeholder="usuario" value = "<?php echo $usuario;?>">
        <input class="input" type="password" name="contrasenia" placeholder="contraseña">
        <input class="input" type="text" name="cuentaBancaria" placeholder="Cuenta bancaria" value = "<?php echo $cuentaBancaria;?>">
        <button type="submit" id="login-button">Entrar</button>
        
    </form>
</div>
</body>
</html>