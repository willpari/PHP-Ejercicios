<?php 

$jsonContenido='[
    {"nombre":"Yui", "apellido":"Yuigahama"},
    {"nombre":"Hachiman", "apellido":"Hikigaya"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
        echo ($persona->nombre)."".($persona->apellido)."<br/>";
    }

?>