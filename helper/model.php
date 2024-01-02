<?php 

require_once "database.php";

class Model extends DB
{
    public $table = "students";

    public function process ($table) 
    {
        $this->table = $table;
    }
    public function all ()
    {
        return $this->pdo->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_OBJ);
    }
}

