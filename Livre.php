<?php

class Livre
{
    private string $_titre;
    private int $_nombrePages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, int $nombrePages, int $anneeParution, float $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_nombrePages = $nombrePages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->setLivres($this);
    }

    // Getters --------------------------------------------

    public function getTitre(): string
    {
        return $this->_titre;
    }

    public function getNombrePages(): int
    {
        return $this->_nombrePages;
    }

    public function getAnneeParution(): int
    {
        return $this->_anneeParution;
    }

    public function getPrix(): float
    {
        return $this->_prix;
    }

    public function getAuteur(): Auteur
    {
        return $this->_auteur;
    }

    // Setters -----------------------------------------------

    function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    function setNombrePages($nombrePages)
    {
        $this->_nombrePages = $nombrePages;
    }

    function setAnneeParution($anneeParution)
    {
        $this->_anneeParution = $anneeParution;
    }

    function setPrix($prix)
    {
        $this->_prix = $prix;
    }


    public function __toString(): string
    {
        return $this->_titre . " (" . $this->_anneeParution . ") : " . $this->_nombrePages . " pages / " . $this->_prix . " €";
    }
}