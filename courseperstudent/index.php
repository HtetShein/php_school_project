<?php
    require_once "../controller/CoursePerStudentController.php";

    echo json_encode((new CoursePerStudent())->index());
?>

Course Name, Full Name, User Name, Email, Course Fee, Course Period

