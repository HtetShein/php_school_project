<?php

require_once "../helper/database.php";
require_once "../helper/model.php";
require_once "../model/Student.php";


class StudentController extends DB
{
    public function index()
    {
        
        $student = new Student();
        return $student->all();
    }

    public function create()
    {
        return $this->pdo->query("select id, name from courses")->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($student)
    {
        $pdo=$this->pdo;

        $statement=$pdo->prepare("
            INSERT INTO `students`
                (`first_name`,`last_name`,`user_name`,`email`,`dob`,`phone`,`address`,`created_at`,`updated_at`)
            VALUES
                (:first_name,:last_name,:user_name,:email,:dob,:phone,:address,now(),now())
        ");
    
        $statement->bindParam(":first_name", $student["first_name"]);
        $statement->bindParam(":last_name", $student["last_name"]);
        $statement->bindParam(":user_name",$student["user_name"]);
        $statement->bindParam(":email",$student["email"]);
        $statement->bindParam(":dob",$student["dob"]);
        $statement->bindParam(":phone",$student["phone"]);
        $statement->bindParam(":address",$student["address"]);

        if ($statement->execute()) {
            echo "this is execute";
        }else {
            throw new Exception("Error");
            
        }
        
    }

    public function edit ($id)
    {
        $statement = $this->pdo->prepare("select * from students where id = :id");
        $statement->bindParam(":id", $id);
        if ($statement->execute())
        {
            $student = $statement->fetch(PDO::FETCH_OBJ);
            return $student;
        }
    }

    public function delete ($id)
    {
        $statement = $this->pdo->prepare("delete * from students where id = :id");
        $statement->bindParam(":id", $id);
        if ($statement->execute())
        {
            
            header("Location:http://localhost:8000/Student");
        }
        

    }
}


