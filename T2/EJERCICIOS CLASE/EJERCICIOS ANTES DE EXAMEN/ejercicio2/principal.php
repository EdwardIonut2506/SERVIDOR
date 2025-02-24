<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginas Multiples</title>
</head>
<body>
    <header>
        <h1>Menu con varias paginas</h1>
    </header>
    <nav>
        <?php
            include("home.php");
            include("contacto.php");
            include("servicios.php");
        ?>
    </nav>
</body>
</html>