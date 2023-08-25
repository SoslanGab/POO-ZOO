<?php 

require 'Animal.php';
require 'Enclosure.php';
require 'Zoo.php';


class Employee {

    private $name;
    
    public function __construct($name) {
    $this->name = $name;
    }
}


function feedAnimals(Enclosure $enclosure){
    // Récupérer les animaux de l'enclosure
    $animals = $enclosure->getAnimals();

    foreach($animals as $animal) {
        // Nourrir l'animal
        $animal->eat();

        // Mettre à jour son statut dans la BDD
        $pdo->prepare("UPDATE animals SET hunger=0 WHERE id=?")
            ->execute([true, $animal->getId()]);
    }
}