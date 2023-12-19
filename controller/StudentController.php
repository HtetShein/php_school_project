<?php

require_once "../helper/database.php";

class StudentController extends DB
{
    public function index()
    {
        $statement =$this->connect_all()->query("select * from `students`");
        $students = $statement->fetchAll(PDO::FETCH_OBJ);
        return $students;
    }

    public function store($student)
    {
        $pdo=$this->connect_all();
        $statement=$pdo->prepare("
        INSERT INTO `students`
        (`first_name`,`last_name`,`user_name`,`email`,`dob`,`phone`,`address`,`created_at`,`updated_at`)
        VALUES
        (:first_name,:last_name,:user_name,:email,:dob,:phone,:address,now(),now())
    
        ");

    
        $statement->bindParam(":first_name",$student["first_name"]);
        $statement->bindParam(":last_name",$student["last_name"]);
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
}