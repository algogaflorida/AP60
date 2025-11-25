<?php

class Coche {
    public $marca;
    public $modelo;
    
    public function mostrarInfo(){
        echo "Coche: $this->marca $this->modelo";
    }
}

$coche1 = new Coche();
$coche1->marca = "ferrari";
$coche1->modelo = "gomez";
$coche1->mostrarInfo();