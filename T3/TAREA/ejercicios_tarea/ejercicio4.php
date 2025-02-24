<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <header>
        <h1>Tarea 3 - Programacion Básica</h1>
    </header>

    <form action ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="valor">Introduzca un valor pichita:</label>
        <input type="text" id="valor" name="valor">
        <button type="submit">Validar Valor </button>
    </form>

    <?php
        function generarArray($valor) {
            $array = [];
            for ($i = $valor; $i >= 0; $i -= 3) {
                $array[] = $i;
            }
            return $array;
        }
        function tabla($array) {
            echo "<table border='1'>";
            echo "<tr><th>Valores</th></tr>";
            foreach ($array as $valor) {
                echo "<tr><td>$valor</td></tr>";
            }
            echo "</table>";
        }
        if (isset($_POST['valor'])) {
            $valor = $_POST['valor'];
            if ($valor === "") {
                echo "<h2>Introduzca un valor pichote</h2>";
            } elseif (!is_numeric($valor)) {
                echo "<h2>Introduzca un valor numérico tambien :)</h2>";
            } elseif ($valor < 0) {
                echo "<h2>Introduzca un valor positivo</h2>";
            } elseif ($valor == 0 || ($valor > 0 && $valor <= 10)) {
                $array = generarArray($valor);
                echo "<h2>Tabla de valores decrecientes desde $valor</h2>";
                tabla($array);
            } elseif ($valor > 10) {
                echo "<h2>Número demasiado grande picha :(</h2>";
            } else {
                echo "<h2>Valor desconocido pichote :(</h2>";
            }
        } else {
            echo "<h2>No se ha introducido ningún valor piochote :(</h2>";
        }
    ?>
</body>
</html>