<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
</head>
<body>
    <header>
        <h1>Formulario del ejercicio 3</h1>
    </header>
    <form method="POST">
        <input type="text" name="usuario" placeholder="usuario">
        <input type="password" name="contrasena" placeholder="contraseña">
        <input type="submit" value="Registrar">
    </form>
    <?php
        if ($_POST['usuario'] && $_POST['contrasena']) {
        echo "<p>Usuario registrado: " . htmlspecialchars($_POST['usuario']) .
        "</p>";
        }
    ?>
</body>
</html>