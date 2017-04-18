/**
 * Created by drakness_power on 29/11/2016.
 */



function VerifierChamps_AncienEleve() {
    //A completer

    if (document.getElementById('date_maj').value == ""){
        document.getElementById('message_date_maj').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_maj').innerHTML = '';
    }
    if (document.getElementById('diplome').value == ""){
        document.getElementById('message_diplome').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_diplome').innerHTML = '';
    }
    if (document.getElementById('nom_ancien_eleve').value == "") {
        document.getElementById('message_nom').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom').innerHTML = '';
    }
    if (document.getElementById('prenom_ancien_eleve').value == ""){
        document.getElementById('message_prenom').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_prenom').innerHTML = '';
    }
    if (document.getElementById('2A2E').value == ""){
        document.getElementById('message_2A2E').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_2A2E').innerHTML = '';
    }
    if (document.getElementById('compte_linkedin').value == ""){
        document.getElementById('message_compte_linkedin').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_compte_linkedin').innerHTML = '';
    }
    if (document.getElementById('nom_marital').value == ""){
        document.getElementById('message_nom_marital').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_marital').innerHTML = '';
    }
    if (document.getElementById('date_promo_bac4').value == ""){
        document.getElementById('message_date_promo4').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_promo4').innerHTML = '';
    }
    if (document.getElementById('date_promo_bac5').value == ""){
        document.getElementById('message_date_promo5').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_promo5').innerHTML = '';
    }
    if (document.getElementById('portable_ancien_eleve').value == ""){
        document.getElementById('message_portable_ancien_eleve').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_portable_ancien_eleve').innerHTML = '';
    }
    if (document.getElementById('telephone_fixe_ancien_eleve').value == ""){
        document.getElementById('message_telephone_ancien_eleve').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_telephone_ancien_eleve').innerHTML = '';
    }
    if (document.getElementById('mail_ancien_eleve').value == ""){
        document.getElementById('message_mail_ancien_eleve').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_mail_ancien_eleve').innerHTML = '';
    }
    if (document.getElementById('commentaires').value == ""){
        document.getElementById('message_commentaires').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_commentaires').innerHTML = '';
    }
    if (document.getElementById('poste_occupe').value == ""){
        document.getElementById('message_poste_occupe').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_poste_occupe').innerHTML = '';
    }
    if (document.getElementById('categorie_poste').value == ""){
        document.getElementById('message_categorie_poste').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_categorie_poste').innerHTML = '';
    }
    if (document.getElementById('salaire_moyen').value == ""){
        document.getElementById('message_salaire_moyen').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_salaire_moyen').innerHTML = '';
    }
    if (document.getElementById('nom_entreprise').value == ""){
        document.getElementById('message_nom_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_entreprise').innerHTML = '';
    }
}
function VerifierChamps_Baccalaureat() {
    //A completer

    if (document.getElementById('annee_obtention_BAC').value == "") {
        document.getElementById('message_annee_obtention_BAC').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_annee_obtention_BAC').innerHTML = '';
    }
    if (document.getElementById('nom_BAC').value == "") {
        document.getElementById('message_nom_BAC').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_BAC').innerHTML = '';
    }
    if (document.getElementById('mention_obtenu').value == "") {
        document.getElementById('message_mention_obtenu').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_mention_obtenu').innerHTML = '';
    }
    if (document.getElementById('option_BAC').value == "") {
        document.getElementById('message_option_BAC').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_option_BAC').innerHTML = '';
    }
    if (document.getElementById('nombre_etudiant').value == "") {
        document.getElementById('message_nombre_etudiant').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nombre_etudiant').innerHTML = '';
    }
    if (document.getElementById('nom_etablissement').value == "") {
        document.getElementById('message_nom_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_etablissement').innerHTML = '';
    }
}

