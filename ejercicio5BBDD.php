
    <?php

        $servidor = "localhost";
        $baseDatos = "autenticacion";
        $user = "developer";
        $pass = "developer";
        
        function insertarDatos($usuario, $contrasenia, $cuentaBancaria, $perfil){

            try {

                $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
                $consulta =$conexion->prepare("INSERT INTO registro (usuario, contrasenia, cuentaBancaria, perfil) VALUES (?,?,?,?)");
                $consulta->bindParam(1,$usuario);
                $consulta->bindParam(2,$contrasenia);
                $consulta->bindParam(3,$cuentaBancaria);
                $consulta->bindParam(4,$perfil);                
                $consulta->execute();
                return $conexion->lastInsertId();            
                
            } catch(PDOException $e){
                echo "Conexion fallida: " . $e ->getMessage();
            }

        }

       

    ?>
