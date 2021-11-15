<?php
$servidor="localhost";
$baseDatos="agenciaviajes"; 
$user= "developer";
$pass="developer";

function getUser($usuario){

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("SELECT `usuario`,`contrasenya`,`perfil`FROM usuarios WHERE usuario=:usuario");         
        $parametros = array(":usuario"=>$usuario);
        $consulta->execute($parametros);
        $resultado=$consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;

    } catch (PDOException $e) {
        return false;
    }
}
?>

