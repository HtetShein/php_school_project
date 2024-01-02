<?php
require_once "../helper/database.php";
require_once "StudentController.php";
require_once "CourseController.php";


class CoursePerStudent extends DB
{
    public function index ()
    {
        return $this->pdo->query("
            select * from course_per_student as cps 
            join students as s on s.id = cps.student_id
            join courses as c on c.id = cps.course_id
        ")->fetchAll(PDO::FETCH_OBJ);
    }

    public function create ()
    {
        return [
            "student" => (new StudentController())->index(),
            "course" => (new CourseController())->index(),
        ];
    }
}