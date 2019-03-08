<?php
    class EntityBase {
    	  protected $table, $db;
        private   $connectDB;

    	  public function __construct($table) {
    	      $this->table = (string) $table;

            require_once '../Core/ConnectDB.php';
            $this->connectDB = new ConnectDB();
            $this->db = $this->connectDB->connection();
    	  }

    	  public function getConnectDB() {
    	      return $this->connectDB;
    	  }

    	  public function db() {
    	      return $this->db;
    	  }

        public function getRowsCount() {
            $query = $this->db->query("SELECT COUNT(*) as count FROM $this->table");
            $row = $query->fetch_object();
            return $row->count;
        }

    	  public function getAll() {
    	      $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
            while ($row = $query->fetch_object()) {
                $resultSet[] = $row;
            }
            return $resultSet;
      	}

    	  public function getById($id) {
    		    $query = $this->db->query("SELECT * FROM $this->table WHERE id=$id");

    		    if ($row=$query->fetch_object()) {
                $resultSet = $row;
                return $resultSet;
    		    }
    	  }

    	public function getBy($column, $value){
            $query = $this->db->query("SELECT * FROM $this->table WHERE $column=$value");

            while ($row = $query->fetch_object()) {
                $resultSet[] = $row;
            }
            return $resultSet;
    	}

        public function getRows($numberRows, $offsetRow) {
            $query = $this->db->query("SELECT * FROM $this->table LIMIT $numberRows OFFSET $offsetRow");
            while ($row = $query->fetch_object()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }

    	public function deleteById($id) {
            $query = $this->db->query("DELETE FROM $this->table WHERE id=$id");
            return $query;
    	}

    	public function deleteBy($column, $value){
            $query = $this->db->query("DELETE  FROM $this->table WHERE $column=$value");
            return $query;
    	}

    }
?>
