<?php

namespace back_end\Repository;

use back_end\Database\Mysql;
use back_end\Model\Client;

class ClientRepository
{

    // Attributs
    private \PDO $connection;

    // Constructeur
    public function __construct()
    {
        //Injection de la dependance
        $this->connection = (new Mysql())->connect();
    }

    public function inscription(Client $client)
    {
        try {
            // Ecrire la requete SQL
            $sql = "INSERT INTO client (nom, email, mot_de_passe) VALUES (?, ?, ?)";
            // Preparer la requete
            $req = $this->connection->prepare($sql);
            // Lier les parametres
            $req->bindValue(1, $client->getNom());
            $req->bindValue(2, $client->getEmail());
            $req->bindValue(3, $client->getMotDePasse());
            $req->execute();
        } catch (\PDOException $e) {
            // Handle exception
            throw new \PDOException("Erreur d'enregistrement en BDD");
        }
    }

    public function connexion(string $email)
    {
        try {
            // Ecrire la requete SQL
            $sql = "SELECT * FROM client WHERE email = ?";
            // Preparer la requete
            $req = $this->connection->prepare($sql);
            // Lier les parametres
            $req->bindValue(1, $email);
            $req->execute();
            $result = $req->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            throw new \PDOException("Erreur de connexion en BDD");
        }
    }
}
