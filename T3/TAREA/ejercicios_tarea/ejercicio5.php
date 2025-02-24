<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
    <header>
        <h1>Enlace para enviar tu nombre</h1>
    </header>

    <a href="?nombre=Edward-Ionut">Haz click para el saludo</a>
<?php
if (isset($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    echo "<h1>Bienvenido, $nombre</h1>";
}
?>
</body>
</html>