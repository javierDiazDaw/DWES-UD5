# PruebaPracticaUD5
UD5-Prueba práctica, Desarrollo Web Entorno Servidor, UD5. PHP - Autenticación, sesión y cookies.

Esta prueba está valorada en un total de 7 puntos, ya que corresponde con el 70% de la unidad y se desarrollará durante 1 hora y media, siendo estimado un tiempo de dedicación de:
  - Ejercicio 1: 15 minutos.
  - Ejercicio 2: 45 minutos.
  - Ejercicio 3: 30 minutos.
  - Ejercicio 4: 30 minutos.

Antes de comenzar ten en cuenta que:
  - Deberás crear la base de datos con la que vamos a trabajar de acuerdo al fichero ***scriptDatabaseCreation.sql***.
  - Todas las consultas se deben realizar a través de funciones codificadas en el fichero ***databaseManager.inc.php***.
  - Todas las consultas se deben realizar a través de PHP Data Objects.

# Ejercicio 1 - Login usuarios (1,15 puntos).
Elabora los scripts PHP necesarios para desarrollar la siguiente funcionalidad en el fichero ***login.php***:
- **(0,5 puntos)** Modifica la base de datos con los cambios necesarios para que se pueda loguear diferentes tipos de usuarios, concretamente diferenciaremos entre clientes, administradores y artistas, estos usuarios se loguearán mediante un nombre de usuario y una contraseña almacenada de forma segura, además para los artistas deberemos conocer el id del artista al que hace referencia. Almacena al menos un usuario de cada tipo que te permitan hacer pruebas a posteriori.
- **(0,15 puntos)** Describe en un parrafo en el fichero **login.php** los cambios realizados en la base de datos, además añade las credenciales de al menos un usuario de cada tipo.
- **(0,5 puntos)** Elabora un formulario de login de forma que, a partir del nombre de usuario y contraseña se evalue:
    - Si el usuario no es correcto se mostrará un mensaje de error.
    - Si el usuario es correcto se redigirá a:
      - Artistas: **albumList.php**.
      - Clientes y administadores: **playLists.php**.
# Ejercicio 2 - Detalles del artista (2,65 puntos).
Elabora los scripts PHP necesarios para desarrollar la siguiente funcionalidad en el fichero ***albumList.php***:
- **(0,2 puntos)** Solo los artistas podrán acceder a dicha página.
- **(0,4 puntos)** Cada artista podrá ver su lista de álbumes (tabla album).
- **(0,8 puntos)** A través de un enlace en el nombre del álbum que redirige a la página **trackAlbum.php**, podrá ver la lista de canciones del álbum concreto (tabla track), es evidente que solo los artistas podrán acceder a esta funcionalidad.
- **(1,25 punto)** Los artistas podrán crear canciones en el fichero **newTrack.php** de acuerdo a la base de datos, a este fichero se accede desde **trackAlbum.php**, por lo tanto la canción creada pertenecerá a ese álbum, es evidente que solo los artistas podrán acceder a esta funcionalidad.
# Ejercicio 3 - Listas de reproducción para usuarios (1,55 puntos)
Elabora los scripts PHP necesarios para desarrollar la siguiente funcionalidad en el fichero ***playLists.php*** para los usuarios:
- **(0,35 puntos)** Los usuarios podrán ver una tabla con todos los nombres de las listas de reproducción diponibles (tabla playlist).
- **(0,55 puntos)** Los usuarios podrán filtrar en la tabla a través del nombre de la play list.
- **(0,65 puntos)** En caso de que se filtre, utiliza una cookie para que se almacene el texto por el que se filtra, mostrando de nuevo filtrado la tabla si se vuelve a visitar la página.
# Ejercicio 4 - Listas de reproducción para administradores (1,65 puntos)
Elabora los scripts PHP necesarios para desarrollar la siguiente funcionalidad en el fichero ***playLists.php*** para los administradores:
- **(1,15 puntos)** Los administradores verán LA MISMA TABLA que los usuarios con las listas de reproducción disponible (tabla playlist), para los administradores se incluye un enlace en el nombre que redirige a **trackList.php** donde se podrá ver la lista de canciones (solo nombre) de esa lista de reproducción.
- **(0,5 puntos)** Los administradores podrán crear nuevos géneros (tabla genre), tipos de medios (tabla mediatype) y listas de reproducción (tabla playlist) a través de 3 formularios ubicados en el fichero **configuration.php**.

RECUERDA:
NO HAGAS NADA QUE NO SE PIDA EXPLÍCITAMENTE, EL TIEMPO ESTÁ AJUSTADO PARA REALIZAR LO QUE SE PIDE.
AÑADE EL SCRIPT DE BBDD COMPLETO PARA QUE EL PROFESOR PUEDA IMPORTARLO Y PROBAR.