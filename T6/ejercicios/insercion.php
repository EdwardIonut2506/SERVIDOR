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
        $mysqli = mysqli_connect("localhost", "usuario","password","mydb");
        if ($mysqli -> connect_error){
            echo "Error de conexion" . $mysqli -> connect_error . ".";
            $mysqli -> connect_error;
        }else{
            echo "Conexion establecida correctamente ". $mysqli -> host_info;
        }

        echo "\n";

        $query = "INSERT into MyGests(firstname, lastname, email) VALUES (1, 'John', 'Doe', 'john.example.com'), 
        INSERT into MyGests(firstname, lastname, email) VALUES (2, 'Mary', 'Moe', 'mary.example.com'),
        INSERT into MyGests(firstname, lastname, email) VALUES (3, 'Jane', 'Doe', 'jane.example.com');";

        if($mysqli -> query($query)===true){
            echo "Insercion exitosa";
        }else{
            echo "Hubo un problema en la inserción ". $mysqli -> error;
        }

        $mysqli -> close();
    ?>    
</body>
</html>