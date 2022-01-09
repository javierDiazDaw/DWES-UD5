<?php

    global $conn;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=tiendaDiscosII", "developer", "developer");
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
    }

    /*
    * Obtenemos todos los datos del usuario solicitado.
    */
    function getUser($username) {
        try {

            $sqlQuery = "SELECT * FROM usuarios WHERE username = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $username);

            $stmt->execute();

            $user = $stmt->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $user;
    }

    /*
    * Login.
    */
    function login($username, $password) {

        $user = getUser($username);

        // Realizamos la verificacion de la contraseña.
        $result = password_verify($password, $user['password']);

        return $result;
    }

    function obtenerAlbunes($id_artista) {
        try {

            $sqlQuery = "SELECT * FROM album  WHERE ArtistId = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $id_artista);

            $stmt->execute();

            $albunes = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $albunes;
    }

    function obtenerIdArtista($nombre) {
        try {

            $sqlQuery = "SELECT * FROM artist  WHERE Name = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $nombre);

            $stmt->execute();

            $artista = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $artista;
    }

    function cacionesAlbum($id) {
        try {

            $sqlQuery = "SELECT * FROM track  WHERE AlbumId = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $id);

            $stmt->execute();

            $canciones = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $canciones;
    }

    function insertarCancion($nombre, $album, $mediaType, $genero, $compositor, $milisegundos, $bytes, $precio) {
        $execute = false;

        try {
            $sqlQuery = "INSERT INTO track (Name, AlbumId, MediaTypeId, GenreId, Composer, Miliseconds, Bytes, UnitPrice) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
    
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $album);
            $stmt->bindParam(3, $mediaType);
            $stmt->bindParam(4, $genero);
            $stmt->bindParam(5, $compositor);
            $stmt->bindParam(6, $milisegundos);
            $stmt->bindParam(7, $bytes);
            $stmt->bindParam(8, $precio);
    
            $execute = $stmt->execute();
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;
        return $execute;
    }

    function listas() {
        try {

            $sqlQuery = "SELECT * FROM playlist";
            $stmt = $GLOBALS['conn']->query($sqlQuery);

            $lista = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $lista;
    }

    function listaFiltrada($nombre) {
        try {

            $sqlQuery = "SELECT * FROM playlist  WHERE Name = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $nombre);

            $stmt->execute();

            $listas = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $listas;
    }

    function cancionesPlayList($id) {
        try {

            $sqlQuery = "SELECT * FROM playlisttrack pt INNER JOIN track tra ON tra.TrackId = pt.TrackId WHERE PlaylistId = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $id);

            $stmt->execute();

            $canciones = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $canciones;
    }

    function insertarGenero($nombre) {

        try {
            $sqlQuery = "INSERT INTO genre (Name) VALUES (?)";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
    
            $stmt->bindParam(1, $nombre);
    
            $stmt->execute();
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;
    }

    function insertarMedio($nombre) {

        try {
            $sqlQuery = "INSERT INTO MediaTypeId (Name) VALUES (?)";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
    
            $stmt->bindParam(1, $nombre);
    
            $stmt->execute();
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;
    }

    function insertarLista($nombre) {

        try {
            $sqlQuery = "INSERT INTO playlist (Name) VALUES (?)";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
    
            $stmt->bindParam(1, $nombre);
    
            $stmt->execute();
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;
    }

?>