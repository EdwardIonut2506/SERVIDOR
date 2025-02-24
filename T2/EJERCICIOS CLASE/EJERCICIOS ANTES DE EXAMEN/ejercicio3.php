<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>
<body>
    <header>
        <h1>VALIDACIONES</h1>
    </header>

    <form action="" method="POST">
        <p>Introduce un usuario: </p>
        <input type="text" id="usu" name="usu" required>
        <p>Introduce una contraseña: </p>
        <input type="password" id="ctrs" name="ctrs" requiered>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(isset($_POST["usu"]) && isset($_POST["ctrs"])){
            $usr = $_POST["usu"];
            $pass = $_POST["ctrs"];
            echo "Tu usuario es: ",$usr," y tu contraseña es: ",  $pass;
            echo "</br>";
        }
        if(isset($_POST["ctrs"])){
            if(strlen($pass)< 8){
                echo "ERROR, LA CONTRASEÑA DEBE TENER AL MENOS 8 CARACTERES";
            }else{
                echo "La contraseña es correcta";
            }
        }
    ?>  
</body>
</html>