<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 14/12/2016
 * Time: 14:10
 */
class ShowModel{

    function save_d($con, $s)
    {
        $req = 'INSERT INTO Historique(ligne) VALUES ("' . $s . '");';
        echo $req;
        $result = mysqli_query($con, $req);
    }
    function getAllDonnees($table,$con){

        $req = "SELECT * from $table ;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    /* Partie ADD */

    function addDonneesAncienEleve($con, $donnees){
        $req = "INSERT INTO `Ancien_eleve`(`id_ancien_eleve`, `date_maj_ancien_eleve`, `diplome_ancien_eleve`, `nom_ancien_eleve`,
        `prenom_ancien_eleve`, `2A2E_ancien_eleve`, `compte_likedin_ancien_eleve`, `nom_marital_ancien_eleve`, 
        `date_promoBACplus4_ancien_eleve`, `date_promoBACplus5_ancien_eleve`, `portable_ancien_eleve`, `telephone_fix_ancien_eleve`, 
        `mail_ancien_eleve`, `commentaires_envoi_ancien_eleve`, `poste_occupe`, `categorie_poste_occupe_ancien_eleve`, 
        `salaire_moyen_ancien_eleve`, `nom_entreprise_ancien_eleve`) 
        VALUE (Null, '".$donnees['date_maj_ancien_eleve']."' ,'".$donnees['diplome']."' , '".$donnees['nom_ancien_eleve']."', '".$donnees['prenom_ancien_eleve']."','".$donnees['2A2E']."',
        '".$donnees['compte_linkedin']."','".$donnees['nom_marital']."','".$donnees['date_promo_bac4']."','".$donnees['date_promo_bac5']."','".$donnees['portable_ancien_eleve']."',
        '".$donnees['telephone_fixe_ancien_eleve']."','".$donnees['mail_ancien_eleve']."','".$donnees['commentaires']."','".$donnees['poste_occupe']."', '".$donnees['categorie_poste']."',
        '".$donnees['salaire_moyen']."','".$donnees['nom_entreprise']."');";
        try{
            $this->save_d($con,$req);
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);

        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesAssociationEtudiante($con, $donnees){
        $req = "INSERT INTO `Association_Etudiante` (`id_association_etudiante`, `nom_association_etudiante`, `nom_president_association_etudiante`,
        `nom_vicePresident_association_etudiante`,`nom_secretaire_association_etudiante`,`nom_viceSecretaire_association_etudiante`,
        `nom_tresorier_association_etudiante`,`nom_viceTresorier_association_etudiante`) 
        VALUES(NULL,'".$donnees['nom_association']."','".$donnees['nom_president']."','".$donnees['nom_vicePresident']."','".$donnees['nom_secretaire']."','".$donnees['nom_viceSecretaire']."',
        '".$donnees['nom_tresorier']."','".$donnees['nom_viceTresorier']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
            $this->save_d($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }
    }

    function addDonneesBaccalaureat($con,$donnees){

        $req ="INSERT INTO `Baccalaureat` (`id_baccalaureat`, `annee_baccalaureat`, `nom_baccalaureat`,
        `mention_obtenu_baccalaureat`,`option_baccalaureat`,`nb_etudiants_baccalaureat`) 
        VALUES(NULL,'".$donnees['annee_obtention_BAC']."','".$donnees['nom_BAC']."','".$donnees['mention_obtenu']."',
        '".$donnees['option_BAC']."','".$donnees['nombre_etudiant']."');";


        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }


