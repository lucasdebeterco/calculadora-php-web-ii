<?php

class Multiplicacao {
    private $numeros = array();

    public function __construct() {
    }
    
    public function multiplica($numeros) {
        $result = $numeros[0] * $numeros[1];
        return  $result;
    }
}