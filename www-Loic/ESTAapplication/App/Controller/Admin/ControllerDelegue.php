<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/12/2016
 * Time: 14:03
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerDelegue{


    function showDelegue_Add(){

        include "../../Views/Admin/Add/Delegue.html";
    }

    function showDelegue_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Delegue.php";
    }

    function showDelegue_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Delegue.php";
    }

    function AddDelegue(){

        $donnees['nom_delegue'] = $_POST['nom_delegue'];
        $donnees['annee_delegue'] = $_POST['annee_delegue'];
        $donnees['semestres'] = $_POST['semestres'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesDelegue($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Delegue(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateDelegue($con,$id);
        include "../../Views/Admin/Update/DelegueForm.php";
    }

    function UpdateDonnees_Delegue(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_delegue'] = $_POST['nom_delegue'];
        $donnees['annee_delegue'] = $_POST['annee_delegue'];
        $donnees['semestres'] = $_POST['semestres'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Delegue($con, $donnees);
        echo '<script> window.close()</script>';
    }
    function Delete_Delegue(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteDelegue($con,$id);
        echo '<script> window.close()</script>';

    }

}