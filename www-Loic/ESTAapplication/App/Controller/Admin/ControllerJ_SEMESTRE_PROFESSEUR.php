<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:21
 */
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerJ_SEMESTRE_PROFESSEUR{

    function showSemestre_Porfesseur_Add(){

        include "../../Views/Admin/Add/J_SEMESTRE_PROFESSEUR.html";
    }

    function showSemestre_Professeur_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/SemestreProfesseur.php";
    }

    function showSemestre_Professeur_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/SemestreProfesseur.php";
    }

    function AddSemestre_Professeur(){

        $donnees['semestre'] = $_POST['semestre'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesSemestre_Professeur($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_SemestreProfesseur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateSemestreProfesseur($con,$id);
        include "../../Views/Admin/Update/SemestreProfesseurForm.php";
    }

    function UpdateDonnees_SemestreProfesseur(){

        $donnees['id'] = $_POST['id'];
        $donnees['semestre'] = $_POST['semestre'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_SemestreProfesseur($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_SemestreProfesseur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteSemestreProfesseur($con,$id);
        echo '<script> window.close()</script>';

    }

}
