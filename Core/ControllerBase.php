<?php
    class ControllerBase {
         public function __construct() {
             require_once '../Model/ModelFrasesCelebres.php';
         }

        public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION) {
            header("location:julio.php?controller=$controller&action=$action");
        }
    }
?>
