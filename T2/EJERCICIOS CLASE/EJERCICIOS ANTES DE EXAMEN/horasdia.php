<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora Dias</title>
</head>
<body>
    <header>
        <h1>Saludo en funcion de la hora</h1>
    </header>
    <?php
        $fecha = date("Y-m-d H:m:s");
        echo $fecha;

        if($fecha >= "12:00:00"){
            echo " Buenas Tardes!!";
        }else if($fecha < "12:00:00"){
            echo " Buenos dias!!";
        }else if($fecha < "21:00:00"){
            echo " Buenas Noches!!!";
        }
    ?>
</body>
</html>