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
class ControllerProfesseur{

    function getPoleEnseignement(){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $poleEnseignement = $model->getPoleEnseignement($con);
        return $poleEnseignement;
    }

    function showProfesseur_Add(){

        include "../../Views/Admin/Add/ProfesseurPart1.html";
        $poleEnseignement = $this->getPoleEnseignement();
        while ($row = $poleEnseignement->fetch_assoc()) {
            echo '<option>' .$row['nom_pole_enseignement']. '</option>';
        }
        include "../../Views/Admin/Add/ProfesseurPart2.html";
    }

    function showProfesseur_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Professeur.php";
    }

    function showProfesseur_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Professeur.php";
    }

    function AddProfesseur(){

        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $donnees['prenom_professeur'] = $_POST['prenom_professeur'];
        $donnees['matiere_enseigner'] = $_POST['matiere_enseigner'];
        $donnees['date_naissance_professeur'] = $_POST['date_naissance_professeur'];
        $donnees['pole_enseignement'] = $_POST['pole_enseignement'];
        $donnees['adresse_professeur'] = $_POST['adresse_professeur'];
        $donnees['code_postal_professeur'] = $_POST['code_postal_professeur'];
        $donnees['ville_professeur'] = $_POST['ville_professeur'];
        $donnees['telephone_professionnel'] = $_POST['telephone_professionnel'];
        $donnees['portable_professeur'] = $_POST['portable_professeur'];
        $donnees['telephone_personnel'] = $_POST['telephone_personnel'];
        $donnees['mail_professeur'] = $_POST['mail_professeur'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesProfesseur($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Professeur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateProfesseur($con,$id);
        include "../../Views/Admin/Update/ProfesseurForm.php";
    }

    function UpdateDonnees_Professeur(){

        $donnees['id'] = $_POST['id'];
        $donnees['nom_professeur'] = $_POST['nom_professeur'];
        $donnees['prenom_professeur'] = $_POST['prenom_professeur'];
        $donnees['matiere_enseigner'] = $_POST['matiere_enseigner'];
        $donnees['date_naissance_professeur'] = $_POST['date_naissance_professeur'];
        $donnees['pole_enseignement'] = $_POST['pole_enseignement'];
        $donnees['adresse_professeur'] = $_POST['adresse_professeur'];
        $donnees['code_postal_professeur'] = $_POST['code_postal_professeur'];
        $donnees['ville_professeur'] = $_POST['ville_professeur'];
        $donnees['telephone_professionnel'] = $_POST['telephone_professionnel'];
        $donnees['portable_professeur'] = $_POST['portable_professeur'];
        $donnees['telephone_personnel'] = $_POST['telephone_personnel'];
        $donnees['mail_professeur'] = $_POST['mail_professeur'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['nom_entreprise'] = $_POST['nom_entreprise'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Professeur($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Professeur(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteProfesseur($con,$id);
        echo '<script> window.close()</script>';

    }

}
