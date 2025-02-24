<?php
/**
 * Clase que gestiona las operaciones relacionadas con los libros y autores
 */
class Libros {
    
    /**
     * Consulta los autores registrados en la base de datos.
     *
     * Si se proporciona un id_autor, solo se consultará ese autor específico.
     * Si no se proporciona, se consultarán todos los autores
     *
     * @param mysqli $conexion Conexión a la base de datos
     * @param int|null $id_autor El ID del autor
     * 
     * @return array|null Un arreglo con los autores encontrados o null si no hay resultados o ocurre un error
     */
    public function consultarAutores($conexion, $id_autor = null) {
        $query = "SELECT * FROM autor";
        
        if ($id_autor) {
            $query .= " WHERE id = ?";
        }
        
        $stmt = $conexion->prepare($query);
        
        if ($id_autor) {
            $stmt->bind_param("i", $id_autor);
        }
        
        if (!$stmt->execute()) {
            return null;
        }
        
        $result = $stmt->get_result();
        $autores = [];
        
        while ($row = $result->fetch_object()) {
            $autores[] = $row;
        }
        
        return empty($autores) ? null : $autores;
    }

    /**
     * Elimina un autor y todos los libros asociados a el
     *
     * El autor se elimina primero y, si es exitoso, se proceden a eliminar los libros asociados
     *
     * @param mysqli $conexion Conexión a la base de datos
     * @param int $id_autor El ID del autor a eliminar
     * 
     * @return bool true si la eliminación fue exitosa, false si ocurrió algún error
     */
    public function borrarAutor($conexion, $id_autor) {
        // Eliminar los libros relacionados con el autor
        $queryLibros = "DELETE FROM libro WHERE id_autor = ?";
        $stmtLibros = $conexion->prepare($queryLibros);
        $stmtLibros->bind_param("i", $id_autor);

        if (!$stmtLibros->execute()) {
            return false;
        }

        // Eliminar el autor
        $queryAutor = "DELETE FROM autor WHERE id = ?";
        $stmtAutor = $conexion->prepare($queryAutor);
        $stmtAutor->bind_param("i", $id_autor);

        if ($stmtAutor->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Elimina un libro de la base de datos
     *
     * @param mysqli $conexion Conexión a la base de datos
     * @param int $id_libro El ID del libro a eliminar
     * 
     * @return bool true si la eliminación fue exitosa, false si ocurrió algún error
     */
    public function borrarLibro($conexion, $id_libro) {
        $query = "DELETE FROM libro WHERE id = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("i", $id_libro);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Consulta los libros de un autor o todos los libros registrados en la base de datos
     *
     * Si se proporciona un id_autor, se consultan solo los libros de ese autor. Si no se proporciona,
     * se consultan todos los libros
     *
     * @param mysqli $conexion Conexión a la base de datos
     * @param int|null $id_autor El ID del autor
     * 
     * @return array|null Un arreglo con los libros encontrados o null si no hay resultados o ocurre un error
     */
    public function consultarLibros($conexion, $id_autor = null) {
        $query = "SELECT * FROM libro";
        
        if ($id_autor) {
            $query .= " WHERE id_autor = ?";
        }
        
        $stmt = $conexion->prepare($query);
        
        if ($id_autor) {
            $stmt->bind_param("i", $id_autor);
        }
        
        if (!$stmt->execute()) {
            return null;
        }
        
        $result = $stmt->get_result();
        $libros = [];
        
        while ($row = $result->fetch_object()) {
            $libros[] = $row;
        }
        
        return empty($libros) ? null : $libros;
    }

    /**
     * Consulta los datos completos de un libro específico
     *
     * @param mysqli $conexion Conexión a la base de datos
     * @param int $id_libro El ID del libro a consultar
     * 
     * @return object|null Un objeto con los datos del libro encontrado o null si no se encuentra el libro o ocurre un error
     */
    public function consultarDatosLibro($conexion, $id_libro) {
        $query = "SELECT * FROM libro WHERE id = ?";
        
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("i", $id_libro);
        
        if (!$stmt->execute()) {
            return null;
        }
        
        $result = $stmt->get_result();
        $libro = $result->fetch_object();
        
        return $libro ? $libro : null;
    }
}
?>

