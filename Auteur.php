<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private array $_livres;


    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    // Getters & Setters ----------------------------------------
    public function getNom(): string
    {
        return $this->_nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    function setNom($nom)
    {
        $this->_nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    function setLivres($livres)
    {
        array_push($this->_livres, $livres);
    }

    function getLivres()
    {
        return $this->_livres;
    }

    public function __toString(): string
    {
        return $this->getNom() . " " . $this->getPrenom();
    }

    function afficherBibliographie()
    {
        $resultat = "";
        foreach ($this->_livres as $value) {
            $resultat .= $value->getTitre() . "(" . $value->getAnneeParution() . ")" . " : " . $value->getNombrePages() . " pages / " . $value->getPrix() . " € <br>";
        }
        return $resultat;
    }
}