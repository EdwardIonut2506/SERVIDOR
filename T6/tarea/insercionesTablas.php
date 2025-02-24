<?php
/**
 * Script para insertar datos en la tabla Autor de la base de datos libros
 * 
 * Este script se conecta a la base de datos y ejecuta dos consultas SQL para insertar
 * dos registros en la tabla Autor. Si la inserción es exitosa, se muestra un mensaje 
 * de confirmación. Si ocurre un error, se muestra un mensaje de error
 */

// Establecer la conexión a la base de datos
$conn = new mysqli("localhost", "root", "foc_formacion", "libros");

/**
 * Verificar si la conexión a la base de datos fue exitosa
 * Si ocurre algún error, se termina el script y se muestra el mensaje de error
 */
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

/**
 * Consulta SQL para insertar un registro en la tabla Autor para J. R. R. Tolkien.
 * 
 * El registro contiene:
 * - ID: 1
 * - Nombre: 'J. R. R.'
 * - Apellidos: 'Tolkien'
 * - Nacionalidad: 'Inglaterra'
 */
$q1 = "INSERT INTO autor (id, nombre, apellidos, nacionalidad) VALUES 
(1, 'J. R. R.', 'Tolkien', 'Inglaterra')";

/**
 * Consulta SQL para insertar un registro en la tabla Autor para Isaac Asimov
 * 
 * El registro contiene:
 * - ID: 2
 * - Nombre: 'Isaac'
 * - Apellidos: 'Asimov'
 * - Nacionalidad: 'Rusia'
 */
$q2 = "INSERT INTO autor (id, nombre, apellidos, nacionalidad) VALUES 
(2, 'Isaac', 'Asimov', 'Rusia')";

/**
 * Ejecutar la consulta para insertar el primer autor
 * 
 * Si la consulta es exitosa, se muestra un mensaje de éxito
 * Si ocurre un error, se muestra el mensaje de error
 */
if ($conn->query($q1) === TRUE) {
    echo "Datos insertados correctamente en la tabla autor";
} else {
    echo "Error al insertar datos en la tabla autor: " . $conn->error;
}

/**
 * Ejecutar la consulta para insertar el segundo autor
 * 
 * Si la consulta es exitosa, se muestra un mensaje de éxito
 * Si ocurre un error, se muestra el mensaje de error
 */
if ($conn->query($q2) === TRUE) {
    echo "Datos insertados correctamente en la tabla autor";
} else {
    echo "Error al insertar datos en la tabla autor: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
