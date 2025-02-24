<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <header>
        <h1>Zupermercadosh Mondongo</h1>
    </header>

    <?php
        session_start();

        $productos = [
            ["nombre" => "Producto 1", "precio" => 10],
            ["nombre" => "Producto 2", "precio" => 15],
            ["nombre" => "Producto 3", "precio" => 20],
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto = $productos[$_POST['producto_index']];
            $_SESSION['carrito'][] = $producto;
        }

        echo "<h1>Productos:</h1>";
        foreach ($productos as $index => $producto) {
            echo "<p>{$producto['nombre']} - Precio: {$producto['precio']}</p>";
            echo "<form method='POST'>
                    <input type='hidden' name='producto_index' value='$index'>
                    <button type='submit'>Añadir al carrito</button>
                </form>";
        }

        echo "<br><a href='carrito.php'>Ver Carrito</a>";
    ?>
</body>
</html>