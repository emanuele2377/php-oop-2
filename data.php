<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Prodotti(
        "crocchette",
        "Pallina",
        "Casetta",
        new Animali("Cani", "20Kg")
    ),

    new Prodotti(
        "crocchette",
        "Tiragrafffi",
        "Lettiera",

        new Animali("Gatti", "10Kg")
    ),

    new Prodotti(
        "mangime",
        "Castello",
        "Acquario",

        new Animali("Pesci", "60g")
    ),

    new Prodotti(
        "mangime",
        "Isoletta",
        "Acquario",

        new Animali("Tartarughe", "4Kg")
    )
];