function VerifierChamps_BacPlus2(){
    if (document.getElementById('nom_bacPlus2').value == "") {
        document.getElementById('message_nom_bacPlus2').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_bacPlus2').innerHTML = '';
    }
    if (document.getElementById('option_bacPlus2').value == "") {
        document.getElementById('message_option_bacPlus2').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_option_bacPlus2').innerHTML = '';
    }
    if (document.getElementById('annee_bacPlus2').value == "") {
        document.getElementById('message_annee_bacPlus2').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_annee_bacPlus2').innerHTML = '';
    }
    if (document.getElementById('nombre_etudiants').value == "") {
        document.getElementById('message_nombre_etudiants').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nombre_etudiants').innerHTML = '';
    }
    if (document.getElementById('nom_etablissement').value == "") {
        document.getElementById('message_nom_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_etablissement').innerHTML = '';
    }

}

function VerifierChamps_Contacts() {

    if (document.getElementById('nom_contact').value == "") {
        document.getElementById('message_nom_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_contact').innerHTML = '';
    }
    if (document.getElementById('prenom_contact').value == "") {
        document.getElementById('message_prenom_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_prenom_contact').innerHTML = '';
    }
    if (document.getElementById('date_maj').value == "") {
        document.getElementById('message_date_maj').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_maj').innerHTML = '';
    }
    if (document.getElementById('genre_contact').value == "") {
        document.getElementById('message_genre_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_genre_contact').innerHTML = '';
    }
    if (document.getElementById('fonction_contact').value == "") {
        document.getElementById('message_fonction_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_fonction_contact').innerHTML = '';
    }
    if (document.getElementById('protable_contact').value == "") {
        document.getElementById('message_portable_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_portable_contact').innerHTML = '';
    }
    if (document.getElementById('mail_contact').value == "") {
        document.getElementById('message_mail_contact').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_mail_contact').innerHTML = '';
    }
    if (document.getElementById('observations').value == "") {
        document.getElementById('message_observations').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_observations').innerHTML = '';
    }
    if (document.getElementById('nom_entreprise').value == "") {
        document.getElementById('message_nom_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_entreprise').innerHTML = '';
    }
}

function VerifierChamps_Entreprise() {

    if (document.getElementById('date_maj').value == "") {
        document.getElementById('message_date_maj').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_maj').innerHTML = '';
    }
    if (document.getElementById('nom_entreprise').value == "") {
        document.getElementById('message_nom_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_entreprise').innerHTML = '';
    }
    if (document.getElementById('type_entreprise').value == "") {
        document.getElementById('message_type_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_type_entreprise').innerHTML = '';
    }
    if (document.getElementById('secteur_activite').value == "") {
        document.getElementById('message_secteur_activite').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_secteur_activite').innerHTML = '';
    }
    if (document.getElementById('site_internet').value == "") {
        document.getElementById('message_site_internet').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_site_internet').innerHTML = '';
    }
    if (document.getElementById('telephone_entreprise').value == "") {
        document.getElementById('message_telephone_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_telephone_entreprise').innerHTML = '';
    }
    if (document.getElementById('adresse_entreprise').value == "") {
        document.getElementById('message_adresse_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_adresse_entreprise').innerHTML = '';
    }
    if (document.getElementById('code_postal_entreprise').value == "") {
        document.getElementById('message_code_postal_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_code_postal_entreprise').innerHTML = '';
    }
    if (document.getElementById('ville_entreprise').value == "") {
        document.getElementById('message_ville_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_ville_entreprise').innerHTML = '';
    }
    if (document.getElementById('pays_entreprise').value == "") {
        document.getElementById('message_pays_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_pays_entreprise').innerHTML = '';
    }
    if (document.getElementById('logo_entreprise').value == "") {
        document.getElementById('message_logo_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_logo_entreprise').innerHTML = '';
    }
    if (document.getElementById('contact_ESTA').value == "") {
        document.getElementById('message_contact_ESTA').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_contact_ESTA').innerHTML = '';
    }
    if (document.getElementById('stagiaire').value == "") {
        document.getElementById('message_stagiaire').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_stagiaire').innerHTML = '';
    }
    if (document.getElementById('veut_stagiaire').value == "") {
        document.getElementById('message_veut_stagiaire').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_veut_stagiaire').innerHTML = '';
    }
    if (document.getElementById('ancien_eleve').value == "") {
        document.getElementById('message_ancien_eleve').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_ancien_eleve').innerHTML = '';
    }
    if (document.getElementById('journee_speciale').value == "") {
        document.getElementById('message_journee_speciale').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_journee_speciale').innerHTML = '';
    }
    if (document.getElementById('forum_entreprise').value == "") {
        document.getElementById('message_forum_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_forum_entreprise').innerHTML = '';
    }
    if (document.getElementById('date_visite').value == "") {
        document.getElementById('message_date_visite').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_dzte_visite').innerHTML = '';
    }
    if (document.getElementById('date_envoi_information').value == "") {
        document.getElementById('message_date_envoi_information').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_date_envoi_information').innerHTML = '';
    }
    if (document.getElementById('commentaire_envoi').value == "") {
        document.getElementById('message_commentaire_envoi').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_commentaire_envoi').innerHTML = '';
    }
}

