<?php

namespace App\UseCases;

class ChildrenRenacerUC {
    
       // Propiedades
    public $name;
    public $lastName;
    public $age;
    public $schoolGrade;
    public $mother;
    public $father;
       
    // Metodo constructor
    public function __construct(string $name, string $lastName, int $age, string $schoolGrade, string $mother, string $father){
        
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->schoolGrade = $schoolGrade;
        $this->mother = $mother;
        $this->father = $father;
    }

    // Metodo saludo
    public function greeting(){

        return "Hola, soy $this->name $this->lastName, tengo $this->age años y estoy en el grado $this->schoolGrade.\nMis padres son: $this->mother y $this->father.\n\n";
    }
}