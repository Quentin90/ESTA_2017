<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 15:34
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerContact{

    function showContact_Add(){

        include "../../Views/Admin/Add/Contact.html";
    }

    function showContact_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Contact.php";
    }
    function showContact_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Contact.php";
    }

    function AddContact(){

        $donnees['nom_contact'] = $_POST['nom_contact'];
        $donnees['prenom_contact'] = $_POST['prenom_contact'];
        $donnees['date_maj'] = $_POST['date_maj'];
        $donnees['genre_contact'] = $_POST['genre_contact'];
        $donnees['fonction_contact'] = $_POST['fonction_contact'];
        $donnees['protable_contact'] = $_POST['protable_contact'];
        $donnees['mail_contact'] = $_POST['mail_contact'];
        $donnees['observations'] = $_POST['observations'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesContact($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Contact(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateContact($con,$id);
        include "../../Views/Admin/Update/EntreSortieForm.php";
    }

    function UpdateDonnees_Contact(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_contact'] = $_POST['nom_contact'];
        $donnees['prenom_contact'] = $_POST['prenom_contact'];
        $donnees['date_maj'] = $_POST['date_maj'];
        $donnees['genre_contact'] = $_POST['genre_contact'];
        $donnees['fonction_contact'] = $_POST['fonction_contact'];
        $donnees['protable_contact'] = $_POST['protable_contact'];
        $donnees['mail_contact'] = $_POST['mail_contact'];
        $donnees['observations'] = $_POST['observations'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Contact($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Contact(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteContact($con,$id);
        echo '<script> window.close()</script>';

    }

}