function VerifierChamps_Etablissement() {

    if (document.getElementById('categorie_etablissement').value == "") {
        document.getElementById('message_categorie_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_categorie_etablissement').innerHTML = '';
    }
    if (document.getElementById('derniere_maj').value == "") {
        document.getElementById('message_derniere_maj').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_derniere_maj').innerHTML = '';
    }
    if (document.getElementById('nom_etablissement').value == "") {
        document.getElementById('message_nom_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_etablissement').innerHTML = '';
    }
    if (document.getElementById('nom_academie').value == "") {
        document.getElementById('message_nom_academie').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_academie').innerHTML = '';
    }
    if (document.getElementById('formation_chimie').value == "") {
        document.getElementById('message_formation_chimie').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_formation_chimie').innerHTML = '';
    }
    if (document.getElementById('telephone_etablissement').value == "") {
        document.getElementById('message_telephone_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_telephone_etablissement').innerHTML = '';
    }
    if (document.getElementById('mail_etablissement').value == "") {
        document.getElementById('message_mail_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_mail_etablissement').innerHTML = '';
    }
    if (document.getElementById('adresse_etablissement').value == "") {
        document.getElementById('message_adrese_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_adresse_etablissement').innerHTML = '';
    }
    if (document.getElementById('code_postal_etablissement').value == "") {
        document.getElementById('message_code_postal_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_code_postal_etablissement').innerHTML = '';
    }
    if (document.getElementById('ville_etablissement').value == "") {
        document.getElementById('message_ville_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_ville_etablissement').innerHTML = '';
    }if (document.getElementById('BAC').value == "") {
        document.getElementById('message_BAC').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_BAC').innerHTML = '';
    }
    if (document.getElementById('BACplus2').value == "") {
        document.getElementById('message_BACplus2').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_BACplus2').innerHTML = '';
    }
    if (document.getElementById('contact_etablissement').value == "") {
        document.getElementById('message_contact_etablissement').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_contact_etablissement').innerHTML = '';
    }

}

function VerifierChamps_Etudiant() {

}

function VerifierChamps_Groupe() {

    if (document.getElementById('nom_groupe').value == "") {
        document.getElementById('message_nom_groupe').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_groupe').innerHTML = '';
    }
    if (document.getElementById('nombre_etudiant').value == "") {
        document.getElementById('message_nombre_etudiant').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nombre_etudiant').innerHTML = '';
    }
    if (document.getElementById('semestre').value == "") {
        document.getElementById('message_semestre').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_semestre').innerHTML = '';
    }
}

