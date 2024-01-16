<?php
class Prodotti
{
    public $cibo;
    public $giochi;
    public $cuccie;
    public $razza;
    public $dimensioni;

    public function __construct($cibo, $giochi, $cuccie, Animali $razza, $dimensioni)
    {

        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cuccie = $cuccie;
        $this->razza = $razza;
        $this->dimensioni = $dimensioni;
    }

    public function getFullAddress()
    {
        $result = $this->cibo . ", " . $this->giochi . " - " . $this->cuccie;
        return $result;
    }
}
