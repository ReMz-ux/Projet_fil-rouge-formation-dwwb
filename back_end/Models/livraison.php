<?php

class Livraison
{
    private int $id_livraison;
    private int $id_commande;
    private DateTime $date_envoi;
    private string $numero_suivi;
    private DateTime $date_reception;
    private string $transporteur;
    //Constructeur
    public function __construct() {}

    // Getters et Setters
    public function getIdLivraison(): int
    {
        return $this->id_livraison;
    }
    public function setIdLivraison(int $id_livraison): void
    {
        $this->id_livraison = $id_livraison;
    }
    public function getIdCommande(): int
    {
        return $this->id_commande;
    }
    public function setIdCommande(int $id_commande): void
    {
        $this->id_commande = $id_commande;
    }
    public function getDateEnvoi(): DateTime
    {
        return $this->date_envoi;
    }
    public function setDateEnvoi(DateTime $date_envoi): void
    {
        $this->date_envoi = $date_envoi;
    }
    public function getNumeroSuivi(): string
    {
        return $this->numero_suivi;
    }
    public function setNumeroSuivi(string $numero_suivi): void
    {
        $this->numero_suivi = $numero_suivi;
    }
    public function getDateReception(): DateTime
    {
        return $this->date_reception;
    }
    public function setDateReception(DateTime $date_reception): void
    {
        $this->date_reception = $date_reception;
    }
    public function getTransporteur(): string
    {
        return $this->transporteur;
    }
    public function setTransporteur(string $transporteur): void
    {
        $this->transporteur = $transporteur;
    }
}
