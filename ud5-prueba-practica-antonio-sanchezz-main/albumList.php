<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de álbumes</title>
</head>
<body>
<?php
    session_start();

    require_once("databaseManager.inc.php");
      // Comprobamos si ya hay una sesion activa.
     if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] != "artista") {
          header("Location: login.php");
        }
      } else {
        header("Location: login.php");
      }

    $albunes = obtenerAlbunes($_SESSION['id_artista'][0]['ArtistId']);
    echo '<table border="1">';
    echo 	'<tr>';
    echo 		'<th>Título</th>';
    echo 	'</tr>';
    foreach ($albunes as $album) {
        echo 	'<tr>';
        echo 		'<td><a href="trackAlbum.php?id=' . $album['AlbumId'] . '">' . $album['Title'] . '</a></td>';
        echo 	'</tr>';
    }
    echo '</table>';
    echo '<br>';
    ?>
</body>
</html>