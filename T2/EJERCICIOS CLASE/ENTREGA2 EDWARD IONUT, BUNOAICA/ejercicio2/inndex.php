<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVO-TECH</title>
    <style>
        body{
            background-color: lightblue;
        }
        #grafica{
            font-style: underline;
            color: purple;
        }
        #procesador{
            font-style: underline;
            color: purple;
        }
        #placa{
            font-style: underline;
            color: purple;
        }
    </style>
</head>
<body>
    <?php 
        include("header.php");
    ?>
    <h3>Informacion sobre nuestros productos:</h3>
    <hr>
    <div>
        <h3 id="grafica">Grafica NVIDIA RTX 4090:</h3>
        <img src="grafica.jpg">
        <h3>Descripcion:</h3>
        <p>La grafica mas potente de NVIDIA, actualmente es de las mejores del mercado y tambien de las mas caras</p>
    </div>
    <hr>
    <div>
       <h3 id="procesador">Procesador Ryzen 9-7950x3d</h3>
       <img src="procesador.jpg">
       <h3>Descripcion:</h3>
       <p>El procesador al que AMD apuesta toda su potencia y dinero, este procesador es el que mas promete en la gama alta</p> 
    </div>
    <hr>
    <div>
        <h3 id="placa">Placa base AORUS X670 ELITE AX</h3>
        <img src="placa.jpg" alt="">
        <h3>Descripcion:</h3>
        <p>La placa base de AORUS de mas alta calidad, ofrece alto rendimiento y prestaciones unicas para tu ordenador</p>
    </div>
    <?php 
        include("footer.php");
    ?>
</body>
</html>