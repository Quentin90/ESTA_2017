<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 16:57
 */
require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerGroupe{

    function getSemestre(){
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $semestre = $model->getSemestre($con);
        return $semestre;
    }

    function showGroupe_Add(){

        include "../../Views/Admin/Add/GroupePart1.html";
        $semestre = $this->getSemestre();
        while ($row = $semestre->fetch_assoc()) {
            echo '<option>' .$row['nom_semestre']. '</option>';
        }
        include "../../Views/Admin/Add/GroupePart2.html";
    }

    function showGroupe_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Groupe.php";
    }

    function showGroupe_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Groupe.php";
    }

    function AddGroupe(){

        $donnees['nom_groupe'] = $_POST['nom_groupe'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $donnees['semestre'] = $_POST['semestre'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesGroupe($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Groupe(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateGroupe($con,$id);
        include "../../Views/Admin/Update/GroupeForm.php";
    }

    function UpdateDonnees_Baccalaureat(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_groupe'] = $_POST['nom_groupe'];
        $donnees['nombre_etudiant'] = $_POST['nombre_etudiant'];
        $donnees['semestre'] = $_POST['semestre'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Groupe($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Groupe(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteGroupe($con,$id);
        echo '<script> window.close()</script>';

    }
}
