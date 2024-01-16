<?php

require_once __DIR__ . '/Prodotti.php';

class Animali
{
    public $razza;


    public function __construct($razza)
    {
        $this->razza = $razza;
    }

    public function getRazza()
    {
        return $this->razza;
    }
}
