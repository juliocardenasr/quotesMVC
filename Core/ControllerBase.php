<?php
    class ControllerBase {
        public function __construct() {
           require_once '../Model/ModelFrasesCelebres.php';
        }
        
        public function view($view, $data){
            foreach ($data as $id_assoc => $value) {
                ${$id_assoc} = $value;
            }
            require_once '../Core/ViewHelper.php';
            $helper = new ViewHelper();
            require_once '../View/' . $view . 'View.php';
        }

        public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION) {
            header("location:index.php?controller=$controller&action=$action");
        }
    }
?>