function VerifierChamps_Parents() {

    if (document.getElementById('nom_parents').value == "") {
        document.getElementById('message_nom_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_parents').innerHTML = '';
    }
    if (document.getElementById('prenom_parents').value == "") {
        document.getElementById('message_prenom_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_prenom_parents').innerHTML = '';
    }
    if (document.getElementById('genre_parents').value == "") {
        document.getElementById('message_genre_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_genre_parents').innerHTML = '';
    }
    if (document.getElementById('adresse_parents').value == "") {
        document.getElementById('message_adresse_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_adresse_parents').innerHTML = '';
    }
    if (document.getElementById('code_postal_parents').value == "") {
        document.getElementById('message_code_postal_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_code_postal_parents').innerHTML = '';
    }
    if (document.getElementById('ville_parents').value == "") {
        document.getElementById('message_ville_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_ville_parents').innerHTML = '';
    }
    if (document.getElementById('pays_parents').value == "") {
        document.getElementById('message_pays_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_pays_parents').innerHTML = '';
    }
    if (document.getElementById('telephone_parents').value == "") {
        document.getElementById('message_telephone_parents').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_telephone_parents').innerHTML = '';
    }
    if (document.getElementById('portable_mere').value == "") {
        document.getElementById('message_portable_mere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_portable_mere').innerHTML = '';
    }
    if (document.getElementById('profession_mere').value == "") {
        document.getElementById('message_profession_mere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_profession_mere').innerHTML = '';
    }
    if (document.getElementById('entreprise_mere').value == "") {
        document.getElementById('message_entreprise_mere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_entreprise_mere').innerHTML = '';
    }
    if (document.getElementById('portable_pere').value == "") {
        document.getElementById('message_protable_pere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_protable_pere').innerHTML = '';
    }
    if (document.getElementById('profession_pere').value == "") {
        document.getElementById('message_profession_pere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_profession_pere').innerHTML = '';
    }
    if (document.getElementById('entreprise_pere').value == "") {
        document.getElementById('message_entreprise_pere').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_entreprise_pere').innerHTML = '';
    }
    if (document.getElementById('diplome').value == "") {
        document.getElementById('message_diplome').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_diplome').innerHTML = '';
    }
}

function VerifierChamps_Professeur(){

}

function VerifierChamps_Semestre() {
    if (document.getElementById('semestre').value == "") {
        document.getElementById('message_semestre').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_semestre').innerHTML = '';
    }
    if (document.getElementById('nombre_etudiant').value == "") {
        document.getElementById('message_nombre_etudiant').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nombre_etudiant').innerHTML = '';
    }
}

function VerifierChamps_Stage() {

    if (document.getElementById('annee_stage').value == "") {
        document.getElementById('message_annee_stage').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_annee_stage').innerHTML = '';
    }
    if (document.getElementById('mission_stage').value == "") {
        document.getElementById('message_mission_stage').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_mission_stage').innerHTML = '';
    }
    if (document.getElementById('objectif_stage').value == "") {
        document.getElementById('message_objectif_stage').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_objectif_stage').innerHTML = '';
    }
    if (document.getElementById('responsabilites').value == "") {
        document.getElementById('message_responsabilites').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_responsabilites').innerHTML = '';
    }
    if (document.getElementById('dates_stage').value == "") {
        document.getElementById('message_dates_stage').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_dates_stage').innerHTML = '';
    }
    if (document.getElementById('indemnite').value == "") {
        document.getElementById('message_indemnite').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_indemnite').innerHTML = '';
    }
    if (document.getElementById('stage_semestre').value == "") {
        document.getElementById('message_stage_semestre').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_stage_semestre').innerHTML = '';
    }
    if (document.getElementById('responsable_ESTA').value == "") {
        document.getElementById('message_responsable_ESTA').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_responsable_ESTA').innerHTML = '';
    }
    if (document.getElementById('nom_etudiant').value == "") {
        document.getElementById('message_nom_etudiant').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_etudiant').innerHTML = '';
    }
    if (document.getElementById('nom_tuteur').value == "") {
        document.getElementById('message_nom_tuteur').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_tuteur').innerHTML = '';
    }
    if (document.getElementById('nom_entreprise').value == "") {
        document.getElementById('message_nom_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_entreprise').innerHTML = '';
    }
    if (document.getElementById('nom_representant_entreprise').value == "") {
        document.getElementById('message_nom_representant_entreprise').innerHTML = 'champ vide';
    }
    else {
        document.getElementById('message_nom_representant_entreprise').innerHTML = '';
    }
}





if (document.getElementById('').value == "") {
    document.getElementById('').innerHTML = 'champ vide';
}
else {
    document.getElementById('').innerHTML = '';
}











