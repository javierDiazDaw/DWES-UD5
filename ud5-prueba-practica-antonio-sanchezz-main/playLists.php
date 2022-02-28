<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de reproducción</title>
</head>
<body>
    <?php

session_start();

$nombre = "";

if(!empty($_COOKIE['Nombre'])) {
    $nombre = $_COOKIE['Nombre'];
}

require_once("databaseManager.inc.php");

  if ($_SESSION['rol'] == "cliente") {
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $listas = listas();
    echo '<table border="1">';
        echo'<tr>';
            echo'<th>Título</th>';
        echo'</tr>';
    foreach ($listas as $lista) {
        echo'<tr>';
            echo'<td>' . $lista['Name'] . '</td>';
        echo'</tr>';
    }
    echo '</table>';
    echo '<br>';
    } else {
        setcookie("Nombre", $_POST['nombre']);
        $listas = listaFiltrada($_POST['nombre']);
        echo '<table border="1">';
        echo 	'<tr>';
        echo 		'<th>Título</th>';
        echo 	'</tr>';
        foreach ($listas as $lista) {
            echo 	'<tr>';
            echo 		'<td>' . $lista['Name'] . '</td>';
            echo 	'</tr>';
        }
        echo '</table>';
        echo '<br>';
    }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

    <p>Nombre de la playlist:
          <input type="text" name="nombre" value="<?php echo $nombre;?>" required>
          <input type="submit" value="Buscar">
    </p>

    </form>

    <?php } else if ($_SESSION['rol'] == "administrador") {
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        $listas = listas();
        echo '<table border="1">';
        echo 	'<tr>';
        echo 		'<th>Título</th>';
        echo 	'</tr>';
        foreach ($listas as $lista) {
            echo 	'<tr>';
            echo 		'<td><a href="trackList.php?id=' . $lista['PlaylistId'] . '">' . $lista['Name'] . '</a></td>';
            echo 	'</tr>';
        }
        echo '</table>';
        echo '<br>';
        } else {
        }
    }
    
    ?>

  
</body>
</html>