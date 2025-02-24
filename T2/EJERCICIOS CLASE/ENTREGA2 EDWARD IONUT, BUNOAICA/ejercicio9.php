<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Tu Nombre">
        <input type="email" name="email" placeholder="Tu Correo">
        <textarea name="mensaje" placeholder="Tu Mensaje"></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (isset($_POST['nombre']) && isset($_POST['email'] )&& isset($_POST['mensaje'])) {
            echo "<p>Gracias por tu mensaje, " .
            htmlspecialchars($_POST['nombre']) . ".</p>";
        }
    ?>
</body>
</html>