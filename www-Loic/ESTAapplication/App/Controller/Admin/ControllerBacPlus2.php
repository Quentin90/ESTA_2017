<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 15:14
 */


require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerBacPlus2{

    function showBacPlus2_Add(){

        include "../../Views/Admin/Add/BacPlus2.html";
    }

    function showBacPlus2_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/BacPlus2.php";
    }

    function showBacPlus2_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/BacPlus2.php";
    }

    function AddBacPlus2(){

        $donnees['nom_bacPlus2'] = $_POST['nom_bacPlus2'];
        $donnees['option_bacPlus2'] = $_POST['option_bacPlus2'];
        $donnees['annee_bacPlus2'] = $_POST['annee_bacPlus2'];
        $donnees['nombre_etudiants'] = $_POST['nombre_etudiants'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesBacPlus2($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Bacplus2(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateBacPlus2($con,$id);
        include "../../Views/Admin/Update/Bacplus2Form.php";
    }

    function UpdateDonnees_Bacplus2(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_bacPlus2'] = $_POST['nom_bacPlus2'];
        $donnees['option_bacPlus2'] = $_POST['option_bacPlus2'];
        $donnees['annee_bacPlus2'] = $_POST['annee_bacPlus2'];
        $donnees['nombre_etudiants'] = $_POST['nombre_etudiants'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Bacplus2($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Bacplus2(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteBacplus2($con,$id);
        echo '<script> window.close()</script>';

    }
}

