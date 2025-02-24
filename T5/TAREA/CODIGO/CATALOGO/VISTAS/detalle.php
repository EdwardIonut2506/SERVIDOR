<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
</head>
<body>
    <header>
        <h1>Articulos</h1>
    </header>
    <hr>

    <h3> <?php echo htmlspecialchars($articulo["nombre"]); ?> </h3>
    <p>Stock: </p> <?php echo htmlspecialchars(($articulo["cantidad"])) ?>
    <p>Precio:</p> <?php echo htmlspecialchars($articulo["precio"]),"€" ?>
</body>
</html>