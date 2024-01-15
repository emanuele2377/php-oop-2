<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Animali(
        "Cani",
        new Prodotti("crocchette", "Pallina", "Casetta")
    ),
    new Animali(
        "Gatti",
        new Prodotti("crocchette", "Tiragrafffi", "Lettiera")
    ),
    new Animali(
        "Pesci",
        new Prodotti("mangime", "Castello", "Acquario")
    ),
    new Animali(
        "Tartarughe",
        new Prodotti("mangime", "Isoletta", "Acquario")
    )
];
