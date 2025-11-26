<?php

class CuentaBancaria{
    private $titular;
    private $saldo;

    public function getSaldo(){
        return $this->saldo;
    }
    public function depositar($cantidad){
        $this->saldo+=$cantidad;
        return $this->saldo;
    }

    public function retirar($cantidad){
        ($cantidad > 0 && $this->saldo >= $cantidad) 
            ?   $this->saldo -= $cantidad 
            :   $cantidad = 0;
        return $cantidad;
    }
}

$cuenta1=new CuentaBancaria();
echo "Cantidad depositada: " . $cuenta1->depositar(200) . "€ <br> El saldo de la cuenta es: " . $cuenta1->getSaldo() . "€ <br> Cantidad retirada: " . $cuenta1->retirar(190) . "€ <br>
El saldo actual es: " . $cuenta1->getSaldo() . "€";