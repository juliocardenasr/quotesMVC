<?php
    require_once 'ModelFrasesCelebres.php';

    $mfc = new ModelFrasesCelebres();
    echo $mfc->getTable();
    $mfc->insertFrase("Encima de un buen culo , no siempre hay una buena mujer","julio Cardenas");
?>
