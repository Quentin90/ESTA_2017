<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 15:36
 */

require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerEntreprise{

    public function __construct()
    {
        $connexion =  new ControllerConnexion();
        $con = $connexion->connect();
        return $con;
    }

    function getTypeEntreprise(){

        $con = $this->__construct();
        $ListeDeroulanteModel = new ListeDeroulanteModel();
        $typeEntreprise = $ListeDeroulanteModel->getTypeEntreprise($con);
        return $typeEntreprise;
    }

    function getSecteurActivite(){

        $con = $this->__construct();
        $ListeDeroulanteModel = new ListeDeroulanteModel();
        $secteurActivite = $ListeDeroulanteModel->getSecteurActivite($con);
        return $secteurActivite;

    }

    function getPays(){

        $con = $this->__construct();
        $ListeDeroulanteModel = new ListeDeroulanteModel();
        $pays = $ListeDeroulanteModel->getPays($con);
        return $pays;

    }

    function getJourneeSpeciale(){

        $con = $this->__construct();
        $ListeDeroulanteModel = new ListeDeroulanteModel();
        $journeeSpeciale = $ListeDeroulanteModel->getJourneeSpeciale($con);
        return $journeeSpeciale;

    }

    function showEntreprise_Add(){

        include "../../Views/Admin/Add/EntreprisePart1.html";
        //type entreprise
        $typeEntreprise = $this->getTypeEntreprise();
        while ($row = $typeEntreprise->fetch_assoc()) {
            echo '<option>' .$row['nom_type_entreprise']. '</option>';
        }
        //secteur d'activité
        include "../../Views/Admin/Add/EntreprisePart2.html";
        $secteurActivite = $this->getSecteurActivite();
        while ($row = $secteurActivite->fetch_assoc()) {
            echo '<option>' .$row['nom_secteur_activite']. '</option>';
        }
        //pays
        include "../../Views/Admin/Add/EntreprisePart3.html";
        $pays = $this->getPays();
        while ($row = $pays->fetch_assoc()) {
            echo '<option>' .$row['nom_pays']. '</option>';
        }
        //journée spéciale
        include "../../Views/Admin/Add/EntreprisePart4.html";
        $journeeSpeciale =$this->getJourneeSpeciale();
        while ($row = $journeeSpeciale->fetch_assoc()) {
            echo '<option>' .$row['nom_evenements']. '</option>';
        }
        include  "../../Views/Admin/Add/EntreprisePart5.html";

    }

    function showEntreprise_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Entreprise.php";
    }

    function showEntreprise_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Entreprise.php";
    }

    function AddEntreprise(){

        $donnees['date_maj'] = $_POST['date_maj'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $donnees['type_entreprise'] = $_POST['type_entreprise'];
        $donnees['secteur_activite'] = $_POST['secteur_activite'];
        $donnees['site_internet'] = $_POST['site_internet'];
        $donnees['telephone_entreprise'] = $_POST['telephone_entreprise'];
        $donnees['adresse_entreprise'] = $_POST['adresse_entreprise'];
        $donnees['code_postal_entreprise'] = $_POST['code_postal_entreprise'];
        $donnees['ville_entreprise'] = $_POST['ville_entreprise'];
        $donnees['pays_entreprise'] = $_POST['pays_entreprise'];
        $donnees['logo_entreprise'] = $_POST['logo_entreprise'];
        $donnees['contact_ESTA'] = $_POST['contact_ESTA'];
        $donnees['stagiaire'] = $_POST['stagiaire'];
        $donnees['veut_stagiaire'] = $_POST['veut_stagiaire'];
        $donnees['ancien_eleve'] = $_POST['ancien_eleve'];
        $donnees['journee_speciale'] = $_POST['journee_speciale'];
        $donnees['forum_entreprise'] = $_POST['forum_entreprise'];
        $donnees['date_visite'] = $_POST['date_visite'];
        $donnees['date_envoi_information'] = $_POST['date_envoi_information'];
        $donnees['commentaire_envoi'] = $_POST['commentaire_envoi'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesEntreprise($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Entreprise(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateEntreprise($con,$id);
        include "../../Views/Admin/Update/EntrepriseForm.php";
    }

    function UpdateDonnees_Entreprise(){

        $donnees['id'] = $_POST['id'];
        $donnees['date_maj'] = $_POST['date_maj'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $donnees['type_entreprise'] = $_POST['type_entreprise'];
        $donnees['secteur_activite'] = $_POST['secteur_activite'];
        $donnees['site_internet'] = $_POST['site_internet'];
        $donnees['telephone_entreprise'] = $_POST['telephone_entreprise'];
        $donnees['adresse_entreprise'] = $_POST['adresse_entreprise'];
        $donnees['code_postal_entreprise'] = $_POST['code_postal_entreprise'];
        $donnees['ville_entreprise'] = $_POST['ville_entreprise'];
        $donnees['pays_entreprise'] = $_POST['pays_entreprise'];
        $donnees['logo_entreprise'] = $_POST['logo_entreprise'];
        $donnees['contact_ESTA'] = $_POST['contact_ESTA'];
        $donnees['stagiaire'] = $_POST['stagiaire'];
        $donnees['veut_stagiaire'] = $_POST['veut_stagiaire'];
        $donnees['ancien_eleve'] = $_POST['ancien_eleve'];
        $donnees['journee_speciale'] = $_POST['journee_speciale'];
        $donnees['forum_entreprise'] = $_POST['forum_entreprise'];
        $donnees['date_visite'] = $_POST['date_visite'];
        $donnees['date_envoi_information'] = $_POST['date_envoi_information'];
        $donnees['commentaire_envoi'] = $_POST['commentaire_envoi'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Entreprise($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Entreprise(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteEntreprise($con,$id);
        echo '<script> window.close()</script>';

    }

}

