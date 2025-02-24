<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <h1>Introduce un numero pichote: </h1>
    </header>
    <form action="" method="POST">
        Numero: <input type="number" name="valor" id="valor">
        <button type="submit">Enviar</button>
    </form>
    
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['valor'])&& is_numeric($_POST['valor'])){
                $valor = (int)$_POST['valor'];

                function generarArray($valor){
                    for($i = $valor; $i >= 0; $i -= 3){
                        $numeros[] = $i;
                    }
                    return $numeros;
                }

                $arrayGenerado = generarArray($valor);

                echo"<h3>Posicion del array: </h3>";
                echo "<pre>";
                print_r($arrayGenerado);
                echo "</pre>";
            }else{
                echo "<h2>Pichote, ingresa un numero valido</h2>";
            }
        }
        
    ?>
</body>
</html>