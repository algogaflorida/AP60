<?php

class Coche {
    private $marca;
    private $modelo;
    
    public function mostrarInfo(){
        echo "Coche: $this->marca $this->modelo";
    }
    
    function __construct($brand, $model){
        $this->marca=$brand;
        $this->modelo=$model;
    }
}

$coche1 = new Coche("ferrari", "gomez");
$coche1->mostrarInfo();