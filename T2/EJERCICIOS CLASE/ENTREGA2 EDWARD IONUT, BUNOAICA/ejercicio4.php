<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>
    <header>
        <h1>Array ejercicio 4</h1>
    </header>

    <?php 
        $perolas = ["buscar", "DONDE"];
    ?>
    <table>
        <tr>
            <th>TABLA PEROLAS</th>
        </tr>
        <?php foreach($perolas as $perolitas){?>
            <tr>
                <td><?php echo $perolitas; ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>