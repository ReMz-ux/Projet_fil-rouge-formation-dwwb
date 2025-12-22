

//====== Je recupere l'element pour l'inscription dans mon html ======//
const formulaireInscription = document.querySelector(".formulaire-inscription form")

//===== Intercepte le click sur inscription =====//
formulaireInscription.addEventListener('submit', function (e) {
    e.preventDefault();

    //===== Récupere les données saisie dans les formulaire precis =====//
    const nom = formulaireInscription.elements["nom"].value;
    const email = formulaireInscription.elements["email"].value;
    const motdepasse = formulaireInscription.elements["mdp"].value;
    //===== Stockage des données dans un objet =====//
    const utilisateur = {
        nom: nom,
        email: email,
        motdepasse: motdepasse
    };
    //===== Je stock les informations utilisateurs dans le localStorage ======//
    //===== + Je convertie mon objet en chaine de caractére (JSON)
    localStorage.setItem(email, JSON.stringify(utilisateur));
});

//===== Partie Connexion =====//

const formulaireConnexion = document.querySelector(".formulaire-connexion form")

//===== Interception du click connexion =====//
formulaireConnexion.addEventListener('submit', (e) => {
    e.preventDefault();

    //===== Je récupere les informations saisies
    const email = formulaireConnexion.elements["email"].value;
    const motDePasse = formulaireConnexion.elements["password"].value;

    //===== Récupération de l'utilisateur depuis le stockage =====//
    const utilisateurStocké = JSON.parse(localStorage.getItem(email));

    //===== Verification de mot de passe utiliser =====//
    if (utilisateurStocké && utilisateurStocké.motdepasse === motDePasse) {
        // ✅ Connexion réussie : on mémorise l'utilisateur connecté
        localStorage.setItem("utilisateurConnecté", JSON.stringify(utilisateurStocké));
        alert("Connexion réussie !");
    } else {
        alert("Email ou mot de passe incorrect.");
    }
})


//!!!!!!!!!!!! ATTENTION !!!!!!!!!!!!//

//====== Ceci doit etre fait UNIQUEMENT en Local et pas en temps normal sur un site web qui a un serveur et qui renvoie ce type de données sensibles ======//
