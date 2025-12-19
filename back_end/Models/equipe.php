<?php

class Equipe
{
    private int $id_equipe;
    private string $nom_equipe;
    private string $pays;
    private string $logo_url;

    //Constructeur
    public function __construct() {}


    // Getters et Setters
    public function getIdEquipe(): int
    {
        return $this->id_equipe;
    }
    public function setIdEquipe(int $id_equipe): void
    {
        $this->id_equipe = $id_equipe;
    }
    public function getNomEquipe(): string
    {
        return $this->nom_equipe;
    }
    public function setNomEquipe(string $nom_equipe): void
    {
        $this->nom_equipe = $nom_equipe;
    }
    public function getPays(): string
    {
        return $this->pays;
    }
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }
    public function getLogoUrl(): string
    {
        return $this->logo_url;
    }
    public function setLogoUrl(string $logo_url): void
    {
        $this->logo_url = $logo_url;
    }

    //
}
