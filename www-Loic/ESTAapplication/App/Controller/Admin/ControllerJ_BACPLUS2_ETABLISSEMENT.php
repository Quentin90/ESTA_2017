<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:27
 */
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerJ_BACPLUS2_ETABLISSEMENT{

    function showBacplus2_Etablissement_Add(){

        include "../../Views/Admin/Add/J_BACPLUS2_ETABLISSEMENT.html";
    }

    function showBacplus2_Etablissement_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Bacplus2Etablissement.php";
    }

    function showBacplus2_Etablissement_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Bacplus2Etablissement.php";
    }

    function AddBacplus2_Etablissement(){

        $donnees['nom_bacplus2'] = $_POST['nom_bacplus2'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesBacplus2_Etablissement($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Bacplus2Etablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateBacplus2Etablissement($con,$id);
        include "../../Views/Admin/Update/Bacplus2EtablissementForm.php";
    }

    function UpdateDonnees_Bacplus2Etablissement(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_bacplus2'] = $_POST['nom_bacplus2'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Bacplus2Etablissement($con, $donnees);
        echo '<script> window.close()</script>';

    }

    function Delete_Bacplus2Etablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteBacplus2Etablissement($con,$id);
        echo '<script> window.close()</script>';

    }

}