<?php


    require_once '../Model/ModelFrasesCelebres.php';

    $fraseMFC = new ModelFrasesCelebres();

    $maximo = $fraseMFC->getRowsCount();

    $indiceFrase = rand(0, $maximo-1);

    $respuesta = $fraseMFC->getRows(1,$indiceFrase);

    $respuestaJSON = json_encode($respuesta[0]);
    echo $respuestaJSON;
?>
