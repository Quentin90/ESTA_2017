<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/12/2016
 * Time: 14:04
 */
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerAssociation_Etudiante{

    function ShowAssociation_Etudiante_Add(){

        include "../../Views/Admin/Add/Association_Etudiante.html";
    }

    function showAssociation_Etudiante_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Association_Etudiante.php";
    }
    function showAssociation_Etudiante_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Association_Etudiante.php";
    }

    function AddAssociation_Etudiante(){

        $donnees['nom_association'] = $_POST['nom_association'];
        $donnees['nom_president'] = $_POST['nom_president'];
        $donnees['nom_vicePresident'] = $_POST['nom_vicePresident'];
        $donnees['nom_secretaire'] = $_POST['nom_secretaire'];
        $donnees['nom_viceSecretaire'] = $_POST['nom_viceSecretaire'];
        $donnees['nom_tresorier'] = $_POST['nom_tresorier'];
        $donnees['nom_viceTresorier'] = $_POST['nom_viceTresorier'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesAssociationetudiante($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Association_Etudiante(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateAssociation_Etudiante($con,$id);
        include "../../Views/Admin/Update/Association_EtudianteForm.php";
    }

    function UpdateDonnees_Association_Etudiante(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_association'] = $_POST['nom_association'];
        $donnees['nom_president'] = $_POST['nom_president'];
        $donnees['nom_vicePresident'] = $_POST['nom_vicePresident'];
        $donnees['nom_secretaire'] = $_POST['nom_secretaire'];
        $donnees['nom_viceSecretaire'] = $_POST['nom_viceSecretaire'];
        $donnees['nom_tresorier'] = $_POST['nom_tresorier'];
        $donnees['nom_viceTresorier'] = $_POST['nom_viceTresorier'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $update = $model->Update_Association_Etudiante($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Association_Etudiante(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteAssociation_etudiante($con,$id);
        echo '<script> window.close()</script>';
    }


}
