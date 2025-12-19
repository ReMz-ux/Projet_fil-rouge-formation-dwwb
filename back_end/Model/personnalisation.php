<?php

class Personnalisation
{
    private int $id_personnalisation;
    private int $id_maillot;
    private string $nom_personnalise;
    private int $numero_personnalise;

    //Constructeur
    public function __construct() {}

    // Getters et Setters
    public function getIdPersonnalisation(): int
    {
        return $this->id_personnalisation;
    }
    public function setIdPersonnalisation(int $id_personnalisation): void
    {
        $this->id_personnalisation = $id_personnalisation;
    }
    public function getIdMaillot(): int
    {
        return $this->id_maillot;
    }
    public function setIdMaillot(int $id_maillot): void
    {
        $this->id_maillot = $id_maillot;
    }
    public function getNomPersonnalise(): string
    {
        return $this->nom_personnalise;
    }
    public function setNomPersonnalise(string $nom_personnalise): void
    {
        $this->nom_personnalise = $nom_personnalise;
    }
    public function getNumeroPersonnalise(): int
    {
        return $this->numero_personnalise;
    }
    public function setNumeroPersonnalise(int $numero_personnalise): void
    {
        $this->numero_personnalise = $numero_personnalise;
    }

    //
}
