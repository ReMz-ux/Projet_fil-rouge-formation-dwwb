// Gestion de l'affichage des messages d'erreur et de succès
document.addEventListener('DOMContentLoaded', function () {
    // Vérifier les paramètres URL pour les messages
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const success = urlParams.get('inscription');

    // Créer une div pour les messages si elle n'existe pas
    let messageDiv = document.querySelector('.message-container');
    if (!messageDiv) {
        messageDiv = document.createElement('div');
        messageDiv.className = 'message-container';
        const main = document.querySelector('main');
        if (main) {
            main.insertBefore(messageDiv, main.firstChild);
        }
    }

    // Afficher le message d'erreur
    if (error) {
        messageDiv.innerHTML = `
            <div class="message error-message">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span>${decodeURIComponent(error)}</span>
                <button class="close-message" onclick="this.parentElement.remove()">×</button>
            </div>
        `;
        messageDiv.style.display = 'block';
    }

    // Afficher le message de succès
    if (success === 'success') {
        messageDiv.innerHTML = `
            <div class="message success-message">
                <i class="fa-solid fa-circle-check"></i>
                <span>Inscription réussie ! Vous pouvez maintenant vous connecter.</span>
                <button class="close-message" onclick="this.parentElement.remove()">×</button>
            </div>
        `;
        messageDiv.style.display = 'block';

        // Nettoyer l'URL après 3 secondes
        setTimeout(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        }, 3000);
    }

    // Validation côté client
    const formInscription = document.querySelector('.formulaire-inscription');
    const formConnexion = document.querySelector('.formulaire-connexion');

    // Validation du formulaire d'inscription
    if (formInscription) {
        formInscription.addEventListener('submit', function (e) {
            const nom = document.getElementById('nom').value.trim();
            const email = document.getElementById('email').value.trim();
            const mdp = document.getElementById('mdp').value;

            // Validation du nom (au moins 2 caractères)
            if (nom.length < 2) {
                e.preventDefault();
                afficherErreur('Le nom doit contenir au moins 2 caractères');
                return false;
            }

            // Validation de l'email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                afficherErreur('Veuillez entrer une adresse email valide');
                return false;
            }

            // Validation du mot de passe (au moins 8 caractères)
            if (mdp.length < 8) {
                e.preventDefault();
                afficherErreur('Le mot de passe doit contenir au moins 8 caractères');
                return false;
            }
        });
    }

    // Validation du formulaire de connexion
    if (formConnexion) {
        formConnexion.addEventListener('submit', function (e) {
            const email = document.getElementById('email-co').value.trim();
            const password = document.getElementById('mdp-co').value;

            // Validation de l'email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                afficherErreur('Veuillez entrer une adresse email valide');
                return false;
            }

            // Vérifier que le mot de passe n'est pas vide
            if (password.length === 0) {
                e.preventDefault();
                afficherErreur('Le mot de passe ne peut pas être vide');
                return false;
            }
        });
    }

    // Fonction pour afficher les erreurs
    function afficherErreur(message) {
        let messageDiv = document.querySelector('.message-container');
        if (!messageDiv) {
            messageDiv = document.createElement('div');
            messageDiv.className = 'message-container';
            const main = document.querySelector('main');
            if (main) {
                main.insertBefore(messageDiv, main.firstChild);
            }
        }

        messageDiv.innerHTML = `
            <div class="message error-message">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span>${message}</span>
                <button class="close-message" onclick="this.parentElement.remove()">×</button>
            </div>
        `;
        messageDiv.style.display = 'block';

        // Faire défiler vers le haut pour voir le message
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});
