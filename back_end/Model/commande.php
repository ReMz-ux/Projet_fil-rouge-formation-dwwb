<?php

class Commande
{
    private int $id_commande;
    private DateTime $date_commande;
    private string $statut;
    private float $montant_total;
    private string $mode_paiement;
    //Constructeur
    public function __construct() {}

    // Getters et Setters
    public function getIdCommande(): int
    {
        return $this->id_commande;
    }
    public function setIdCommande(int $id_commande): void
    {
        $this->id_commande = $id_commande;
    }
    public function getDateCommande(): DateTime
    {
        return $this->date_commande;
    }
    public function setDateCommande(DateTime $date_commande): void
    {
        $this->date_commande = $date_commande;
    }
    public function getStatut(): string
    {
        return $this->statut;
    }
    public function setStatut(string $statut): void
    {
        $this->statut = $statut;
    }
    public function getMontantTotal(): float
    {
        return $this->montant_total;
    }
    public function setMontantTotal(float $montant_total): void
    {
        $this->montant_total = $montant_total;
    }
    public function getModePaiement(): string
    {
        return $this->mode_paiement;
    }
    public function setModePaiement(string $mode_paiement): void
    {
        $this->mode_paiement = $mode_paiement;
    }

    //
}
