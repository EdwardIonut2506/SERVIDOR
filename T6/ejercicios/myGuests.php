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

        $query = "CREATE TABLE MyGests (Id INT PRIMARY KEY, firstname VARCHAR(255), lastname VARCHAR(255), email VARCHAR(255), reg_date DATETIME);";
        
        if($mysqli->query($query)===true){
            echo "Tabla creada exitosamente";
        }else{
            echo "Error, la tabla no se creó ". $mysqli -> error; 
        }

        $mysqli -> close();
    ?>    
</body>
</html>