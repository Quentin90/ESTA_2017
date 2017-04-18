<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 13/12/2016
 * Time: 13:30
 */

class ListeDeroulanteModel{


    function getCategoriePoste($con){

        $req = "Select nom_categorie_poste_occupe from LD_CATEGORIE_POSTE_OCCUPE ;";
        $result = mysqli_query($con,$req);
        return $result;

    }

    function getTypeEntreprise($con){

        $req = "Select nom_type_entreprise from LD_TYPE_ENTREPRISE;";
        $result = mysqli_query($con,$req);
        return $result;

    }

    function getSecteurActivite($con){

        $req = "Select nom_secteur_activite from LD_SECTEUR_ACTIVITE;";
        $result = mysqli_query($con,$req);
        return $result;

    }

    function getPays($con){

        $req = "Select nom_pays from LD_PAYS;";
        $result = mysqli_query($con,$req);
        return $result;

    }

    function getJourneeSpeciale($con){

        $req = "Select nom_evenements from LD_EVENEMENTS;";
        $result = mysqli_query($con,$req);
        return $result;

    }

    function getPoleEnseignement($con){

        $req = "Select nom_pole_enseignement from LD_POLE_ENSEIGNEMENT;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function getSemestre($con){

        $req = "Select nom_semestre from SEMESTRE;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function getBac($con){

        $req = "Select nom_baccalaureat from BACCALAUREAT;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function getBacPlus2($con){

        $req = "Select nom_bacplus2 from BACPLUS2;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function getCategorieEtablissement($con){

        $req = "Select nom_categorie_etablissement from LD_CATEGORIE_ETABLISSEMENT;";
        $result = mysqli_query($con,$req);
        return $result;
    }

    function getAcademie($con){
        $req = "Select nom_academie from LD_ACADEMIE;";
        $result = mysqli_query($con,$req);
        return $result;
    }
}