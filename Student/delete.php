<?php

require_once "../controller/StudentController.php";
$controller = new StudentController();
$controller->delete($_GET["id"]);