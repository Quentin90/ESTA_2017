<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:27
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerJ_BACCALAUREAT_ETABLISSEMENT{

    function showBaccalaureat_Etablissement_Add(){

        include "../../Views/Admin/Add/J_BACCALAUREAT_ETABLISSEMENT.html";
    }

    function showBaccalaureat_Etablissement_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/BaccalaureatEtablissement.php";
    }

    function showBaccalaureat_Etablissement_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/BaccalaureatEtablissement.php";
    }

    function AddBaccalaureat_Etablissement(){

        $donnees['nom_baccalaureat'] = $_POST['nom_baccalaureat'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesBaccalaureat_Etablissement($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_BaccalaureatEtablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateBaccalaureatEtablissement($con,$id);
        include "../../Views/Admin/Update/BaccalaureatEtablissementForm.php";
    }

    function UpdateDonnees_BaccalaureatEtablissement(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_baccalaureat'] = $_POST['nom_baccalaureat'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_BaccalaureatEtablissement($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_BaccalaureatEtablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteBaccalaureatEtalissement($con,$id);
        echo '<script> window.close()</script>';

    }


}