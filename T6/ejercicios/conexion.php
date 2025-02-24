<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Conexion a base de datos: </h1>
    </header>
    <?php
        $mysqli = mysqli_connect("localhost", "root","foc_formacion","dqwae");
        if ($mysqli -> connect_error){
            echo "Error de conexion" . $mysqli -> connect_error . ".";
            $mysqli -> connect_error;
        }else{
            echo "Conexion establecida correctamente ". $mysqli -> host_info;
        }
    ?>    
</body>
</html>