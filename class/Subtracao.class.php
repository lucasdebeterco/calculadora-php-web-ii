<?php

class Subtracao {
    private $numeros = array();

    public function __construct() {
    }

    public function subtrai($numeros) {
        $result = $numeros[0] - $numeros[1];
        return  $result;
    }
}