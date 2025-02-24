<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 6</title>
</head>
<body>
    <header>
        <h1>Ejercicio 6 Formulario cambialenguas</h1>
    </header>

    <form method="POST">
        <select name="idioma">
        <option value="es">Español</option>
        <option value="en">Inglés</option>
        </select>
        <input type="submit" value="Cambiar Idioma">
    </form>
    <?php
        $idioma = $_POST['idioma'] ?? 'es';
         if ($idioma == 'es') {
            echo "<p>Bienvenido!</p>";
        } else {
            echo "<p>Welcome!</p>";
        }
    ?>
</body>
</html>