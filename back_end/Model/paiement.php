<?php

class Paiement
{
    private int $id_paiement;
    private int $id_commande;
    private DateTime $date_paiement;
    private string $mode_paiement;
    private string $statut_paiement;

    //Constructeur
    public function __construct() {}

    // Getters et Setters
    public function getIdPaiement(): int
    {
        return $this->id_paiement;
    }
    public function setIdPaiement(int $id_paiement): void
    {
        $this->id_paiement = $id_paiement;
    }
    public function getIdCommande(): int
    {
        return $this->id_commande;
    }
    public function setIdCommande(int $id_commande): void
    {
        $this->id_commande = $id_commande;
    }
    public function getDatePaiement(): DateTime
    {
        return $this->date_paiement;
    }
    public function setDatePaiement(DateTime $date_paiement): void
    {
        $this->date_paiement = $date_paiement;
    }
    public function getModePaiement(): string
    {
        return $this->mode_paiement;
    }
    public function setModePaiement(string $mode_paiement): void
    {
        $this->mode_paiement = $mode_paiement;
    }
    public function getStatutPaiement(): string
    {
        return $this->statut_paiement;
    }
    public function setStatutPaiement(string $statut_paiement): void
    {
        $this->statut_paiement = $statut_paiement;
    }

    //
}
