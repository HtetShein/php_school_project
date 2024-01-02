<?php 

require_once "../helper/model.php";
require_once "../helper/database.php";

class Student extends Model
{
    public $table = "students";
    function __construct()
    {
        $this->process($this->table);
    }
}