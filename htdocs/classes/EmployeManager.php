<?php


class EmployeManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function add(Employe $employe)
    {
        $req = $this->db->prepare("INSERT INTO poozoo(name, age, gender) VALUES (:name, :age, :gender)");
        $req->bindValue(':name', $hero->getName());
        $req->bindValue(':age', $hero->getAge());
        $req->bindValue(':gender', $hero->getGender());
        $req->execute();
        $hero->setId($this->db->lastInsertId());
    }

















}