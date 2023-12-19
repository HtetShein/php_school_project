<?php

require_once "../controller/StudentController.php";
$student = new StudentController();
$student->store($_POST);