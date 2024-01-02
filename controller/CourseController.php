<?php
require_once "../helper/database.php";

class CourseController extends DB
{
    public function index()
    {
        return $this->pdo->query("select * from courses")->fetchAll(PDO::FETCH_OBJ);

    }
}