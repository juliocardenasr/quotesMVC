<?php
    $respuesta = array();
    $respuesta["frase"] = "Esta es una respuesta desde php";
    $respuesta["autor"] = "Este es el autor desde php";
    json_encode($respuesta);
    echo $respuesta;  
?>
