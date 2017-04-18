<?php
/**
 * Created by PhpStorm.
 * User: oternaud
 * Date: 14/04/17
 * Time: 08:58
 */


require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";


class ControllerEntreSortie{


    function showEntreSortie_Update($Table){
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/EntreSortie.php";
    }

    function Update_EntreSortie(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateEntreSortie($con,$id);
        include "../../Views/Admin/Update/EntreSortieForm.php";
    }

    function UpdateDonnees_EntreSortie(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_eleve'] = $_POST['nom_eleve'];
        $donnees['prenom_eleve'] = $_POST['prenom_eleve'];
        $donnees['date_entre'] = $_POST['date_entre'];
        $donnees['date_sortie'] = $_POST['date_sortie'];
        $donnees['Raison'] = $_POST['Raison'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_EntreSortie($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function showEntreSortie_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/EntreSortie.php";
    }

    function Delete_EntreSortie(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteEntreSortie($con,$id);
        echo '<script> window.close()</script>';

    }
}
