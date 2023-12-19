<?php

class DB 
{
    protected $host = "localhost";
    protected $dbname = "school project";
    protected $user = "root";
    protected $password = "shein";
    protected $pdo;



    public function connect_all()
    {
        try {
            $pdo = new PDO ("mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->password");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
    
        } catch (PDOException $e) {
            echo $e->getMessage();
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }

    }
}
