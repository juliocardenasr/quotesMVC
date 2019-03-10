<?php
    class ViewHelper {
        public function url($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION) {
            $urlString = "index.php?controller=$controller&action=$action";
            return $urlString;
        }

        public function urlParam($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION, $param="") {
            $urlString = "index.php?controller=$controller&action=$action&p=$param";
            return $urlString;
        }
    }  
?>
