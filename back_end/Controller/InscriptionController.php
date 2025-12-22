<?php

namespace back_end\Controller;

use back_end\Model\Client;
use back_end\Repository\ClientRepository;
use back_end\utils\Tools;

class InscriptionController
{
    //Attributs
    private ClientRepository $clientRepository;
    //Constructeur
    public function __construct()
    {
        //Injection de la dependance
        $this->clientRepository = new ClientRepository();
    }

    public function inscriptionClient(): array
    {
        // Creation d'un  tableau pour les messages
        $data = [];

        // Verifier si le formulaire est soumis
        if (isset($_POST['submit'])) {
            // Verifier que tous les champs sont remplis
            if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
                try {
                    // Vérifier si l'email existe déjà
                    $emailExiste = $this->clientRepository->recupererlescompteclient(Tools::sanitize($_POST['email']));

                    if ($emailExiste) {
                        $data['error'] = "Cet email est déjà utilisé";
                    } else {
                        // Objet Client
                        $compte = new Client();

                        //Nettoyage des données
                        $compte->setNom(Tools::sanitize($_POST['nom']));
                        $compte->setEmail(Tools::sanitize($_POST['email']));
                        // Hashage du mot de passe
                        $compte->setMotDePasse(password_hash(Tools::sanitize($_POST['mdp']), PASSWORD_BCRYPT));

                        // Enregistrement en BDD
                        $this->clientRepository->enregistrementBDD($compte);
                        $data['success'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                    }
                } catch (\Exception $e) {
                    $data['error'] = "Erreur lors de l'inscription : " . $e->getMessage();
                }
            } else {
                $data['error'] = "Tous les champs doivent être remplis";
            }
        }

        return $data;
    }
}
