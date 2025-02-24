<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <style>
        body{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <header>
        <h1>Nuestros Productos para el maximo rendimiento</h1>
    </header>
    <?php
        include("navegation.php");
    ?>
    <hr>
    <?php
        $imagenes = [
            "grafica.jpg",
            "procesador.jpg",
            "placa.jpg"
        ];
        foreach ($imagenes as $imagenes) {
            echo "<div><img src='$imagenes'></div>";
        }
    ?>

</body>
</html>