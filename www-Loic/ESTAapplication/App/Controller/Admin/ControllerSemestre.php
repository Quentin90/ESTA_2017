<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 16:56
 */


require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerSemestre{

    function showSemestre_Add(){

        include "../../Views/Admin/Add/Semestre.html";
    }

    function showSemestre_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Semestre.php";
    }

    function showSemestre_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Semestre.php";
    }

    function AddSemestre(){

        $donnees['semestre'] = $_POST['semestre'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesSemestre($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Semestre(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateSemestre($con,$id);
        include "../../Views/Admin/Update/SemestreForm.php";
    }

    function UpdateDonnees_Semestre(){

        $donnees['id'] = $_POST['id'];
        $donnees['semestre'] = $_POST['semestre'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Semestre($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Semestre(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteSemestre($con,$id);
        echo '<script> window.close()</script>';

    }
}



