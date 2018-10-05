<?php
    

    require_once '../Core/EntityBase.php';

    $fraseEB = new EntityBase("FrasesCelebres");

    $maximo = $fraseEB->getRowsCount();

    $indiceFrase = rand(0, $maximo-1);

    $respuesta = $fraseEB->getRows(1,$indiceFrase);

    $respuestaJSON = json_encode($respuesta[0]);
    echo $respuestaJSON;
?>
