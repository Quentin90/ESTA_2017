<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:26
 */
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerJ_GROUPE_PROFESSEUR{

    function showGroupe_Professeur_Add(){

        include "../../Views/Admin/Add/J_GROUPE_PROFESSEUR.html";
    }

    function showGroupe_Porfesseur_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/GroupeProfesseur.php";
    }

    function showGroupe_Professeur_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/GroupeProfesseur.php";
    }

    function AddGroupe_Professeur(){

        $donnees['groupe'] = $_POST['groupe'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesGroupe_Professeur($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_GroupeProfesseur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateGroupeProfesseur($con,$id);
        include "../../Views/Admin/Update/GroupeProfesseurForm.php";
    }

    function UpdateDonnees_GroupeProfesseur(){

        $donnees['id'] = $_POST['id'];
        $donnees['groupe'] = $_POST['groupe'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_GroupeProfesseur($con, $donnees);
        echo '<script> window.close()</script>';

    }

    function Delete_GroupeProfesseur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteGroupeProfesseur($con,$id);
        echo '<script> window.close()</script>';

    }


}