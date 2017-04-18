<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 16:58
 */

require "../../Modele/Admin/Add/ListeDeroulanteModel.php";
require "../../Modele/Admin/ShowModel.php";
require "../ControllerConnexion.php";
class ControllerEtudiant{

    function getSemestre(){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $semestre = $model->getSemestre($con);
        return $semestre;
    }

    function getBac(){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $bac = $model->getBac($con);
        return $bac;
    }

    function getBacPlus2(){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ListeDeroulanteModel();
        $bacPus2 = $model->getBacPlus2($con);
        return $bacPus2;
    }

    function showEtudiant_Add(){

        include "../../Views/Admin/Add/EtudiantPart1.html";
        $semestre = $this->getSemestre();
        while ($row = $semestre->fetch_assoc()) {
            echo '<option>' .$row['nom_semestre']. '</option>';
        }
        include "../../Views/Admin/Add/EtudiantPart2.html";
        $bac = $this->getBac();
        while ($row = $bac->fetch_assoc()) {
            echo '<option>' .$row['nom_baccalaureat']. '</option>';
        }
        include "../../Views/Admin/Add/EtudiantPart3.html";
        $bacPlus2 = $this->getBacPlus2();
        while ($row = $bacPlus2->fetch_assoc()) {
            echo '<option>' .$row['nom_bacplus2']. '</option>';
        }
        include "../../Views/Admin/Add/EtudiantPart4.html";
    }

    function showEtudiant_Update($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Update/Etudiants.php";
    }

    function showEtudiant_Delete($Table){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->getAllDonnees($Table,$con);
        include "../../Views/Admin/Delete/Etudiants.php";
    }

    function AddEtudiant(){

        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['prenom_etudiant'] = $_POST['prenom_etudiant'];
        $donnees['semestre'] = $_POST['semestre'];
        $donnees['redoublant'] = $_POST['redoublant'];
        $donnees['semestre_etranger'] = $_POST['semestre_etranger'];
        $donnees['bacPlus2_obtenu'] = $_POST['bacPlus2_obtenu'];
        $donnees['bac_obtenu'] = $_POST['bac_obtenu'];
        $donnees['date_entree_ESTA'] = $_POST['date_entree_ESTA'];
        $donnees['score_toeic'] = $_POST['score_toeic'];
        $donnees['score_widaf'] = $_POST['score_widaf'];
        $donnees['score_elyte'] = $_POST['score_elyte'];
        $donnees['boursier'] = $_POST['boursier'];
        $donnees['portable_etudiant'] = $_POST['portable_etudiant'];
        $donnees['mail_etudiant'] = $_POST['mail_etudiant'];
        $donnees['date_naissance_etudiant'] = $_POST['date_naissance_etudiant'];
        $donnees['lieu_naissance_etudiant'] = $_POST['lieu_naissance_etudiant'];
        $donnees['departement_naissance_etudiant'] = $_POST['departement_naissance_etudiant'];
        $donnees['pays_naissance_etudiant'] = $_POST['pays_naissance_etudiant'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['sexe_etudiant'] = $_POST['sexe_etudiant'];
        $donnees['nationalite_etudiant'] = $_POST['nationalite_etudiant'];
        $donnees['securite_sociale'] = $_POST['securite_sociale'];
        $donnees['numero_BEA'] = $_POST['numero_BEA'];
        $donnees['adresse_etudiant'] = $_POST['adresse_etudiant'];
        $donnees['code_postal_etudiant'] = $_POST['code_postal_etudiant'];
        $donnees['ville_etudiant'] = $_POST['ville_etudiant'];
        $donnees['pays_etudiant'] = $_POST['pays_etudiant'];
        $donnees['nom_parents'] = $_POST['nom_parents'];
        $donnees['envoi_bulletin'] = $_POST['envoi_bulletin'];
        $donnees['stage'] = $_POST['stage'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->addDonneesEtudiant($con, $donnees);
        include("../../Views/Admin/Add.html");
    }

    function Update_Etudiant(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $data = $model->Select_UpdateEtudiant($con,$id);
        include "../../Views/Admin/Update/EtudiantsForm.php";
    }

    function UpdateDonnees_Etudiant()
    {

        $donnees['id'] = $_POST['id'];
        $donnees['nom_etudiant'] = $_POST['nom_etudiant'];
        $donnees['prenom_etudiant'] = $_POST['prenom_etudiant'];
        $donnees['semestre'] = $_POST['semestre'];
        $donnees['redoublant'] = $_POST['redoublant'];
        $donnees['semestre_etranger'] = $_POST['semestre_etranger'];
        $donnees['bacPlus2_obtenu'] = $_POST['bacPlus2_obtenu'];
        $donnees['bac_obtenu'] = $_POST['bac_obtenu'];
        $donnees['date_entree_ESTA'] = $_POST['date_entree_ESTA'];
        $donnees['score_toeic'] = $_POST['score_toeic'];
        $donnees['score_widaf'] = $_POST['score_widaf'];
        $donnees['score_elyte'] = $_POST['score_elyte'];
        $donnees['boursier'] = $_POST['boursier'];
        $donnees['portable_etudiant'] = $_POST['portable_etudiant'];
        $donnees['mail_etudiant'] = $_POST['mail_etudiant'];
        $donnees['date_naissance_etudiant'] = $_POST['date_naissance_etudiant'];
        $donnees['lieu_naissance_etudiant'] = $_POST['lieu_naissance_etudiant'];
        $donnees['departement_naissance_etudiant'] = $_POST['departement_naissance_etudiant'];
        $donnees['pays_naissance_etudiant'] = $_POST['pays_naissance_etudiant'];
        $donnees['nom_etablissement'] = $_POST['nom_etablissement'];
        $donnees['sexe_etudiant'] = $_POST['sexe_etudiant'];
        $donnees['nationalite_etudiant'] = $_POST['nationalite_etudiant'];
        $donnees['securite_sociale'] = $_POST['securite_sociale'];
        $donnees['numero_BEA'] = $_POST['numero_BEA'];
        $donnees['adresse_etudiant'] = $_POST['adresse_etudiant'];
        $donnees['code_postal_etudiant'] = $_POST['code_postal_etudiant'];
        $donnees['ville_etudiant'] = $_POST['ville_etudiant'];
        $donnees['pays_etudiant'] = $_POST['pays_etudiant'];
        $donnees['nom_parents'] = $_POST['nom_parents'];
        $donnees['envoi_bulletin'] = $_POST['envoi_bulletin'];
        $donnees['stage'] = $_POST['stage'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $add = $model->Update_Entudiant($con, $donnees);
        echo '<script> window.close()</script>';
    }

    function Delete_Etudiant(){

        $id = $_POST['id'];
        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new ShowModel();
        $delete = $model->DeleteEtudiant($con,$id);
        echo '<script> window.close()</script>';

    }

}
