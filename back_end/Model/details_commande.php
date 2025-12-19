<?php

class Details_commande
{
    private int $id_details_commande;
    private int $id_commande;
    private int $quantite;
    private float $prix_unitaire;

    //Constructeur
    public function __construct() {}

    // Getters et Setters
    public function getIdDetailsCommande(): int
    {
        return $this->id_details_commande;
    }
    public function setIdDetailsCommande(int $id_details_commande): void
    {
        $this->id_details_commande = $id_details_commande;
    }
    public function getIdCommande(): int
    {
        return $this->id_commande;
    }
    public function setIdCommande(int $id_commande): void
    {
        $this->id_commande = $id_commande;
    }
    public function getQuantite(): int
    {
        return $this->quantite;
    }
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }
    public function getPrixUnitaire(): float
    {
        return $this->prix_unitaire;
    }
    public function setPrixUnitaire(float $prix_unitaire): void
    {
        $this->prix_unitaire = $prix_unitaire;
    }


    //
}
