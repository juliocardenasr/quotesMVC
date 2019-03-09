<?php
    /*
    ****************************************************************************
    *  1. conforms the className
    *  2. conforms the filename of the className
    *  3. verifys if file exist, if no, takes the default controller
    *  4. loads the class
    *  5  instanties the controller
    *  6  return the controller
    ****************************************************************************
    */

    require '../Core/ControllerBase.php';

    function loadController($controller) {
        $controller        = ucwords($controller) . 'Controller';

        $strFileController = '../Controller/' . $controller . '.php';

        if (!is_file($strFileController)) {
            $controller        = ucwords(DEFAULT_CONTROLLER) . 'Controller';
            $strFileController = '../Controller/' . $controller . '.php';
    	  }

        require_once $strFileController;

        $controllerObj = new $controller();

        return $controllerObj;
    }


    function loadAction($controllerObj, $action) {
    	  $controllerObj->$action();
    }

    /*
    ****************************************************************************
    *  1. verifies that action parameter had been passed
    *  2. verifies that action exists in the controller
    *  3. else call the default action
    ****************************************************************************
    */
    function launchAction($controllerObj) {
        if (isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])) {
        	  loadAction($controllerObj,$_GET["action"]);
        }
        else {
        	  loadAction($controllerObj, DEFAULT_ACTION);
        }
    }
?>
