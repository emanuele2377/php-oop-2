<?php

require_once __DIR__ . '/Prodotti.php';

class Animali
{
    public $razza;
    public $dimensioni;

    public function __construct($razza, $dimensioni)
    {
        $this->razza = $razza;
        $this->dimensioni = $dimensioni;
    }

    public function getRazza()
    {
        return $this->razza;
        return $this->dimensioni;
    }
}
