<?php

namespace back_end\Database;

// Chargement du fichier de configuration
require_once __DIR__ . '/../env.php';

class Mysql
{
    // Methode pour se connecter a la base de donnees
    public function connect()
    {
        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', DB_HOST, DB_NAME, DB_CHARSET);
            $pdo = new \PDO($dsn, DB_USER, DB_PASS);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }
}
