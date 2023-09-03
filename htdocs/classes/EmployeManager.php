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
    public function findEmploye()
    {
        $stmt = $this->db->query("SELECT * FROM zoo_employee");
        $employes = [];

        while ($row = $stmt->fetch()) {
            $employe = new Employe($row);
            $employes[] = $employe;
        }

        return $employes;
    }



















}