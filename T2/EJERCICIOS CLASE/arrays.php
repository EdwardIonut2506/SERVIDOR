<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <header><h1>Ejercicio sobre Arrays</h1></header>
    <?php
        $estaciones = array();
        $estaciones[0] = "Primavera";
        $estaciones[1] = "Verano";
        $estaciones[2] = "Otonio";
        $estaciones[3] = "Invierno";

        $contador = count($estaciones);
        foreach($estaciones as $contador){
            echo $contador;
            echo "</br>";
        }
    ?>
</body>
</html>