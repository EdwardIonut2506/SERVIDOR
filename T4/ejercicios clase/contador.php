<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
        session_start(); 
        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 1;
        } else {
            $_SESSION['contador']++;
        }
        
        session_id("id");
        session_name("art"); 
    ?>

    <header>
        <h1>Contador:</h1>
    </header>

    <p>
        Las visitias a la pagina: <?php echo $_SESSION['contadorss']?>
    </p>
</body>
</html>