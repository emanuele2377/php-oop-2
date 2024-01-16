<?php
class Prodotti
{
    public $cibo;
    public $giochi;
    public $cuccie;
    public $razza;

    public function __construct($cibo, $giochi, $cuccie, Animali $razza)
    {

        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cuccie = $cuccie;
        $this->razza = $razza;
    }

    public function getFullAddress()
    {
        $result = $this->cibo . ", " . $this->giochi . " - " . $this->cuccie;
        return $result;
    }
}
