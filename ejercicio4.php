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

        echo "<table border = '1'";
                echo "<tr>";
                    echo"<th> nombre </th>";
                    echo"<th> descripcion </th>";
                echo "</tr>";

                echo "<tr>";
                    echo"<td>session.use_cookies</td>";
                    echo"<td>(bool) Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. Por defecto es 1 (habilitado).
                   </td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.use_only_cookies</td>";
                    echo"<td>(bool) Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques 
                    que implican pasar el id de sesión en la URL. Por defecto es 1 (habilitado).</td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.save_handler</td>";
                    echo"<td>(String) Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión. 
                        Por defecto es files.</td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.name</td>";
                    echo"<td>(String) Especifica el nombre de la sesión que se usa como nombre de cookie (archivo). 
                    Sólo debería contener caracteres alfanuméricos. Por defecto es PHPSESSID.</td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.auto_start</td>";
                    echo"<td>(Start) Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición. 
                    Por defecto es 0 (deshabilitado).</td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.cookie_lifetime</td>";
                    echo"<td>(Integer) Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. 
                    El valor 0 significa 'hasta que el navegador se cierre'. </td>";
                echo "</tr>";
                echo "<tr>";
                    echo"<td>session.gc_maxlifetime</td>";
                    echo"<td>(Integer) Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. 
                    La recolección de basura puede suceder durante el inicio de sesiones 
                    (dependiendo de session.gc_probability y session.gc_divisor).</td>";
                echo "</tr>";
        echo "</table>";

    ?>
</body>
</html>