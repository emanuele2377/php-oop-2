<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Animali.php';


$cards = [
    new Prodotti(
        " crocchette 15$",
        " Pallina 10$",
        " Casetta per cani 120$",
        '<img style="width: 50%;" src="./cane.jpg">',
        new Animali("Cani", "nomeimg")
    ),

    new Prodotti(
        "crocchette 14$",
        "Tiragrafffi 80$",
        "Lettiera 60$",
        '<img style="width: 50%;" src="./gatto.jpg">',
        new Animali("Gatti", "nomeimg")
    ),

    new Prodotti(
        "mangime 10$",
        "Castello 50$",
        "Acquario 150$",
        '<img style="width: 50%;" src="./pesce.jpg">',
        new Animali("Pesci", "nomeimg")
    ),

    new Prodotti(
        "mangime 10$",
        "Isoletta 30$",
        "Acquario 100$",
        '<img style="width: 50%;" src="./tartaruga.jpg">',
        new Animali("Tartarughe", "nomeimg")
    )
];
