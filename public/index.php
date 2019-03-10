<?php
    require_once '../Config/global.php';
    require_once '../Core/Router.php';


    if (isset($_GET['controller'])) {
        $controllerObj = loadController($_GET['controller']);
    } else {
        $controllerObj = loadController(DEFAULT_CONTROLLER);
    }

    launchAction($controllerObj);
?>
