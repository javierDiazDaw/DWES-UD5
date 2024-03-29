
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<?php
    include "ejercicio6BBDD.php";   

    $errorUsuario = "";
    $correcto = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST["usuario"];
        $usuario = strip_tags($usuario);
        $usuario = stripslashes($usuario);
        $usuario = htmlspecialchars($usuario);

        $contrasenia = $_POST["contrasenia"];
        $contrasenia = strip_tags($contrasenia);
        $contrasenia = stripslashes($contrasenia);
        $contrasenia = htmlspecialchars($contrasenia);
        
        $usuario=getUser($usuario);
        if ($usuario==false) {
            $errorUsuario = "Usuario incorrecto";
        } else{
            $contraseniaEncr = $usuario["contrasenia"];
            if(password_verify($contrasenia,$contraseniaEncr)){
                $correcto = "Usuario y contraseña correctas";
                //session_destroy();
                session_start();
                $_SESSION["perfil"]=$usuario["perfil"];
                //setcookie("session", $_SESSION, time()+3600*3,"","");
                
                if ($usuario["perfil"]=="admin"){
                    //echo "eres el jefe supremo";
                    header("Location: admin.php");
                }else if($usuario["perfil"]=="usuario"){
                    //echo "hola pringao";
                    header("Location: usuario.php");    
                }
            }else{
                $error = "Usuario o contraseña incorrecto";
            }    
        } 
    }
?>
<body>
    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
        <h2 class="form-titulo">Ejercicio 7: registro</h2>
        <div class="contenedor-inputs">
            <input type="text" name="usuario" placeholder="Usuario" class="input-100" required>
            <input type="password" name="contrasenia" placeholder="Contraseña" class="input-100" required>
            <input type="submit" value="Registrar" class="btn-enviar" >
            <div id="errores"><?php echo $errorUsuario, $error, $correcto?></div>
        </div>
    </form>
</body>

</html>