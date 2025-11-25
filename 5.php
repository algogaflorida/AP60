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
}

$persona1 = new Persona("Laura Gómez", 35);
echo "<h3>Persona 1 Creada</h3>";
echo "Nombre: " . $persona1->setNombre("") . "<br>";
echo "Edad: " . $persona1->setEdad(115) . "<br>";