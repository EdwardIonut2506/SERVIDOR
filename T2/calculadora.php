<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1>Calculadora en PHP</h1>
    </header>
    <h3>Introduzca 2 numeros:</h3>
    <form action="" method="POST">
        <p>Primer Numero:</p>
        <input type="number" required id="num1" name="num1">
        <p>Segundo Numero:</p>
        <input type="number" required id="num2" name="num2">

        <select name="op" id="op">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];
            if(is_numeric($num1) && is_numeric($num2)){
                switch($op){
                    case "suma":
                        $res = $num1 + $num2;
                        echo "<h3>Resultado: $num1 + $num2 = $res</h3>";
                        break;
                    case "resta":
                        $res = $num1 - $num2;
                        echo "<h3>Resultado: $num1 - $num2 = $res</h3>";
                        break;
                    case "multiplicacion":
                        $res = $num1 * $num2;
                        echo "<h3>Resultado: $num1 * $num2 = $res</h3>";
                        break;
                    case "division":
                        $res = $num1 / $num2;
                        if($num2 == 0) {
                            echo "No se puede dividir por cero";
                        } else {
                            echo "<h3>Resultado: $num1 / $num2 = $res</h3>";
                        }    
                        break;
                    default:
                    echo "<h3>Operacioin no valida</h3>";
                    
                }
            } else{
                echo "Ingrese un numero valido";
            }
        }
    ?>
</body>
</html>