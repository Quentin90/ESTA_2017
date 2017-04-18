<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 16:57
 */

require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";

class ControllerParents{

    function showParents_Add(){

        include "../../Views/Admin/Add/Parents.html";
    }

    function showParents_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        echo $Table;
        include "../../Views/Admin/Update/Parents.php";
    }

    function showParents_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Parents.php";
    }

    function AddParents(){

        $donnees['nom_parents'] = $_POST['nom_parents'];
        $donnees['prenom_parents'] = $_POST['prenom_parents'];
        $donnees['genre_parents'] = $_POST['genre_parents'];
        $donnees['adresse_parents'] = $_POST['adresse_parents'];
        $donnees['code_postal_parents'] = $_POST['code_postal_parents'];
        $donnees['ville_parents'] = $_POST['ville_parents'];
        $donnees['telephone_parents'] = $_POST['telephone_parents'];
        $donnees['portable_mere'] = $_POST['portable_mere'];
        $donnees['profession_mere'] = $_POST['profession_mere'];
        $donnees['entreprise_mere'] = $_POST['entreprise_mere'];
        $donnees['portable_pere'] = $_POST['portable_pere'];
        $donnees['profession_pere'] = $_POST['profession_pere'];
        $donnees['entreprise_pere'] = $_POST['entreprise_pere'];
        $donnees['diplome'] = $_POST['diplome'];
        $donnees['pays_parents'] = $_POST['pays_parents'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesParents($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Parents(){

        $id = $_POST['id'];
        echo $id;
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateParents($con,$id);
        include "../../Views/Admin/Update/ParentsForm.php";
    }

    function UpdateDonnees_Parent(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_parents'] = $_POST['nom_parents'];
        $donnees['prenom_parents'] = $_POST['prenom_parents'];
        $donnees['genre_parents'] = $_POST['genre_parents'];
        $donnees['adresse_parents'] = $_POST['adresse_parents'];
        $donnees['code_postal_parents'] = $_POST['code_postal_parents'];
        $donnees['ville_parents'] = $_POST['ville_parents'];
        $donnees['telephone_parents'] = $_POST['telephone_parents'];
        $donnees['portable_mere'] = $_POST['portable_mere'];
        $donnees['profession_mere'] = $_POST['profession_mere'];
        $donnees['entreprise_mere'] = $_POST['entreprise_mere'];
        $donnees['portable_pere'] = $_POST['portable_pere'];
        $donnees['profession_pere'] = $_POST['profession_pere'];
        $donnees['entreprise_pere'] = $_POST['entreprise_pere'];
        $donnees['diplome'] = $_POST['diplome'];
        $donnees['pays_parents'] = $_POST['pays_parents'];
        var_dump($donnees);
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Parent($con, $donnees);
        //echo '<script> window.close()</script>';
    }

    function Delete_Parent(){

        $id = $_POST['id'];
        echo $id;
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteParents($con,$id);
        echo '<script> window.close()</script>';
        header("Refresh:0");

    }

}


