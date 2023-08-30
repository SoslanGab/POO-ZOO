<?php





class AnimalsManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAnimals(int $id)
    {
        $req = $this->db->prepare("SELECT * FROM animals WHERE id = :id");
        $req->bindValue(':id', $id);
        $req->execute();
        $animalsArray = $req->fetch(PDO::FETCH_ASSOC);        
    }


























}