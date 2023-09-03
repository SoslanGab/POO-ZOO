<?php





class AnimalsManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAnimals()
    {
        $stmt = $this->db->query("SELECT * FROM animals");
        $animals = [];

        while ($row = $stmt->fetch()) {
            $animal = new Animal($row);
            $animals[] = $animal;
        }

        return $animals;
        var_dump ($animals);
    }
    public function updateAnimals(Animal $animals)
    {
        $req = $this->db->prepare("UPDATE animals SET health_point = :health_point, hunger = :hunger WHERE id = :id");
        $req->bindValue(':hunger', $animals->getHunger());
        $req->bindValue(':health_point', $animals->getHealth_point());
        $req->bindValue(':id', $animals->getId());
        $req->execute();
    }
    

    public function decreaseHealthAndHunger($healthDecreaseAmount, $hungerIncreaseAmount) {
        $animals = $this->findAnimals();
        // $healthDecreaseAmount *= -1;
        // $hungerIncreaseAmount *= -1;
        foreach ($animals as $animal) {
            $animal->setHealth_point($animal->getHealth_Point() - $healthDecreaseAmount);
            $animal->setHunger($animal->getHunger() - $hungerIncreaseAmount); 
                // Assurez-vous que la santé ne devienne pas négative
                if ($animal->getHealth_Point() < 0) {
                    $animal->setHealth_Point(0); 
                }
                
                // Assurez-vous que la faim ne dépasse pas 100
                if ($animal->getHunger() > 100) {
                    $animal->setHunger(100);
                }
                if ($animal->getHunger() < 0) {
                    $animal->setHunger(0);
                }

                $this->updateAnimals($animal);
        }
    }

    
}


























