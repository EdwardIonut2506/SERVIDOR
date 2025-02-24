<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <h1>Titulo del Formulario</h1>
    </header>
    <form action="" method="POST">
        Nombre:<input type="text" name="nombre" id="nombre">
        <br>
        Email:<input type="email" name="email" id="email">
        <br>
        Edad:<input type="number" name="edad" id="edad">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php

        $nombre = "";
        $email = "";
        $edad = "";
        if(isset($_POST["nombre"])&&isset($_POST["email"])&&isset($_POST["edad"])){
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $edad = $_POST["edad"];
    
            $contenido = "Nombre:".$nombre." Email:".$email." Edad:".$edad;
            $archivo = "usuarios.txt";
            
            if(file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX) !== false){
                echo "El usuario ha sido registrado correctamente :) ";
            }else{
                echo "Error al registrar el usuario, intente de nuevo :( ";
            }
        }
    ?>
    
</body>
</html>