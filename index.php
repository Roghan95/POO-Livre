<?php

require_once 'Auteur.php';
require_once 'Livre.php';

// Création des auteurs
$auteur1 = new Auteur("King", "Stephen");

// Création des livres
$livre1 = new Livre("Ca", 1138, 1986, 20, $auteur1);
$livre2 = new Livre("Simetierre", 374, 1983, 15, $auteur1);
$livre3 = new Livre("Le Fléau", 823, 1978, 14, $auteur1);
$livre4 = new Livre("Shining", 447, 1977, 16, $auteur1);

// Affichage de la bibliographie de l'auteur
$auteur1->afficherBibliographie();