<?php

    $articulos = [
        1 =>[
            "id" => 1,
            "nombre" => "Procesador Intel i7-14700K",
            "cantidad" => 100,
            "precio" => 244.99
        ],
        2 =>[
            "id" => 2,
            "nombre" => "Placa base Asus TUF Gaming",
            "cantidad" => 77,
            "precio" => 178
        ],
        3 =>[
            "id" => 3,
            "nombre" => "Nvidia RTX 4060Ti",
            "cantidad" => 45,
            "precio" => 229.99
        ],
        4 =>[
            "id" => 4,
            "nombre" => "Modulo 16GB RAM DDR5 4200Mhz",
            "cantidad" => 140,
            "precio" => 145
        ]
        ];

    function obtenerArt($id){
        global $articulos;
        return isset($articulos[$id]) ? $articulos[$id] : null;
    }

?>