<?php
    $respuesta->frase = "Esta es una respuesta desde php";
    $respuesta->autor = "Este es el autor desde php";
    $respuestaJSON = json_encode($respuesta);
    echo $respuestaJSON;
?>