    function addDonneesBacPlus2($con,$donnees){
        $req ="INSERT INTO `Bacplus2` (`id_bacplus2`, `nom_bacplus2`, `option_bacplus2`,
        `annee_bacplus2`,`nb_etudiants_bacplus2`) 
        VALUES(NULL,'".$donnees['nom_bacPlus2']."','".$donnees['option_bacPlus2']."','".$donnees['annee_bacPlus2']."',
        '".$donnees['nombre_etudiants']."');";
        try{
            $this->save_d($con,$req);
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesContact($con,$donnees){
        $req ="INSERT INTO `Contact` (`id_contact`, `nom_contact`, `prenom_contact`,
        `date_maj_contact`,`genre_contact`,`fonction_contact`,`portable_contact`,`mail_contact`,`observation_contact`,
        `nom_etablissement_contact`,`nom_entreprise_contact`) 
        VALUES(NULL,'".$donnees['nom_contact']."','".$donnees['prenom_contact']."','".$donnees['date_maj']."',
        '".$donnees['genre_contact']."','".$donnees['fonction_contact']."','".$donnees['protable_contact']."',
         '".$donnees['mail_contact']."','".$donnees['observations']."','".$donnees['nom_etablissement']."','".$donnees['nom_entreprise']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesDelegue($con,$donnees){
        $req ="INSERT INTO `Delegue` (`id_delegue`, `nom_delegue`, `annee_delegue`,
        `semestre_delegue`) 
        VALUES(NULL,'".$donnees['nom_delegue']."','".$donnees['annee_delegue']."','".$donnees['semestres']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesEntreprise($con,$donnees){
        $req ="INSERT INTO `Entreprise` (`id_entreprise`, `nom_entreprise`, `date_maj_entreprise`,
        `site_internet_entreprise`,`numero_telephone_entreprise`,`adresse_entreprise`,`code_postal_entreprise`,`ville_entreprise`,`logo_entreprise`,
        `pris_stagiaire_entreprise`,`interesse_stagiaire_entreprise`,`ancien_eleve_entreprise`,`forums_entreprise`,
        `date_visite_entreprise`,`date_envoi_informtion_entreprise`,`commentaires_envoi_entreprise`,`nom_type_entreprise`,`nom_secteur_activite_entreprise`,
        `nom_pays_entreprise`,`nom_permanent_entreprise`,`nom_evenements_entreprise`) 
        VALUES(NULL,'".$donnees['nom_entreprise']."','".$donnees['date_maj']."','".$donnees['site_internet']."',
        '".$donnees['telephone_entreprise']."',
         '".$donnees['adresse_entreprise']."','".$donnees['code_postal_entreprise']."','".$donnees['ville_entreprise']."',
         '".$donnees['logo_entreprise']."','".$donnees['stagiaire']."',
         '".$donnees['veut_stagiaire']."','".$donnees['ancien_eleve']."','".$donnees['forum_entreprise']."',
         '".$donnees['date_visite']."','".$donnees['date_envoi_information']."','".$donnees['commentaire_envoi']."',
         '".$donnees['type_entreprise']."','".$donnees['secteur_activite']."',
         '".$donnees['pays_entreprise']."','".$donnees['contact_ESTA']."','".$donnees['journee_speciale']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesEtablissement($con,$donnees){
        $req ="INSERT INTO `Etablissement` (`id_etablissement`, `nom_etablissement`, `date_maj_etablissement`,
        `chimie_etablissement`,`telephone_etablissement`,`mail_etablissement`,`adresse_etablissement`,`code_postal_etablissement`,`ville_etablissement`,
        `bac_etablissement`,`bacPlus2_etablissement`,`nom_academie_etablissement`,`nom_categorie_etablissement`) 
        VALUES(NULL,'".$donnees['nom_etablissement']."','".$donnees['derniere_maj']."',
        '".$donnees['formation_chimie']."','".$donnees['telephone_etablissement']."',
         '".$donnees['mail_etablissement']."','".$donnees['adresse_etablissement']."','".$donnees['code_postal_etablissement']."',
         '".$donnees['ville_etablissement']."','".$donnees['BAC']."','".$donnees['BACplus2']."',
         '".$donnees['nom_academie']."','".$donnees['categorie_etablissement']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }


    function addDonneesGroupe($con,$donnees){
        $req ="INSERT INTO `Groupe` (`id_groupe`, `nom_groupe`, `nb_etudiants_groupe`,
        `nom_semestre_groupe`) 
        VALUES(NULL,'".$donnees['nom_groupe']."','".$donnees['nombre_etudiant']."','".$donnees['semestre']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }


    function addDonneesParents($con,$donnees){
        $req ="INSERT INTO `Parents` (`id_parents`, `nom_parents`, `prenom_parents`,
        `genre_parents`,`adresse_parents`,`code_postal_parents`,`ville_parents`,`telephone_fix_parents`,`portable_mere`,
        `portable_pere`,`profession_mere`,`entreprise_mere`,`profession_pere`,`entreprise_pere`,`diplome_parents`,`nom_pays_parents`) 
        VALUES(NULL,'".$donnees['nom_parents']."','".$donnees['prenom_parents']."','".$donnees['genre_parents']."',
        '".$donnees['adresse_parents']."','".$donnees['code_postal_parents']."','".$donnees['ville_parents']."',
         '".$donnees['telephone_parents']."','".$donnees['portable_mere']."','".$donnees['portable_pere']."',
         '".$donnees['profession_mere']."','".$donnees['entreprise_mere']."','".$donnees['profession_pere']."',
         '".$donnees['entreprise_pere']."','".$donnees['diplome']."','".$donnees['pays_parents']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesPermanent($con,$donnees){
        $req ="INSERT INTO `Permanent` (`id_permanent`, `nom_permanent`, `prenom_permanent`,
        `portable_permanent`,`adresse_permanent`,`code_postal_permanent`,`ville_permanent`,`mail_permanent`,`nom_entreprise_permanent`,
        `intitule_stage_permanent`,`nom_professeur_permanent`) 
        VALUES(NULL,'".$donnees['nom_permanent']."','".$donnees['prenom_permanent']."','".$donnees['portable_permanent']."',
        '".$donnees['adresse_permanent']."','".$donnees['code_postal_permanent']."','".$donnees['ville_permanent']."',
         '".$donnees['mail_permanent']."','".$donnees['nom_entreprise']."',
         '".$donnees['intitule_stage']."','".$donnees['nom_professeur']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }



    function addDonneesProfesseur($con,$donnees){
        $req ="INSERT INTO `Professeur` (`id_professeur`, `nom_professeur`, `prenom_professeur`,
        `date_naissance_professeur`,`adresse_professeur`,`code_postal_professeur`,`ville_professeur`,`telephone_professionnel_professeur`,
        `telephone_personnel_professeur`,`portable_professeur`,`mail_professeur`,`nom_matiere_enseigner_professeur`,
        `nom_pole_enseignement_professeur`,`nom_etablissement_professeur`,`nom_entreprise_professeur`) 
        VALUES(NULL,'".$donnees['nom_professeur']."','".$donnees['prenom_professeur']."','".$donnees['date_naissance_professeur']."',
        '".$donnees['adresse_professeur']."','".$donnees['code_postal_professeur']."','".$donnees['ville_professeur']."',
         '".$donnees['telephone_professionnel']."','".$donnees['telephone_personnel']."',
         '".$donnees['portable_professeur']."','".$donnees['mail_professeur']."','".$donnees['matiere_enseigner']."','".$donnees['pole_enseignement']."',
         '".$donnees['nom_etablissement']."','".$donnees['nom_entreprise']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesSemestre($con,$donnees){
        $req ="INSERT INTO `Semestre` (`id_semestre`, `nom_semestre`, `nb_etudiants_semestre`) 
        VALUES(NULL,'".$donnees['semestre']."','".$donnees['nombre_etudiant']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesStage($con,$donnees){
        $req ="INSERT INTO `Stage` (`id_stage`, `annee_stage`, `intitule_stage`,
        `mission_stage`,`objectif_stage`,`responsabilites_stage`,`dates_stages`,`indemnite_stage`,
        `nom_semestre_stage`,`nom_permanent_stage`,`nom_etudiant_stage`,`nom_contact_stage`,
        `nom_entreprise_stage`) 
        VALUES(NULL,'".$donnees['annee_stage']."','".$donnees['intitulé_stage']."','".$donnees['mission_stage']."',
        '".$donnees['objectif_stage']."','".$donnees['responsabilites']."','".$donnees['dates_stage']."',
         '".$donnees['indemnite']."','".$donnees['stage_semestre']."',
         '".$donnees['responsable_ESTA']."','".$donnees['nom_etudiant']."','".$donnees['nom_tuteur']."',
         '".$donnees['nom_entreprise']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesEtudiant($con,$donnees){
        $req ="INSERT INTO `Etudiant` (`id_etudiant`, `nom_etudiant`, `prenom_etudiant`,
        `semestre_etranger_etudiant`,`date_entree_ESTA_etudiant`,`redoublant_etudiant`,`score_Toeic_etudiant`,`score_Widaf_etudiant`,
        `score_Elyte_etudiant`,`boursier_etudiant`,`portable_etudiant`,`mail_etudiant`,
        `date_naissance_etudiant`,`lieu_naissance_etudiant`,`departement_naissance_etudiant`,`sexe_etudiant`,`numero_secu_etudiant`,
        `numero_BEA_INE_etudiant`,`adresse_etudiant`,`code_postal_etudiant`,`ville_etudiant`,`nationalite_etudiant`,
        `envoi_bulletin_etudiant`,`en_stage_etudiant`,`nom_semestre_etudiant`,`nom_bacplus2_etudiant`, `nom_bac_etudiant`,
        `nom_pays_naissance_etudiant`,`nom_pays_residence_etudiant`,`nom_etablissement_etudiant`,`nom_parents_etudiant`) 
        VALUES(NULL,'".$donnees['nom_etudiant']."','".$donnees['prenom_etudiant']."','".$donnees['semestre_etranger']."',
        '".$donnees['date_entree_ESTA']."','".$donnees['redoublant']."','".$donnees['score_toeic']."',
         '".$donnees['score_widaf']."','".$donnees['score_elyte']."',
         '".$donnees['boursier']."','".$donnees['portable_etudiant']."','".$donnees['mail_etudiant']."',
         '".$donnees['date_naissance_etudiant']."','".$donnees['lieu_naissance_etudiant']."','".$donnees['departement_naissance_etudiant']."',
         '".$donnees['sexe_etudiant']."','".$donnees['securite_sociale']."','".$donnees['numero_BEA']."',
         '".$donnees['adresse_etudiant']."','".$donnees['code_postal_etudiant']."','".$donnees['ville_etudiant']."',
         '".$donnees['nationalite_etudiant']."','".$donnees['envoi_bulletin']."','".$donnees['stage']."',
         '".$donnees['semestre']."','".$donnees['bacPlus2_obtenu']."','".$donnees['bac_obtenu']."',
         '".$donnees['pays_naissance_etudiant']."','".$donnees['pays_etudiant']."','".$donnees['nom_etablissement']."',
         '".$donnees['nom_parents']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesBaccalaureat_Etablissement($con,$donnees){
        $req ="INSERT INTO `J_BACCALAUREAT_ETABLISSEMENT` (`id_J_BACCALAUREAT_ETABLISSEMENT`, `nom_etablissement`, `nom_bac`) 
        VALUES(NULL,'".$donnees['nom_etablissement']."','".$donnees['nom_baccalaureat']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }


    function addDonneesBacplus2_Etablissement($con,$donnees){
        $req ="INSERT INTO `J_BACPLUS2_ETABLISSEMENT` (`id_J_BACPLUS2_ETABLISSEMENT`, `nom_etablissement`, `nom_bacplus2`) 
        VALUES(NULL,'".$donnees['nom_etablissement']."','".$donnees['nom_bacplus2']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesGroupe_Professeur($con,$donnees){
        $req ="INSERT INTO `J_GROUPE_PROFESSEUR` (`id_J_GROUPE_Professeur`, `nom_professeur`, `nom_groupe`) 
        VALUES(NULL,'".$donnees['nom_professeur']."','".$donnees['groupe']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesSemestre_Professeur($con,$donnees){
        $req ="INSERT INTO `J_SEMESTRE_PROFESSEUR` (`id_J_Semestre_Professeur`, `nom_semestre`, `nom_professeur`) 
        VALUES(NULL,'".$donnees['semestre']."','".$donnees['nom_professeur']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    function addDonneesEtudiant_Groupe($con,$donnees){
        $req ="INSERT INTO `J_ETUDIANT_GROUPE` (`id_J_Etudiant_GROUPE`, `nom_etudiant`, `nom_groupe`) 
        VALUES(NULL,'".$donnees['nom_etudiant']."','".$donnees['nom_groupe']."');";
        try{
            $this->save_d($con,$req);
            $result = mysqli_query($con,$req);
        }
        catch(Exception $e){
            echo"erreur BDD";
        }

    }

    /* Partie Update */

    function Select_UpdateAncien_Eleve($con,$id){
        $req = "SELECT * from Ancien_Eleve WHERE id_ancien_eleve = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }


    function Update_Ancien_Eleve($con, $donnees){

        $req = "UPDATE  Ancien_Eleve set date_maj_ancien_eleve= '".$donnees['date_maj_ancien_eleve']."',
        diplome_ancien_eleve='".$donnees['diplome']."', nom_ancien_eleve='".$donnees['nom_ancien_eleve']."',
        nom_ancien_eleve= '".$donnees['nom_ancien_eleve']."',prenom_ancien_eleve='".$donnees['prenom_ancien_eleve']."',
         2A2E_ancien_eleve='".$donnees['2A2E']."',compte_likedin_ancien_eleve='".$donnees['compte_linkedin']."',
         nom_marital_ancien_eleve='".$donnees['nom_marital']."',date_promoBACplus4_ancien_eleve='".$donnees['date_promo_bac4']."',
         date_promoBACplus5_ancien_eleve='".$donnees['date_promo_bac5']."',portable_ancien_eleve='".$donnees['portable_ancien_eleve']."',
         telephone_fix_ancien_eleve='".$donnees['telephone_fixe_ancien_eleve']."',mail_ancien_eleve='".$donnees['mail_ancien_eleve']."',
         commentaires_envoi_ancien_eleve='".$donnees['commentaires']."',poste_occupe='".$donnees['poste_occupe']."',
         categorie_poste_occupe_ancien_eleve='".$donnees['categorie_poste']."',salaire_moyen_ancien_eleve='".$donnees['salaire_moyen']."',
         nom_entreprise_ancien_eleve='".$donnees['nom_entreprise']."'
         where id_ancien_eleve='".$donnees['id']."' ;";
        $this->save_d($con,$req);
        mysqli_query($con,$req);

    }
    function Select_UpdateAssociation_Etudiante($con,$id){
        $req = "SELECT * from Association_Etudiante WHERE id_association_etudiante = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Association_Etudiante($con, $donnees){

        $req = "UPDATE  Association_Etudiante set nom_association_etudiante='".$donnees['nom_association']."',
        nom_president_association_etudiante='".$donnees['nom_president']."',
        nom_vicePresident_association_etudiante='".$donnees['nom_vicePresident']."',
        nom_secretaire_association_etudiante='".$donnees['nom_secretaire']."',nom_viceSecretaire_association_etudiante='".$donnees['nom_viceSecretaire']."',
        nom_tresorier_association_etudiante='".$donnees['nom_tresorier']."',nom_viceTresorier_association_etudiante='".$donnees['nom_viceTresorier']."'
        where id_association_etudiante= '".$donnees['id']."';";
        $this->save_d($con,$req);
        mysqli_query($con,$req);
    }

    function Select_UpdateEntreSortie($con,$id){
        $req = "SELECT * from EntreSortie WHERE id = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_EntreSortie($con, $donnees){

        $req = "UPDATE EntreSortie set nom_eleve='".$donnees['nom_eleve']."',
        prenom_eleve='".$donnees['prenom_eleve']."',
        date_entre='".$donnees['date_entre']."',
        date_sortie='".$donnees['date_sortie']."',Raison='".$donnees['Raison']."'
        where id= '".$donnees['id']."';";
        echo $req;
        $this->save_d($con,$req);
        mysqli_query($con,$req);
    }

    function DeleteEntreSortie($con,$id){
        $req = "Delete from EntreSortie where id= $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function Select_UpdateBaccalaureat($con,$id){
    $req = "SELECT * from Baccalaureat WHERE id_baccalaureat = $id;";
    $result = mysqli_query($con,$req);
    return $result;
    }

    function Update_Baccalaureat($con, $donnees){

        $req = "UPDATE  Baccalaureat set annee_baccalaureat='".$donnees['annee_obtention_BAC']."',
        nom_baccalaureat='".$donnees['nom_BAC']."',mention_obtenu_baccalaureat='".$donnees['mention_obtenu']."',
        option_baccalaureat='".$donnees['option_BAC']."',nb_etudiants_baccalaureat='".$donnees['nombre_etudiant']."'
        where id_baccalaureat='".$donnees['id']."';";
        $this->save_d($con,$req);
        mysqli_query($con,$req);
    }
    function Select_UpdateBacPlus2($con,$id){
        $req = "SELECT * from BacPlus2 WHERE id_bacplus2 = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function Update_Bacplus2($con, $donnees){

        $req = "UPDATE  Bacplus2 set nom_bacplus2='".$donnees['nom_bacPlus2']."',option_bacplus2='".$donnees['option_bacPlus2']."',
        annee_bacplus2='".$donnees['annee_bacPlus2']."',nb_etudiants_bacplus2='".$donnees['nombre_etudiants']."'
        where id_bacplus2= '".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function Select_UpdateContact($con,$id){
        $req = "SELECT * from Contact WHERE id_contact = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function Update_Contact($con, $donnees){

        $req = "UPDATE  Contact set nom_contact='".$donnees['nom_contact']."',prenom_contact='".$donnees['prenom_contact']."',
        date_maj_contact='".$donnees['date_maj']."',genre_contact='".$donnees['genre_contact']."',fonction_contact='".$donnees['fonction_contact']."',
        portable_contact='".$donnees['protable_contact']."',mail_contact='".$donnees['mail_contact']."',observation_contact='".$donnees['observations']."',
        nom_etablissement_contact='".$donnees['nom_etablissement']."',nom_entreprise_contact='".$donnees['nom_entreprise']."'
        where id_contact='".$donnees['id']."';";
    mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function Select_UpdateDelegue($con,$id){
        $req = "SELECT * from Delegue WHERE id_delegue = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function Update_Delegue($con, $donnees){

        $req = "UPDATE  Delegue set nom_delegue='".$donnees['nom_delegue']."',annee_delegue='".$donnees['annee_delegue']."',
        semestre_delegue='".$donnees['semestres']."' where id_delegue= '".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function Select_UpdateEntreprise($con,$id){
        $req = "SELECT * from Entreprise WHERE id_entreprise = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }


    function Update_Entreprise($con, $donnees){

        $req = "UPDATE  Entreprise set nom_entreprise='".$donnees['nom_entreprise']."',date_maj_entreprise='".$donnees['date_maj']."',
        site_internet_entreprise='".$donnees['site_internet']."',numero_telephone_entreprise='".$donnees['telephone_entreprise']."',
        adresse_entreprise='".$donnees['adresse_entreprise']."',code_postal_entreprise='".$donnees['code_postal_entreprise']."',
        ville_entreprise='".$donnees['ville_entreprise']."',logo_entreprise='".$donnees['logo_entreprise']."',
        pris_stagiaire_entreprise='".$donnees['stagiaire']."',interesse_stagiaire_entreprise='".$donnees['veut_stagiaire']."',
        ancien_eleve_entreprise='".$donnees['ancien_eleve']."',forums_entreprise='".$donnees['forum_entreprise']."',
         date_visite_entreprise='".$donnees['date_visite']."',date_envoi_informtion_entreprise='".$donnees['date_envoi_information']."',
         commentaires_envoi_entreprise='".$donnees['commentaire_envoi']."',nom_type_entreprise='".$donnees['commentaire_envoi']."',
         nom_type_entreprise='".$donnees['type_entreprise']."',nom_secteur_activite_entreprise='".$donnees['secteur_activite']."',
         nom_pays_entreprise='".$donnees['pays_entreprise']."',nom_permanent_entreprise='".$donnees['contact_ESTA']."',
         nom_evenements_entreprise='".$donnees['journee_speciale']."' where id_entreprise='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function Select_UpdateEtablissement($con,$id){
        $req = "SELECT * from Etablissement WHERE id_etablissement = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function Update_Entablissement($con, $donnees){

        $req = "UPDATE  Etablissement set nom_etablissement='".$donnees['nom_etablissement']."',
        date_maj_etablissement='".$donnees['derniere_maj']."',chimie_etablissement='".$donnees['formation_chimie']."',
        telephone_etablissement='".$donnees['telephone_etablissement']."',mail_etablissement='".$donnees['mail_etablissement']."',
        adresse_etablissement='".$donnees['adresse_etablissement']."',code_postal_etablissement='".$donnees['code_postal_etablissement']."',
        ville_etablissement='".$donnees['ville_etablissement']."',bac_etablissement='".$donnees['BAC']."',
        bacPlus2_etablissement='".$donnees['BACplus2']."',nom_academie_etablissement='".$donnees['nom_academie']."',
        nom_categorie_etablissement='".$donnees['categorie_etablissement']."' where id_etablissement='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateEtudiant($con,$id){
        $req = "SELECT * from Etudiant WHERE id_etudiant = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Entudiant($con, $donnees){

        $req = "UPDATE  Etudiant set nom_etudiant='".$donnees['nom_etudiant']."',prenom_etudiant='".$donnees['prenom_etudiant']."',
        semestre_etranger_etudiant='".$donnees['semestre_etranger']."',date_entree_ESTA_etudiant='".$donnees['date_entree_ESTA']."',
        redoublant_etudiant='".$donnees['redoublant']."',score_Toeic_etudiant='".$donnees['score_toeic']."',
        score_Widaf_etudiant='".$donnees['score_widaf']."', score_Elyte_etudiant='".$donnees['score_elyte']."',
        boursier_etudiant='".$donnees['boursier']."', portable_etudiant='".$donnees['portable_etudiant']."',
        mail_etudiant='".$donnees['mail_etudiant']."',date_naissance_etudiant='".$donnees['date_naissance_etudiant']."',
        lieu_naissance_etudiant='".$donnees['lieu_naissance_etudiant']."',departement_naissance_etudiant='".$donnees['departement_naissance_etudiant']."',
        sexe_etudiant='".$donnees['sexe_etudiant']."',numero_secu_etudiant='".$donnees['securite_sociale']."',
        numero_BEA_INE_etudiant='".$donnees['numero_BEA']."',adresse_etudiant='".$donnees['adresse_etudiant']."',
        code_postal_etudiant='".$donnees['code_postal_etudiant']."',ville_etudiant='".$donnees['ville_etudiant']."',
        nationalite_etudiant='".$donnees['nationalite_etudiant']."',envoi_bulletin_etudiant='".$donnees['envoi_bulletin']."',
        en_stage_etudiant='".$donnees['stage']."',nom_semestre_etudiant='".$donnees['semestre']."',
        nom_bacplus2_etudiant='".$donnees['bacPlus2_obtenu']."',nom_bac_etudiant='".$donnees['bac_obtenu']."',
        nom_pays_naissance_etudiant='".$donnees['pays_naissance_etudiant']."',nom_pays_residence_etudiant='".$donnees['pays_etudiant']."',
        nom_etablissement_etudiant='".$donnees['nom_etablissement']."',nom_parents_etudiant='".$donnees['nom_parents']."'
        where id_etudiant='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function Select_UpdateGroupe($con,$id){
        $req = "SELECT * from Groupe WHERE id_groupe = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Groupe($con, $donnees){

        $req = "UPDATE  Groupe set nom_groupe='".$donnees['nom_groupe']."',nb_etudiants_groupe='".$donnees['nombre_etudiant']."',
        nom_semestre_groupe='".$donnees['semestre']."' where id_groupe='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateParents($con,$id){
        $req = "SELECT * from Parents WHERE id_parents = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Parent($con, $donnees){

        $req = "UPDATE  Parents set nom_parents='".$donnees['nom_parents']."',prenom_parents='".$donnees['prenom_parents']."',
        genre_parents='".$donnees['genre_parents']."',adresse_parents='".$donnees['adresse_parents']."',code_postal_parents='".$donnees['code_postal_parents']."',
        ville_parents='".$donnees['ville_parents']."',telephone_fix_parents='".$donnees['telephone_parents']."',
        portable_mere='".$donnees['portable_mere']."',portable_pere='".$donnees['portable_pere']."',profession_mere='".$donnees['profession_mere']."',
        entreprise_mere='".$donnees['entreprise_mere']."',profession_pere='".$donnees['profession_pere']."',entreprise_pere='".$donnees['entreprise_pere']."',
        diplome_parents='".$donnees['diplome']."',nom_pays_parents='".$donnees['pays_parents']."'
        where id_parents='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function Select_UpdatePermanent($con,$id){
        $req = "SELECT * from Permanent WHERE id_permanent = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Permanent($con, $donnees){

        $req = "UPDATE  Permanent set nom_permanent='".$donnees['nom_permanent']."',prenom_permanent='".$donnees['prenom_permanent']."',
        portable_permanent='".$donnees['portable_permanent']."', adresse_permanent='".$donnees['adresse_permanent']."',
        code_postal_permanent='".$donnees['code_postal_permanent']."',ville_permanent='".$donnees['ville_permanent']."',
        mail_permanent='".$donnees['mail_permanent']."',nom_entreprise_permanent='".$donnees['nom_entreprise']."',
        intitule_stage_permanent='".$donnees['intitule_stage']."',nom_professeur_permanent='".$donnees['nom_professeur']."'
        where id_permanent='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateProfesseur($con,$id){
        $req = "SELECT * from Professeur WHERE id_professeur = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Professeur($con, $donnees){

        $req = "UPDATE  Professeur set nom_professeur='".$donnees['nom_professeur']."',prenom_professeur= '".$donnees['prenom_professeur']."',
        date_naissance_professeur='".$donnees['date_naissance_professeur']."',adresse_professeur='".$donnees['adresse_professeur']."',
        code_postal_professeur='".$donnees['code_postal_professeur']."',ville_professeur='".$donnees['ville_professeur']."',
        telephone_professionnel_professeur='".$donnees['telephone_professionnel']."',telephone_personnel_professeur='".$donnees['telephone_personnel']."',
        portable_professeur='".$donnees['portable_professeur']."' ,mail_professeur='".$donnees['mail_professeur']."',
        nom_matiere_enseigner_professeur='".$donnees['matiere_enseigner']."', nom_pole_enseignement_professeur='".$donnees['pole_enseignement']."',
        nom_etablissement_professeur='".$donnees['nom_etablissement']."',nom_entreprise_professeur='".$donnees['nom_entreprise']."'
        where id_professeur='".$donnees['id']."';";
        $this->save_d($con,$req);
        echo $req;
        mysqli_query($con,$req);


    }
    function Select_UpdateSemestre($con,$id){
        $req = "SELECT * from Semestre WHERE id_semestre = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Semestre($con, $donnees){

        $req = "UPDATE  Semestre set nom_semestre='".$donnees['semestre']."', nb_etudiants_semestre= '".$donnees['nombre_etudiant']."'
        where id_semestre='".$donnees['id']."' ;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateStage($con,$id){
        $req = "SELECT * from Stage WHERE id_stage = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Stage($con, $donnees){

        $req = "UPDATE  Stage set annee_stage='".$donnees['annee_stage']."',intitule_stage='".$donnees['intitulé_stage']."',
        mission_stage='".$donnees['mission_stage']."',objectif_stage='".$donnees['objectif_stage']."',responsabilites_stage='".$donnees['responsabilites']."',
        dates_stages='".$donnees['dates_stage']."',indemnite_stage='".$donnees['indemnite']."',nom_semestre_stage='".$donnees['stage_semestre']."',
        nom_permanent_stage= '".$donnees['responsable_ESTA']."',nom_etudiant_stage='".$donnees['nom_etudiant']."',
        nom_contact_stage='".$donnees['nom_tuteur']."',nom_entreprise_stage='".$donnees['nom_entreprise']."'
        where id_stage='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function Select_UpdateEtudiantGroupe($con,$id){
        $req = "SELECT * from J_Etudiant_GROUPE WHERE id_J_Etudiant_GROUPE = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_EtudiantGroupe($con, $donnees){

        $req = "UPDATE  J_Etudiant_GROUPE set nom_etudiant='".$donnees['nom_etudiant']."', nom_groupe='".$donnees['nom_groupe']."'
where id_J_Etudiant_GROUPE= '".$donnees['id']."';";
        mysqli_query($con,$req);
        echo $req;
        $this->save_d($con,$req);
    }
    function Select_UpdateSemestreProfesseur($con,$id){
        $req = "SELECT * from J_Semestre_Professeur WHERE id_J_Semestre_Professeur = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_SemestreProfesseur($con, $donnees){

        $req = "UPDATE  J_Semestre_Professeur set nom_semestre='".$donnees['semestre']."', nom_professeur='".$donnees['nom_professeur']."'
        where id_J_Semestre_Professeur='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function Select_UpdateGroupeProfesseur($con,$id){
        $req = "SELECT * from J_GROUPE_Professeur WHERE id_J_GROUPE_Professeur = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_GroupeProfesseur($con, $donnees){

        $req = "UPDATE  J_GROUPE_Professeur set nom_professeur='".$donnees['nom_professeur']."',nom_groupe='".$donnees['groupe']."'
        where id_J_GROUPE_Professeur='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateBaccalaureatEtablissement($con,$id){
        $req = "SELECT * from J_BACCALAUREAT_ETABLISSEMENT WHERE id_J_BACCALAUREAT_ETABLISSEMENT = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_BaccalaureatEtablissement($con, $donnees){

        $req = "UPDATE  J_BACCALAUREAT_ETABLISSEMENT set nom_etablissement='".$donnees['nom_etablissement']."',nom_bac='".$donnees['nom_baccalaureat']."'
        where id_J_BACCALAUREAT_ETABLISSEMENT ='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function Select_UpdateBacplus2Etablissement($con,$id){
        $req = "SELECT * from J_BACPLUS2_ETABLISSEMENT WHERE id_J_BACPLUS2_ETABLISSEMENT = $id;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function Update_Bacplus2Etablissement($con, $donnees){

        $req = "UPDATE  J_BACPLUS2_ETABLISSEMENT set nom_etablissement='".$donnees['nom_etablissement']."',
       nom_bacplus2='".$donnees['nom_bacplus2']."' where id_J_BACPLUS2_ETABLISSEMENT='".$donnees['id']."';";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }


    /* Partie Delete*/

    function DeleteAncien_ELeve($con, $id){

        $req = "Delete from Ancien_Eleve where id_ancien_eleve = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function DeleteAssociation_etudiante($con, $id){

        $req = "Delete from Association_Etudiante where id_association_etudiante = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }

    function DeleteBaccalaureat($con, $id){

        $req = "Delete from Baccalaureat where id_baccalaureat = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);

    }
    function DeleteBacplus2($con, $id){

        $req = "Delete from Bacplus2 where id_bacplus2 = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteContact($con, $id){

        $req = "Delete from Contact where id_contact = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteDelegue($con, $id){

        $req = "Delete from Delegue where id_delegue = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function DeleteEntreprise($con, $id){

        $req = "Delete from Entreprise where id_entreprise = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteEtablissement($con, $id){

        $req = "Delete from Etablissement where id_etablissement = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteEtudiant($con, $id){

        $req = "Delete from Etudiant where id_etudiant = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteGroupe($con, $id){

        $req = "Delete from Groupe where id_groupe = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function DeleteEtudiantGroupe($con, $id){

        $req = "Delete from J_Etudiant_GROUPE where id_J_Etudiant_GROUPE = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteSemestreProfesseur($con, $id){

        $req = "Delete from J_Semestre_Professeur where id_J_Semestre_Professeur = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function DeleteGroupeProfesseur($con, $id){

        $req = "Delete from J_GROUPE_Professeur where id_J_GROUPE_Professeur = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function DeleteBaccalaureatEtalissement($con, $id){

        $req = "Delete from J_BACCALAUREAT_ETABLISSEMENT where id_J_BACCALAUREAT_ETABLISSEMENT = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }

    function DeleteBacplus2Etablissement($con, $id){

        $req = "Delete from J_BACPLUS2_ETABLISSEMENT where id_J_BACPLUS2_ETABLISSEMENT = $id;";
        mysqli_query($con,$req);

    }

    function DeleteParents($con, $id){

        $req = "Delete from Parents where id_parents = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeletePermanent($con, $id){

        $req = "Delete from Permanent where id_permanent = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteProfesseur($con, $id){

        $req = "Delete from Professeur where id_professeur = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteSemestre($con, $id){

        $req = "Delete from Semestre where id_semestre = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }
    function DeleteStage($con, $id){

        $req = "Delete from Stage where id_stage = $id;";
        mysqli_query($con,$req);
        $this->save_d($con,$req);
    }




}
