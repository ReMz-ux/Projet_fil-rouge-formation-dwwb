
//!!!!!!!DYNAMISE LES BOUTONS DU FORMULAIRE D'INSCRIPTION!!!!!//
//===== Je recupere les boutons de mon fichier html =====//
const boutonInscription = document.querySelector('.inscription');
const boutonConnexion = document.querySelector('.connexion');


//===== Modification de couleur au click =====//
boutonInscription.addEventListener('click', (e) => {
    boutonInscription.style.backgroundColor = '#FF1654'
    setTimeout(() => {
        boutonInscription.style.backgroundColor = '';
    }, 500);
})


//===== Mofification de couleur au click =====//
boutonConnexion.addEventListener('click', (e) => {
    boutonConnexion.style.backgroundColor = '#FF1654'
    setTimeout(() => {
        boutonConnexion.style.backgroundColor = '';
    }, 500);
})

//============================================================================


