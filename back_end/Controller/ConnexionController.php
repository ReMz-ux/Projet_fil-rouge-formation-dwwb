<?php

namespace back_end\Controller;

use back_end\Repository\ClientRepository;
use back_end\utils\Tools;
use back_end\Model\Client;

class ConnexionController
{

    //Attributs
    private ClientRepository $clientRepository;

    //Constructeur
    public function __construct()
    {
        //Injection de la dependance
        $this->clientRepository = new ClientRepository();
    }

    public function connexionClient(): array
    {
        // Creation d'un  tableau pour les messages
        $data = [];

        // Verifier si le formulaire est soumis
        if (isset($_POST['submit'])) {
            // Verifier que tous les champs sont remplis
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                try {
                    // Recuperer le compte client en BDD
                    $compte = $this->clientRepository->recupererlescompteclient(Tools::sanitize($_POST['email']));

                    if ($compte) {
                        // Verifier le mot de passe
                        if (password_verify(Tools::sanitize($_POST['password']), $compte['mot_de_passe'])) {
                            // Connexion reussie
                            // Initialiser la session si pas déjà fait
                            if (session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }
                            $_SESSION['client_id'] = $compte['id'];
                            $_SESSION['client_nom'] = $compte['nom'];
                            $_SESSION['client_email'] = $compte['email'];
                            $data['success'] = "Connexion réussie ! Bienvenue " . $compte['nom'];
                        } else {
                            $data['error'] = "Mot de passe incorrect";
                        }
                    } else {
                        $data['error'] = "Aucun compte trouvé avec cet email";
                    }
                } catch (\Exception $e) {
                    $data['error'] = "Erreur lors de la connexion : " . $e->getMessage();
                }
            } else {
                $data['error'] = "Tous les champs doivent être remplis";
            }
        }

        return $data;
    }
}
