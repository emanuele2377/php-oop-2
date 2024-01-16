<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Prodotti(
        "Cibo: crocchette 15$",
        "Giochi: Pallina 10$",
        "Cuccia: Casetta per cani 120$",
        '<img class="img" src="./cani.jpg">',
        new Animali("Cani", "nomeimg")
    ),

    new Prodotti(
        "crocchette 14$",
        "Tiragrafffi 80$",
        "Lettiera 60$",
        "immagini",
        new Animali("Gatti", "nomeimg")
    ),

    new Prodotti(
        "mangime 10$",
        "Castello 50$",
        "Acquario 150$",
        '<img src="">',
        new Animali("Pesci", "nomeimg")
    ),

    new Prodotti(
        "mangime 10$",
        "Isoletta 30$",
        "Acquario 100$",
        '<img src="">',
        new Animali("Tartarughe", "nomeimg")
    )
];
