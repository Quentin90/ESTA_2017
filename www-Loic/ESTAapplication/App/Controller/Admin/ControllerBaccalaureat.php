<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 15:06
 */


require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerBaccalaureat{


    function showBaccalaureat_Add(){

        include "../../Views/Admin/Add/Baccalaureat.html";
    }

    function showBaccalaureat_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Baccalaureat.php";
    }

    function showBaccalaureat_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Baccalaureat.php";
    }

    function AddBaccalaureat(){

        $donnees['annee_obtention_BAC'] = $_POST['annee_obtention_BAC'];
        $donnees['nom_BAC'] = $_POST['nom_BAC'];
        $donnees['mention_obtenu'] = $_POST['mention_obtenu'];
        $donnees['option_BAC'] = $_POST['option_BAC'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesBaccalaureat($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Baccalaureat(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateBaccalaureat($con,$id);
        include "../../Views/Admin/Update/BaccalaureatForm.php";
    }

    function UpdateDonnees_Baccalaureat(){

        $donnees['id'] = $_POST['id'];
        $donnees['annee_obtention_BAC'] = $_POST['annee_obtention_BAC'];
        $donnees['nom_BAC'] = $_POST['nom_BAC'];
        $donnees['mention_obtenu'] = $_POST['mention_obtenu'];
        $donnees['option_BAC'] = $_POST['option_BAC'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Baccalaureat($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Baccalaureat(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteBaccalaureat($con,$id);
        echo '<script> window.close()</script>';

    }



}

