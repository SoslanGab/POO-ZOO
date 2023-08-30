<?php 





class Animal {

    private $id;
    private $name;
    private $age;
    private $weight;
    private $size;


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
            $this->setHealthPoint($data['age']);
        }
        if (isset($data['weight'])) {
            $this->setType($data['weight']);
        }
        if (isset($data['size'])) {
            $this->setType($data['size']);
        }
    } 


    //GETTER
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    public function getHealthPoint(){
        return $this->health_point;
    }
    public function getType()
    {
        return $this->type;
    }

    //SETTER
    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setHealthPoint($health_point){
        $this->health_point = $health_point;
    }
    public function setType($type){
        $this->type = $type;
    }

}




