<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div>
        <p>Se ha creado la tabla usuarios, que contiene el nombre de usuario, la contraseña guardada de forma segura y el rol del usuario.</p>
        <p>(admin) antonio:developer</p>
        <p>(artista) Aerosmith:developer</p>
        <p>(cliente) javi:developer</p>
    </div>
    <?php

session_start();

require_once("databaseManager.inc.php");

$error = "";
$user = "";
$password = "";

// Comprobamos las credenciales y realizamos la redireccion oportuna.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $password = $_POST['pass'];
    
    if (login($_POST['username'], $_POST['pass'])) {
        $user = getUser($_POST['username']);
        $_SESSION['rol'] = $user ['rol'];
        if ($_SESSION['rol'] == "artista") {
            $_SESSION['id_artista'] = obtenerIdArtista($user['username']);
            header("Location: albumList.php");
        } else {
            header("Location: playLists.php");
        }
        
    } else {
        $error = "<p style='color:red'>Contraseña incorrecta.</p>";
    }
    
}

?>
<h2>Iniciar sesión</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="container">
            <label><b>Nombre de usuario</b></label>
            <p><input type="text" placeholder="Introduzca su usuario" name="username" value="<?php echo $user ?>"required/></p>
            <label><b>Contraseña</b></label>
            <p><input type="password" placeholder="Introduzca su contraseña" name="pass" value="<?php echo $password?>" required/></p>
            <button type="submit">Iniciar Sesion</button>
            <div><?php echo $error?></div>
        </div>
    </form>
</body>
</html>