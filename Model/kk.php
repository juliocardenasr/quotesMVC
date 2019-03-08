<?php
    require_once 'ModelFrasesCelebres.php';

    $mfc = new ModelFrasesCelebres();
    echo $mfc->getTable();
    $mfc->modifiqueFrase(59,"Encima de un buen culo");
?>
