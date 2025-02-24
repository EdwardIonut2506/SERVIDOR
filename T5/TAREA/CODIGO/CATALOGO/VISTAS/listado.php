<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
</head>
<body>
    
    <header>
        <h1>Catalogo de Articulos</h1>
    </header>
    <hr>
    <ul>
        <?php foreach($articulos as $articulo): ?>
            <li>
                <a href="index.php?id=<?php echo $articulo["id"]; ?>">
                    <?php echo htmlspecialchars($articulo["nombre"]); ?>
                    <?php echo htmlspecialchars($articulo["cantidad"]); ?>
                </a> - <?php echo htmlspecialchars($articulo["precio"]); ?> €
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>