<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 13:19
 */

require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";


class ControllerAncien_Eleve{

    function getCategoriePoste(){
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $ListeDeroulanteModele = new ListeDeroulanteModel();
        $result = $ListeDeroulanteModele->getCategoriePoste($con);
        return $result;
    }

    function ShowAncien_Eleve_Add(){

       include "../../Views/Admin/Add/Ancien_ElevePart1.html";
        $categoriePoste = $this->getCategoriePoste();
        while ($row = $categoriePoste->fetch_assoc()) {
            echo '<option>' .$row['nom_categorie_poste_occupe']. '</option>';
        }
        include "../../Views/Admin/Add/Ancien_ElevePart2.html";

    }

    function ShowAncien_Eleve_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Ancien_Eleve.php";
    }

    function ShowAncien_Eleve_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Ancien_Eleve.php";
    }

    function AddAncien_Eleve(){

        $donnees['date_maj_ancien_eleve'] = $_POST['date_maj'];
        $donnees['diplome'] = $_POST['diplome'];
        $donnees['nom_ancien_eleve'] = $_POST['nom_ancien_eleve'];
        $donnees['prenom_ancien_eleve'] = $_POST['prenom_ancien_eleve'];
        $donnees['2A2E'] = $_POST['2A2E'];
        $donnees['compte_linkedin'] = $_POST['compte_linkedin'];
        $donnees['nom_marital'] = $_POST['nom_marital'];
        $donnees['date_promo_bac4'] = $_POST['date_promo_bac4'];
        $donnees['date_promo_bac5'] = $_POST['date_promo_bac5'];
        $donnees['portable_ancien_eleve'] = $_POST['portable_ancien_eleve'];
        $donnees['telephone_fixe_ancien_eleve'] = $_POST['telephone_fixe_ancien_eleve'];
        $donnees['mail_ancien_eleve'] = $_POST['mail_ancien_eleve'];
        $donnees['commentaires'] = $_POST['commentaires'];
        $donnees['poste_occupe'] = $_POST['poste_occupe'];
        $donnees['categorie_poste'] = $_POST['categorie_poste'];
        $donnees['salaire_moyen'] = $_POST['salaire_moyen'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesAncienEleve($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Ancien_Eleve(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateAncien_Eleve($con,$id);
        include "../../Views/Admin/Update/Ancien_EleveForm.php";
    }

    function UpdateDonnees_Ancien_Eleve(){
        $donnees['id'] = $_POST['id'];
        $donnees['date_maj_ancien_eleve'] = $_POST['date_maj'];
        $donnees['diplome'] = $_POST['diplome'];
        $donnees['nom_ancien_eleve'] = $_POST['nom_ancien_eleve'];
        $donnees['prenom_ancien_eleve'] = $_POST['prenom_ancien_eleve'];
        $donnees['2A2E'] = $_POST['2A2E'];
        $donnees['compte_linkedin'] = $_POST['compte_linkedin'];
        $donnees['nom_marital'] = $_POST['nom_marital'];
        $donnees['date_promo_bac4'] = $_POST['date_promo_bac4'];
        $donnees['date_promo_bac5'] = $_POST['date_promo_bac5'];
        $donnees['portable_ancien_eleve'] = $_POST['portable_ancien_eleve'];
        $donnees['telephone_fixe_ancien_eleve'] = $_POST['telephone_fixe_ancien_eleve'];
        $donnees['mail_ancien_eleve'] = $_POST['mail_ancien_eleve'];
        $donnees['commentaires'] = $_POST['commentaires'];
        $donnees['poste_occupe'] = $_POST['poste_occupe'];
        $donnees['categorie_poste'] = $_POST['categorie_poste'];
        $donnees['salaire_moyen'] = $_POST['salaire_moyen'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $update = $model->Update_Ancien_Eleve($con, $donnees);
        echo '<script> window.close()</script>';

    }

    function Delete_Ancien_Eleve(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteAncien_ELeve($con,$id);
        echo '<script> window.close()</script>';
    }





}



