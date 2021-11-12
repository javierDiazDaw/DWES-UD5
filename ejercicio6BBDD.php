
    <?php

$servidor = "localhost";
$baseDatos = "autenticacion";
$user = "developer";
$pass = "developer";

function getUser($usuario){

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("SELECT * FROM registro WHERE usuario= ?"); 
    
        $consulta->bindParam(1,$usuario);       
        $consulta->execute();
        $retorno = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $retorno;
        

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }


}



$conexion = null; //para cerrar conexion

?>
