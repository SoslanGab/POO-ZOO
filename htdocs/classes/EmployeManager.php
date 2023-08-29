<?php


class EmployeManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function addEmploye($name, $age, $gender)
    {
        $req = $this->db->prepare("INSERT INTO zoo_employee(name, age, gender) VALUES (:name, :age, :gender)");
        $req->bindValue(':name', $name);
        $req->bindValue(':age', $age);
        $req->bindValue(':gender', $gender);
        $req->execute();
    }



















}