<?php
    class FrasesController extends ControllerBase {
        public  function __construct() {
            parent::__construct();
        }

        public function show() {
            $fraseMFC = new ModelFrasesCelebres();
            $maximo = $fraseMFC->getRowsCount();
            $indiceFrase = rand(0, $maximo-1);
            $respuesta = $fraseMFC->getRows(1,$indiceFrase);
            $this->view('show',array('title' => 'Frase del Dia',
                                     'frase' => $respuesta[0]->frase,
                                     'autor' => $respuesta[0]->autor));
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
