<?php

class Divisao {
    private $numeros = array();

    public function __construct() {
    }

    public function divide($numeros) {
        $result = $numeros[1] / $numeros[0];
        return  $result;
    }
}