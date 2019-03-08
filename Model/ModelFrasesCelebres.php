
<?php
    require_once '../Core/EntityBase.php';

    Class ModelFrasesCelebres extends EntityBase {

        public function __construct() {
            parent::__construct("FrasesCelebres");
        }

        public function getTable() {
            return $this->table;
        }

        /*
           crud functions of table FrasesCelebres
               Create   in this class insertFrase()
               Read     in the parent class getById() getRows()
               Update   in this class modifiqueFrase() ModifiqueAutor()
               Delete   in the parent class deleteById()
        */

        public function insertFrase($frase, $autor) {
            $query = "INSERT INTO $this->table (frase, autor) VALUES ('$frase', '$autor');";
            $save = $this->db->query($query);
            return $save;
        }

        Public function modifiqueFrase($id, $frase) {
            $query = "UPDATE $this->table SET frase='$frase' WHERE id='$id'";
            $save = $this->db->query($query);
            return $save;
        }

        Public function modifiqueAutor($id, $autor) {
            $query = "UPDATE $this->table SET autor='$autor' WHERE id='$id'";
            $save = $this->db->query($query);
            return $save;
        }
    }
?>
