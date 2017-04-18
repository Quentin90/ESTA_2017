<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:28
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerJ_ETUDIANT_GROUPE{

    function showEtudiant_Groupe_Add(){

        include "../../Views/Admin/Add/J_ETUDIANT_GROUPE.html";
    }

    function showEtudiant_Groupe_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/EtudiantsGroupe.php";
    }

    function showEtudiant_Groupe_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/EtudiantsGroupe.php";
    }

    function AddEtudiant_Groupe(){

        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['nom_groupe'] = $_POST['nom_groupe'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesEtudiant_Groupe($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_EtudiantGroupe(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateEtudiantGroupe($con,$id);
        include "../../Views/Admin/Update/EtudiantsGroupeForm.php";
    }

    function UpdateDonnees_EtudiantGroupe(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['nom_groupe'] = $_POST['nom_groupe'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_EtudiantGroupe($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_EtudiantGroupe(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteEtudiantGroupe($con,$id);
        echo '<script> window.close()</script>';

    }

}