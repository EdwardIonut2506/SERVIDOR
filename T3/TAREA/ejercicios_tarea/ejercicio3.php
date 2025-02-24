<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <h1>Generar tablas y array Pichote :D</h1>
    </header>

    <?php
        function generaTabla($valores){
            $html = '<table border ="1">';
            
            foreach($valores as $valor){
                $html .= '<tr><td>'.$valor.'</td></tr>';
            }
            echo '</table>';

            return $html;
        }

        $numeros =[15,12,9,6,3,0];
        echo generaTabla($numeros);
    ?>

</body>
</html>