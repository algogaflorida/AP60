<?php

class Coche {
    private $marca;
    private $modelo;
    
    public function mostrarInfo(){
        echo "Coche: $this->marca $this->modelo";
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($brand){
        $this->marca = $brand;
    }

    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($model){
        $this->modelo = $model;
    }
}

$coche1 = new Coche();
$coche1->setModelo("Gomez");
$coche1->setMarca("Ferrari");
$coche1->mostrarInfo();