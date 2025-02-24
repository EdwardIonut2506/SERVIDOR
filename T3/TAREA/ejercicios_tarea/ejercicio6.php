<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <header>
        <h1>Array y comentarios en el codigo</h1>
    </header>
    
    <?php
        //Inicializamos el for en la primera posicion recorriendo hasta 10 de uno en uno
        for ($i = 1; $i <= 10; $i++) {
            //Con un condicional comprobamos que sea divisible entre dos
            if ($i % 2 == 0) {
                //En caso de ser par que lo imprima
                echo "$i es par<br>";
            } else {
                echo "$i es impar<br>";
            }
        }
    ?>
</body>
</html>