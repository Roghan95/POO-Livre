<?php

class Livre
{
    private string $titre;
    private int $nombrePages;
    private int $anneeParution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nombrePages, int $anneeParution, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nombrePages = $nombrePages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getNombrePages(): int
    {
        return $this->nombrePages;
    }

    public function getAnneeParution(): int
    {
        return $this->anneeParution;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function __toString(): string
    {
        return $this->titre . " (" . $this->anneeParution . ") : " . $this->nombrePages . " pages / " . $this->prix . " €";
    }
}