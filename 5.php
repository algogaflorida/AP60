<?php
class Persona{
    private $nombre;
    private $edad;
    
    public function setNombre($name){
        return (empty($name)) ? "Error: todo el mundo tiene nombre, no tengas vergüenza de llamarte Pacorri" : $this->nombre=$name; 
        
    }

    public function setEdad($age) {
        return ($age >= 0 && $age<=120) ? $this->edad=$age : "ERROR - el límite de edad es 120";
    }

    function __construct($name, $age){
        $this->setNombre($name);
        $this->setEdad($age);
    }
    
    public function mostrarInfo($x){
        echo "Persona $x: " . $this->nombre . ", tiene " . $this->edad . " años de edad.<br>"; 
    }
}

$persona1 = new Persona("Laura Gómez", 35);
$persona1->mostrarInfo(1);