<?php

namespace back_end\Model;


use DateTime;

class Client
{
    private int $id_client;
    private int $id_commande;
    private string $email;
    private string $mot_de_passe;
    private string $nom;
    private string $prenom;
    private string $code_postal;
    private string $ville;
    private DateTime $date_inscription;


    //Constructeur
    public function __construct() {}


    // Getters et Setters
    public function getIdClient(): int
    {
        return $this->id_client;
    }
    public function setIdClient(int $id_client): void
    {
        $this->id_client = $id_client;
    }
    public function getIdCommande(): int
    {
        return $this->id_commande;
    }
    public function setIdCommande(int $id_commande): void
    {
        $this->id_commande = $id_commande;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getMotDePasse(): string
    {
        return $this->mot_de_passe;
    }
    public function setMotDePasse(string $mot_de_passe): void
    {
        $this->mot_de_passe = $mot_de_passe;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    public function getCodePostal(): string
    {
        return $this->code_postal;
    }
    public function setCodePostal(string $code_postal): void
    {
        $this->code_postal = $code_postal;
    }
    public function getVille(): string
    {
        return $this->ville;
    }
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }
    public function getDateInscription(): DateTime
    {
        return $this->date_inscription;
    }
    public function setDateInscription(DateTime $date_inscription): void
    {
        $this->date_inscription = $date_inscription;
    }

    //
}
