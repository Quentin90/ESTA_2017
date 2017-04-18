<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 15:58
 */
require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerEtablissement{

    function getAcademie(){
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $academie = $model->getAcademie($con);
        return $academie;
    }

    function getCategorieEtablissement(){
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $categorieEtablissement = $model->getCategorieEtablissement($con);
        return $categorieEtablissement;
    }

    function showEtablissement_Add(){

        include "../../Views/Admin/Add/EtablissementPart1.html";
        $categorieEtablissement = $this->getCategorieEtablissement();
        while ($row = $categorieEtablissement->fetch_assoc()) {
            echo '<option>' .$row['nom_categorie_etablissement']. '</option>';
        }
        include "../../Views/Admin/Add/EtablissementPart2.html";
        $academie = $this->getAcademie();
        while ($row = $academie->fetch_assoc()) {
            echo '<option>' .$row['nom_academie']. '</option>';
        }
        include "../../Views/Admin/Add/EtablissementPart3.html";
    }

    function showEtablissement_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Etablissement.php";
    }

    function showEtablissement_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Etablissement.php";
    }

    function AddEtablissement(){

        $donnees['categorie_etablissement'] = $_POST['categorie_etablissement'];
        $donnees['derniere_maj'] = $_POST['derniere_maj'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_academie'] = $_POST['nom_academie'];
        $donnees['formation_chimie'] = $_POST['formation_chimie'];
        $donnees['telephone_etablissement'] = $_POST['telephone_etablissement'];
        $donnees['mail_etablissement'] = $_POST['mail_etablissement'];
        $donnees['adresse_etablissement'] = $_POST['adresse_etablissement'];
        $donnees['code_postal_etablissement'] = $_POST['code_postal_etablissement'];
        $donnees['ville_etablissement'] = $_POST['ville_etablissement'];
        $donnees['BAC'] = $_POST['BAC'];
        $donnees['BACplus2'] = $_POST['BACplus2'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesEtablissement($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Etablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateEtablissement($con,$id);
        include "../../Views/Admin/Update/EtablissementForm.php";
    }

    function UpdateDonnees_Etablissement(){

        $donnees['id'] = $_POST['id'];
        $donnees['categorie_etablissement'] = $_POST['categorie_etablissement'];
        $donnees['derniere_maj'] = $_POST['derniere_maj'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_academie'] = $_POST['nom_academie'];
        $donnees['formation_chimie'] = $_POST['formation_chimie'];
        $donnees['telephone_etablissement'] = $_POST['telephone_etablissement'];
        $donnees['mail_etablissement'] = $_POST['mail_etablissement'];
        $donnees['adresse_etablissement'] = $_POST['adresse_etablissement'];
        $donnees['code_postal_etablissement'] = $_POST['code_postal_etablissement'];
        $donnees['ville_etablissement'] = $_POST['ville_etablissement'];
        $donnees['BAC'] = $_POST['BAC'];
        $donnees['BACplus2'] = $_POST['BACplus2'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Entablissement($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Etablissement(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteEtablissement($con,$id);
        echo '<script> window.close()</script>';

    }

}

