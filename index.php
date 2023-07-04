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

function afficherBibliographie(Auteur $auteur)
{
    echo "<h1>Livres de " . $auteur . "</h1><br>";

    global $livre1, $livre2, $livre3, $livre4;

    $livres = array($livre1, $livre2, $livre3, $livre4);

    foreach ($livres as $livre) {
        if ($livre->getAuteur() === $auteur) {
            echo $livre . "<br>";
        }
    }
}

// Affichage de la bibliographie de l'auteur
afficherBibliographie($auteur1);