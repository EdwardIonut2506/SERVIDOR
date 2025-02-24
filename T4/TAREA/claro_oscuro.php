<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias de Tema</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            <?= $estilo; ?>
            text-align: center;
            padding: 20px;
        }
        .claro {
            background-color: #007BFF;
        }
        .oscuro {
            background-color: #333;
        }
    </style>
</head>
<body>
    <h1>Selecciona el fondo</h1>
    <div class="botones">
        <a href="?tema=claro" class="claro">Claro</a>
        <a href="?tema=oscuro" class="oscuro">Oscuro</a>
    </div>
    <?php
        if (isset($_GET['tema'])) {
            $tema = $_GET['tema'];
            setcookie("tema", $tema, time() + (7 * 24 * 60 * 60));
        } elseif (isset($_COOKIE['tema'])) {
            $tema = $_COOKIE['tema'];
        } else {
            $tema = "claro";
        }
        
        
        $estilo = $tema === "oscuro"
            ? "background-color: black; color: white;"
            : "background-color: white; color: black;";
    ?>
</body>
</html>