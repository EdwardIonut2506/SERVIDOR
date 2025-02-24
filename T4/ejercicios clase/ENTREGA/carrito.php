<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_POST['vaciar'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    array_splice($_SESSION['carrito'], $_POST['eliminar'], 1);
}

$total = 0;
echo "<h1>Carrito de Compras</h1>";
foreach ($_SESSION['carrito'] as $index => $producto) {
    echo "<p>{$producto['nombre']} - {$producto['precio']}€ <form method='POST' style='display:inline;'><button type='submit' name='eliminar' value='$index'>Eliminar</button></form></p>";
    $total += $producto['precio'];
}

echo "<p>Total: $total €</p>";
?>
<form method="POST">
    <button type="submit" name="vaciar">Vaciar Carrito</button>
</form>
<a href="productos.php">Volver a Productos</a>