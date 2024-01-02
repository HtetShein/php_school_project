<?php
    require_once "../controller/CoursePerStudentController.php";
    $controller = new CoursePerStudent();
    $students = $controller->create()["student"];
    $courses = $controller->create()["course"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <form action="">
        <div>
            <label for="student_id">Student</label>
            <select name="">
                <option value=""></option>
            </select>
        </div>
    </form>
    
</body>
</html>
