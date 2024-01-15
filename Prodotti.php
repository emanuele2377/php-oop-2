<?php
class Prodotti
{
    public $cibo;
    public $giochi;
    public $cuccie;

    public function __construct($cibo, $giochi, $ccuccie)
    {

        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cuccie = $ccuccie;
    }

    public function getFullAddress()
    {
        $result = $this->cibo . ", " . $this->giochi . " - " . $this->cuccie;
        return $result;
    }
}
