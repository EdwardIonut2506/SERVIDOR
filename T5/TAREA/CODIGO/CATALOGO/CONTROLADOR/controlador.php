<?php

    require_once "modelo.php";

    function solicitud(){
        if(isset($_GET["id"])){
            $idArt = (int)$_GET("id");
            $articulo = obtenerArt($idArt);
            if($articulo){
                mostrarArticulos($articulo);
            }else{
                echo "Los articulos no se han encontrado";
            }
        }else{
            mostrarListaArt();
        }
    }

    function mostrarListaArt(){
        global $articulos;
        include "VISTAS/listado.php";
    }

    function mostrarArticulos($articulo){
        include "VISTAS/detalle.php";
    }
?>