<?php
    require_once 'ModelFrasesCelebres.php';

    $mfc = new ModelFrasesCelebres();
    echo $mfc->getTable();
    $mfc->modifiqueAutor(59,"jc");
?>
