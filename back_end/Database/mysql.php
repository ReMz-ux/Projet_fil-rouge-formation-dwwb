<?php

namespace back_end\Database;

class Mysql
{
    // Methode pour se connecter a la base de donnees
    public function connect()
    {
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=le12emeshop;charset=utf8mb4', 'root', '');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }
}
