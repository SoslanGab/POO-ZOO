<?php 

require 'Animal.php';
// require 'Enclosure.php';
// require 'Zoo.php';


class Employe {

    private $id;
    private $name;
    private $age;
    private $gender;
    
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['name'])) {
            $this->setName($data['name']);
        }
        if (isset($data['age'])) {
            $this->setAge($data['age']);
        }
        if (isset($data['gender'])) {
            $this->setGender($data['gender']);
        }
    } 

    // GETTERS
    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function getGender(){
        return $this->gender;
    }

    // SETTERS
    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
}



// function feedAnimals(Enclosure $enclosure){
  
//     $animals = $enclosure->getAnimals();

//     foreach($animals as $animal) {
    
//         $animal->eat();

       
//         $pdo->prepare("UPDATE animals SET hunger=0 WHERE id=?")
//             ->execute([true, $animal->getId()]);
//     }
// }