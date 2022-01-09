<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de creación</title>
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            if (isset($_POST['genero'])) {
                insertarGenero($_POST['genero']);
            }

            if (isset($_POST['medio'])) {
                insertarMedio($_POST['medio']);
            }

            if (isset($_POST['lista'])) {
                insertarLista($_POST['lista']);
            }
        
        }

        ?>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Genero:
          <input type="text" name="genero" required>
        </p>
        <input type="submit" value="Añadir">
      </form>


      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Medio:
          <input type="text" name="medio" required>
        </p>
        <input type="submit" value="Añadir">
      </form>


      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Lista de reproducción:
          <input type="text" name="lista" required>
        </p>
        <input type="submit" value="Añadir">
      </form>


</body>
</html>