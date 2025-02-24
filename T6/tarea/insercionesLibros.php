<?php
/**
 * Script para insertar datos en la tabla Libro de la base de datos libros
 * 
 * Este script se conecta a la base de datos y ejecuta una consulta SQL para insertar
 * múltiples registros en la tabla Libro. Si la inserción es exitosa, se muestra un 
 * mensaje de confirmación. Si ocurre un error, se muestra un mensaje de error
 */

// Establecer la conexión a la base de datos
$conn = new mysqli("localhost", "root", "foc_formacion", "libros");

/**
 * Verificar si la conexión a la base de datos fue exitosa
 * Si ocurre algún error, se termina el script y se muestra el mensaje de error
 */
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

/**
 * Consulta SQL para insertar múltiples registros en la tabla Libro
 * 
 * La consulta agrega los siguientes libros:
 * - "El Hobbit" (Publicado en 1937)
 * - "La Comunidad del Anillo" (Publicado en 1954)
 * - "Las dos torres" (Publicado en 1954)
 * - "El retorno del Rey" (Publicado en 1955)
 * - "Un guijarro en el cielo" (Publicado en 1950)
 * - "Fundación" (Publicado en 1951)
 * - "Yo, robot" (Publicado en 1950)
 * 
 * Cada registro tiene un ID, título, fecha de publicación y la referencia al autor 
 */
$query_libros = "
    INSERT INTO libro (id, titulo, f_publicacion, id_autor) VALUES
    (1, 'El Hobbit', '1937-09-21', 1),
    (2, 'La Comunidad del Anillo', '1954-07-29', 1),
    (3, 'Las dos torres', '1954-11-11', 1),
    (4, 'El retorno del Rey', '1955-10-20', 1),
    (5, 'Un guijarro en el cielo', '1950-01-19', 2),
    (6, 'Fundación', '1951-06-01', 2),
    (7, 'Yo, robot', '1950-12-02', 2);
";

/**
 * Ejecutar la consulta SQL para insertar los registros en la tabla Libro
 * 
 * Si la consulta es exitosa, se muestra un mensaje de éxito
 * Si ocurre un error, se muestra el mensaje de error
 */
if ($conn->query($query_libros) === TRUE) {
    echo "Datos insertados correctamente en la tabla libro";
} else {
    echo "Error al insertar datos en la tabla libro: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

