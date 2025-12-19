<?php

class Maillot
{
    private int $id_produit;
    private string $nom_produit;
    private float $prix;
    private string $taille;
    private string $nom_sur_maillot;
    private int $numero_sur_maillot;
    private int $stock;
    private string $description;
    //Constructeur
    public function __construct() {}
    // Getters et Setters
    public function getIdProduit(): int
    {
        return $this->id_produit;
    }
    public function setIdProduit(int $id_produit): void
    {
        $this->id_produit = $id_produit;
    }
    public function getNomProduit(): string
    {
        return $this->nom_produit;
    }
    public function setNomProduit(string $nom_produit): void
    {
        $this->nom_produit = $nom_produit;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }
    public function getTaille(): string
    {
        return $this->taille;
    }
    public function setTaille(string $taille): void
    {
        $this->taille = $taille;
    }
    public function getNomSurMaillot(): string
    {
        return $this->nom_sur_maillot;
    }
    public function setNomSurMaillot(string $nom_sur_maillot): void
    {
        $this->nom_sur_maillot = $nom_sur_maillot;
    }
    public function getNumeroSurMaillot(): int
    {
        return $this->numero_sur_maillot;
    }
    public function setNumeroSurMaillot(int $numero_sur_maillot): void
    {
        $this->numero_sur_maillot = $numero_sur_maillot;
    }
    public function getStock(): int
    {
        return $this->stock;
    }
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    //
}
