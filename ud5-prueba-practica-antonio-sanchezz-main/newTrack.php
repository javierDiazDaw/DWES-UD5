<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva canción</title>
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

      $error = "";
      $id = $_GET['id'];
  
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $album = $_GET['id'];
        $mediaType = $_POST['media'];
        $genero = $_POST['genero'];
        $compositor = $_POST['compositor'];
        $milisegundos = $_POST['milisegundos'];
        $bytes = $_POST['bytes'];
        $precio = $_POST['precio'];
        
        insertarCancion($nombre, $album, $mediaType, $genero, $compositor, $milisegundos, $bytes, $precio);

      }
  
      ?>
      <body>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF'] . "?id=" . $id); ?>" method="POST">
        <p>Nombre de la cancion:
          <input type="text" name="nombre" required>
        </p>
        <p>Compositor:
          <input type="text" name="compositor" required>
        </p>
        <p>Media:
          <input type="number" name="media" required>
        </p>
        <p>Genero:
          <input type="number" name="genero" required>
        </p>
        <p>Milisegundos:
          <input type="number" name="milisegundos" required>
        </p>
        <p>Bytes:
          <input type="number" name="bytes" required>
        </p>
        <p>Precio/u:
          <input type="number" name="precio" required>
        </p>
        <input type="submit" value="Añadir">
      </form>
</body>
</html>