<?php
/**
 * Script que crea las tablas de Autor y Libro en la base de datos libros
 * 
 * Establece una conexión con la base de datos y crea las tablas necesarias para almacenar 
 * información sobre los autores y sus libros. Si las tablas ya existen, muestra un mensaje 
 * de error
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
 * Consulta SQL para crear la tabla Autor
 * 
 * La tabla incluye los siguientes campos:
 * - id: Identificador único del autor
 * - nombre: Nombre del autor
 * - apellidos: Apellidos del autor
 * - nacionalidad: Nacionalidad del autor
 */
$sql_autor = "CREATE TABLE Autor (
    id INT AUTO_INCREMENT PRIMARY KEY,    // ID del autor, autoincremental
    nombre VARCHAR(15) NOT NULL,          // Nombre del autor, no puede ser nulo
    apellidos VARCHAR(25) NOT NULL,       // Apellidos del autor, no puede ser nulo
    nacionalidad VARCHAR(10) NOT NULL     // Nacionalidad del autor, no puede ser nulo
)";

/**
 * Ejecutar la consulta SQL para crear la tabla Autor
 * 
 * Si la consulta es exitosa, se muestra un mensaje de éxito
 * Si ocurre un error, se muestra el mensaje de error
 */
if ($conn->query($sql_autor) === TRUE) {
    echo "Tabla Autor creada exitosamente";
} else {
    echo "Error al crear la tabla Autor: " . $conn->error;
}

/**
 * Consulta SQL para crear la tabla Libro
 * 
 * La tabla incluye los siguientes campos:
 * - id: Identificador único del libro
 * - titulo: Título del libro
 * - f_publicacion: Fecha de publicación del libro
 * - id_autor: Referencia al autor del libro
 */
$sql_libro = "CREATE TABLE Libro (
    id INT AUTO_INCREMENT PRIMARY KEY,    // ID del libro, autoincremental
    titulo VARCHAR(50) NOT NULL,          // Título del libro, no puede ser nulo
    f_publicacion DATE NOT NULL,          // Fecha de publicación del libro, no puede ser nulo
    id_autor INT,                         // ID del autor, clave foránea que apunta a la tabla Autor
    FOREIGN KEY (id_autor) REFERENCES Autor(id) ON DELETE CASCADE  // Relación con la tabla Autor. Eliminar el autor eliminará sus libros.
)";

/**
 * Ejecutar la consulta SQL para crear la tabla libro
 * 
 * Si la consulta es exitosa, se muestra un mensaje de éxito
 * Si ocurre un error, se muestra el mensaje de error
 */
if ($conn->query($sql_libro) === TRUE) {
    echo "Tabla Libro creada exitosamente";
} else {
    echo "Error al crear la tabla Libro: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
