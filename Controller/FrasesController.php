<?php
    class FrasesController extends ControllerBase {
        public  function __construct() {
            parent::__construct();
            echo "<br> desde FrasesController";
        }

        public function show() {
            echo "Esta es la funcion show <br>";
        }

        public function accionA() {
            echo "Esta es la funcion A <br>";
        }
        public function accionB() {
            echo "Esta es la funcion B <br>";
        }
        public function accionC() {
            echo "Esta es la funcion C <br>";
        }
        public function accionD() {
            echo "Esta es la funcion D <br>";
        }
        public function accionE() {
            echo "Esta es la funcion E <br>";
        }
    }
?>
