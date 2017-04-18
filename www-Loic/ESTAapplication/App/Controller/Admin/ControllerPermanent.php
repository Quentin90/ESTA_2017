<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/12/2016
 * Time: 14:04
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerPermanent{

    function showPermanents_Add(){

        include "../../Views/Admin/Add/Permanent.html";
    }

    function showPermanents_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Permanent.php";
    }

    function showPermanents_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Permanent.php";
    }

    function AddPermanent(){

        $donnees['nom_permanent'] = $_POST['nom_permanent'];
        $donnees['prenom_permanent'] = $_POST['prenom_permanent'];
        $donnees['portable_permanent'] = $_POST['portable_permanent'];
        $donnees['adresse_permanent'] = $_POST['adresse_permanent'];
        $donnees['code_postal_permanent'] = $_POST['code_postal_permanent'];
        $donnees['ville_permanent'] = $_POST['ville_permanent'];
        $donnees['mail_permanent'] = $_POST['mail_permanent'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $donnees['intitule_stage'] = $_POST['intitule_stage'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesPermanent($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Permanent(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdatePermanent($con,$id);
        include "../../Views/Admin/Update/PermanentForm.php";
    }

    function UpdateDonnees_Permanent(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_permanent'] = $_POST['nom_permanent'];
        $donnees['prenom_permanent'] = $_POST['prenom_permanent'];
        $donnees['portable_permanent'] = $_POST['portable_permanent'];
        $donnees['adresse_permanent'] = $_POST['adresse_permanent'];
        $donnees['code_postal_permanent'] = $_POST['code_postal_permanent'];
        $donnees['ville_permanent'] = $_POST['ville_permanent'];
        $donnees['mail_permanent'] = $_POST['mail_permanent'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $donnees['intitule_stage'] = $_POST['intitule_stage'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Permanent($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Permanent(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeletePermanent($con,$id);
        echo '<script> window.close()</script>';

    }

}
