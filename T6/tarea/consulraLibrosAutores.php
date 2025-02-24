<?php
/**
 * Conexión a la base de datos y visualización de autores y sus libros
 * 
 * Este script se conecta a una base de datos y muestra una lista de autores junto con sus libros publicados
 */

// Definición de las credenciales de la base de datos
$servidor = "localhost";
$base_de_datos = "libros";
$usuario = "root";
$contraseña = "foc_formacion";

/**
 * Establece la conexión con la base de datos utilizando MySQLi
 * 
 * @var mysqli $conexion Conexión a la base de datos
 */
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

// Verificación de errores en la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

/**
 * Consulta para obtener todos los autores registrados en la base de datos
 * 
 * @var string $queryAutores Consulta SQL para seleccionar todos los autores
 * @var mysqli_result $resultadoAutores Resultado de la ejecución de la consulta
 */
$queryAutores = "SELECT * FROM autor";
$resultadoAutores = $conexion->query($queryAutores);

// Verificación de que hay autores en la base de datos
if ($resultadoAutores->num_rows > 0) {
    // Muestra el título principal
    echo "<h1>Lista de Autores y sus libros:</h1>";

    // Iterar sobre cada autor en el resultado
    while ($autor = $resultadoAutores->fetch_object()) {
        // Mostrar la información del autor
        echo "<div class='autor'>";
        echo "<h2>" . htmlspecialchars($autor->nombre) . "</h2>"; // Nombre del autor
        echo "<p>ID: " . htmlspecialchars($autor->id) . "</p>"; // ID del autor

        /**
         * Consulta para obtener los libros publicados por el autor actual
         * 
         * @var string $queryLibros Consulta SQL para seleccionar los libros de un autor específico
         * @var mysqli_result $resultadoLibros Resultado de la ejecución de la consulta
         */
        $queryLibros = "SELECT * FROM libro WHERE id_autor = " . $autor->id;
        $resultadoLibros = $conexion->query($queryLibros);

        // Verificación de que hay libros asociados al autor
        if ($resultadoLibros->num_rows > 0) {
            echo "<h3>Libros publicados:</h3>";
            echo "<ul>"; // Lista de libros

            // Iterar sobre cada libro
            while ($libro = $resultadoLibros->fetch_object()) {
                echo "<li>" . htmlspecialchars($libro->titulo) . "</li>"; // Título del libro
            }

            echo "</ul>"; // Cierre de la lista de libros
        } else {
            echo "<p>No se encontraron libros para este autor.</p>"; // Mensaje si no hay libros
        }

        echo "</div><hr>"; // Cierre del bloque del autor
    }
} else {
    // Mensaje si no se encuentran autores
    echo "<p>No se encontraron autores.</p>";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>


