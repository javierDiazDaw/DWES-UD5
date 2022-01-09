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

session_start();

require_once("databaseManager.inc.php");
  // Comprobamos si ya hay una sesion activa.
 if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != "administrador") {
      header("Location: login.php");
    }
  } else {
    header("Location: login.php");
  }

  $listas = cancionesPlayList($_GET['id']);
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

?>
</body>
</html>