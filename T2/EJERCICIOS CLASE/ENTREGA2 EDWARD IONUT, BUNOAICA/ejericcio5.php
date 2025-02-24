<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>
    <HEADER>Pagina web Visitas</HEADER>
    <?php
        $file = 'contador.txt';
        if (file_exists($file)) {
            $visitas = file_get_contents($file);
            $visitas++;
        } else {
            $visitas = 1;
        }
        file_put_contents($file, $visitas);
        echo "<p>Visitas: $visitas</p>";
    ?>
</body>
</html>