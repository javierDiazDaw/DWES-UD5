
    <?php

        $servidor = "localhost";
        $baseDatos = "autenticacion";
        $user = "developer";
        $pass = "developer";
        
        function instertarDatos($usuario, $contrasenia, $cuentaBancaria){

            try {
                $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
                echo "Conectado correctamente";
                echo"<br>";
                $consulta =$conexion->prepare("INSERT INTO resgistro (usuario, contrasenia, cuentaBancaria) VALUES (?,?,?)");
            
                $consulta->bindParam(1,$usuario);
                $consulta->bindParam(2,$contrasenia);
                $consulta->bindParam(3,$cuentaBancaria);
                
                $consulta->execute();
                return $conexion->lastInsertId();
                

            } catch(PDOException $e){
                echo "Conexion fallida: " . $e ->getMessage();
            }

        }

        $conexion = null; //para cerrar conexion

    ?>
