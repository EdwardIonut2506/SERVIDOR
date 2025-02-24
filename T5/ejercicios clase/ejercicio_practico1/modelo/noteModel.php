<?php

    class NoteModel{
        private $notas = [];

        public function __construct(){
            $this -> notas = [
                ["id" => 1,  "Contenido" => "Estudiar mas para el examen"],
                ["id" => 2, "Contenido" => "Llamar al medico"]
            ];
        }

        
    }

?>