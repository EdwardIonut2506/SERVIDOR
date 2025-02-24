<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Introduce tu edad pichote</h1>
    </header>

    <form action="" method="POST">
        Edad: <input type="number" name="edad" id="edad">
        <button type="submit">Validar</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $edad = $_POST['edad'];

            if($edad >= 18){
                echo"<H2>Eres Mayor de edad pichote :D </H2>";
            }else{
                echo "<H2>Eres menor de edad pichote D: </H2>";
            }
        }
    ?>
</body>
</html>