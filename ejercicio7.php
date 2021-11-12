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

    include "ejercicio6BBDD.php";

    $usuario = "";
  
    $contrasenia = "";
   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];     

            $usuario = stripslashes($usuario);
            $usuario = strip_tags($usuario);
            $usuario = htmlspecialchars($usuario);

            $contrasenia = stripslashes($contrasenia);
            $contrasenia = strip_tags($contrasenia);
            $contrasenia = htmlspecialchars($contrasenia);
          


           $datos = getUser($usuario);

           if($datos){
               $contraseniaEncr = $datos["contrasenia"];
               $retorno = password_verify($contrasenia,$contraseniaEncr);
               if($retorno){
                   echo "Contraseña correcta";

                   if($perfil == "usuario"){

                    header("location: admin.php");

                   }
               }
               else{
                   echo "Contraseña incorrecta";
               }
           }
           else{
               echo "Usuario o contraseña incorrecto";
           }
    }
    

?>
<div class="wrapper">
<div class="container">
    <h1>REGISTRO</h1>
    
    <form class="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

        <input class="input" type="text" name="usuario" placeholder="usuario" value = "<?php echo $usuario;?>">
        <input class="input" type="password" name="contrasenia" placeholder="contraseña">
        <button type="submit" id="login-button">Entrar</button>
        
    </form>
</div>
</body>
</html>