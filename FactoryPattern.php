
<!-- The Factory Design Pattern is used to create objects without specifying the exact class of the object that will be created.
  -->

<?php

// main class
class Employee{
    private $id;
    private $salary;
    private $name;

    public function __construct($id,$salary,$name){
        $this->id=$id;
        $this->salary=$salary;
        $this->name=$name;
    }
    public function getEmploeeDetails(){
        return $this->id." - ".$this->salary." - ".$this->name;
    }
}

class FactoryClass{
    public static function createEmployee($id,$salary,$name){
        return new Employee($id,$salary,$name);
    }
}
$obj = FactoryClass::createEmployee(2,'23000',"Kasem");

echo $obj->getEmploeeDetails();
?>