<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <header>
        <h1>Variables</h1>
    </heade>

    <?php
        $mensaje = "Bienvenido al sitio";

        function mostrar_mensaje() {
        global $mensaje;

        $mensaje_adicional = " - ¡Esperamos que disfrutes tu visita!";

        echo $mensaje . $mensaje_adicional . "<br>";
        }
        
        mostrar_mensaje();
    ?>
</body>
</html>