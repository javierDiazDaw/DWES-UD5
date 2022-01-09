<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones en álbum</title>
</head>
<body>
  <a href="newTrack.php?id=<?php echo $_GET['id']?>">Añadir canción</a>
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

      $canciones = cacionesAlbum($_GET['id']);
      echo '<table border="1">';
      echo 	'<tr>';
      echo 		'<th>Título</th>';
      echo 	'</tr>';
      foreach ($canciones as $cancion) {
          echo 	'<tr>';
          echo 		'<td>' . $cancion['Name'] . '</td>';
          echo 	'</tr>';
      }
      echo '</table>';
      echo '<br>';

      ?>
</body>
</html>