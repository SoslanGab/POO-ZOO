<?php 





class Animal {

    private $id;
    private $name;
    private $age;
    private $weight;
    private $size;
    private $hunger;
    private $sleeping;
    private $sick;
    private $health_point;

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
        if (isset($data['weight'])) {
            $this->setWeight($data['weight']);
        }
        if (isset($data['size'])) {
            $this->setSize($data['size']);
        }
        if (isset($data['hunger'])) {
            $this->setHunger($data['hunger']);
        }
        if (isset($data['health_point'])) {
            $this->setHealth_point($data['health_point']);
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

    public function getWeight(){
        return $this->weight;
    }

    public function getSize(){
        return $this->size;
    }

    public function getHunger(){
        return $this->hunger;
    }

    public function getHealth_point(){
        return $this->health_point;
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

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function setHunger($hunger){
        $this->hunger = $hunger;
    }

    public function setHealth_point($health_point){
        $this->health_point = $health_point;
    }

    /**
     * Get the value of sleeping
     */ 
    public function getSleeping()
    {
        return $this->sleeping;
    }

    /**
     * Set the value of sleeping
     *
     * @return  self
     */ 
    public function setSleeping($sleeping)
    {
        $this->sleeping = $sleeping;

        return $this;
    }

    /**
     * Get the value of sick
     */ 
    public function getSick()
    {
        return $this->sick;
    }

    /**
     * Set the value of sick
     *
     * @return  self
     */ 
    public function setSick($sick)
    {
        $this->sick = $sick;

        return $this;
    }
}





