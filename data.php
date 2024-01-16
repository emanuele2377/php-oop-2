<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Prodotti(
        "Cibo: crocchette",
        "Giochi: Pallina",
        "Cuccia: Casetta per cani",
        "immagini",
        new Animali("Cani", "nomeimg")
    ),

    new Prodotti(
        "crocchette",
        "Tiragrafffi",
        "Lettiera",
        "immagini",
        new Animali("Gatti", "nomeimg")
    ),

    new Prodotti(
        "mangime",
        "Castello",
        "Acquario",
        "immagini",
        new Animali("Pesci", "nomeimg")
    ),

    new Prodotti(
        "mangime",
        "Isoletta",
        "Acquario",
        "immagini",
        new Animali("Tartarughe", "nomeimg")
    )
];
