<?php

class Subtracao {
    private $numeros = array();

    public function __construct() {
    }

    public function subtrai($numeros) {
        $result = $numeros[1] - $numeros[0];
        return  $result;
    }
}