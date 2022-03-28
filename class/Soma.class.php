<?php

class Soma {
    private $numeros = array();

    public function __construct() {
    }

    public function soma($numeros) {
        $result = $numeros[0] + $numeros[1];
        return  $result;
    }
}