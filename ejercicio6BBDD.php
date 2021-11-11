
    <?php

$servidor = "localhost";
$baseDatos = "autenticacion";
$user = "developer";
$pass = "developer";

function getUser($usuario){

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("SELECT * usuario FROM registro"); 
    
        $consulta->bindParam(1,$usuario);
    
        
        $consulta->execute();
        return $conexion->lastInsertId();
        

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }


}



$conexion = null; //para cerrar conexion

?>
