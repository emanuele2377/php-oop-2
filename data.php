<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Prodotti(
        "Cibo: crocchette",
        "Giochi: Pallina",
        "Cuccia: Casetta per cani",
        new Animali("Cani")
    ),

    new Prodotti(
        "crocchette",
        "Tiragrafffi",
        "Lettiera",

        new Animali("Gatti")
    ),

    new Prodotti(
        "mangime",
        "Castello",
        "Acquario",

        new Animali("Pesci")
    ),

    new Prodotti(
        "mangime",
        "Isoletta",
        "Acquario",

        new Animali("Tartarughe")
    )
];
