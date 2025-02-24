<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7</title>
</head>
<body>
    <header>Ejercicio 7 Imagenes</header>
    <?php
        $imagenes = glob('imagenes/*.jpg');
    ?>
    <div>
        <?php foreach($imagenes as $imagen){ ?>
        <img src="<?php echo $imagen; ?>" alt="Imagen">
        <?php } ?>
    </div>
</body>
</html>