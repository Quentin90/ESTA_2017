<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 16:57
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerStage{

    function showStage_Add(){

        include "../../Views/Admin/Add/Stage.html";
    }

    function showStage_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Stage.php";
    }

    function showStage_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Stage.php";
    }

    function AddStage(){

        $donnees['intitulé_stage'] = $_POST['intitulé_stage'];
        $donnees['annee_stage'] = $_POST['annee_stage'];
        $donnees['mission_stage'] = $_POST['mission_stage'];
        $donnees['objectif_stage'] = $_POST['objectif_stage'];
        $donnees['responsabilites'] = $_POST['responsabilites'];
        $donnees['dates_stage'] = $_POST['dates_stage'];
        $donnees['indemnite'] = $_POST['indemnite'];
        $donnees['stage_semestre'] = $_POST['stage_semestre'];
        $donnees['responsable_ESTA'] = $_POST['responsable_ESTA'];
        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['nom_tuteur'] = $_POST['nom_tuteur'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesStage($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Stage(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateStage($con,$id);
        include "../../Views/Admin/Update/StageForm.php";
    }

    function UpdateDonnees_Stage(){

        $donnees['id'] = $_POST['id'];
        $donnees['intitulé_stage'] = $_POST['intitulé_stage'];
        $donnees['annee_stage'] = $_POST['annee_stage'];
        $donnees['mission_stage'] = $_POST['mission_stage'];
        $donnees['objectif_stage'] = $_POST['objectif_stage'];
        $donnees['responsabilites'] = $_POST['responsabilites'];
        $donnees['dates_stage'] = $_POST['dates_stage'];
        $donnees['indemnite'] = $_POST['indemnite'];
        $donnees['stage_semestre'] = $_POST['stage_semestre'];
        $donnees['responsable_ESTA'] = $_POST['responsable_ESTA'];
        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['nom_tuteur'] = $_POST['nom_tuteur'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Stage($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Stage(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteStage($con,$id);
        echo '<script> window.close()</script>';

    }

}

