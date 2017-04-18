<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 23/11/2016
 * Time: 10:06
 */


//Model pour l'interface de Données

class ModelAffichage{


    function save($con,$s){
        $req="INSERT INTO Historique(ligne) VALUES ('".$s."')";
        $result = mysqli_query($con, $req);
    }

    function afficheHistorique($con){
        $req = "SELECT date_maj,ligne FROM Historique";
        $result = mysqli_query($con, $req);
        return $result;
    }

    function Selection_champs($con,$table){
    //fonction qui selectionne le nom des champs des tables séléctionner et les retourne.
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner

        $req = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table' and not(COLUMN_NAME LIKE  'id%');";
        $result = mysqli_query($con, $req);
        return $result;function AfficheDonneesbyColumn($con,$table,$champ,$col){
        //fonction qui selectionne les donnees des champs de la table et les retournent
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner
        //$champ est le nom des champs selectionner
        $req = "SELECT $champ FROM $table ORDER by $col ASC;";
        $result = mysqli_query($con, $req);
        return $result;
    }
    }
    function eleveToAncienEleve($con){
        $req="INSERT INTO Ancien_Eleve(nom_ancien_eleve,prenom_ancien_eleve,portable_ancien_eleve,mail_ancien_eleve)
              SELECT nom_etudiant,prenom_etudiant,portable_etudiant,mail_etudiant FROM Etudiant Where nom_semestre_etudiant='MIA10';";

        $result = mysqli_query($con,$req);
        return $result;
    }

    function eleveToEntreSortie($con){
        $req="INSERT INTO EntreSortie(nom_eleve,prenom_eleve,date_entre)
              SELECT nom_etudiant,prenom_etudiant,date_entree_ESTA_etudiant FROM Etudiant Where nom_semestre_etudiant='MIA10';";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function deleteMIA10($con){
        $req="DELETE FROM Etudiant  WHERE nom_semestre_etudiant='MIA10';";

        $result = mysqli_query($con,$req);
        return $result;
    }

    function selectColonne($con){
        $req1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'TEMPORAIRE' and not(COLUMN_NAME LIKE  'id%');";
        $result = mysqli_query($con,$req1);
        return $result;
    }

    function AfficheDonneesbyColumn($con,$table,$champ,$col){
        //fonction qui selectionne les donnees des champs de la table et les retournent
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner
        //$champ est le nomnew game des champs selectionner
        $req = "SELECT $champ FROM $table ORDER by $col ASC;";
        $result = mysqli_query($con, $req);
        return $result;
    }

    function AfficheDonneesbyMia($con,$table,$champ,$col){
        //fonction qui selectionne les donnees des champs de la table et les retournent
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner
        //$champ est le nom des champs selectionner
        $req = "SELECT $champ FROM $table WHERE Etudiant.nom_semestre_etudiant='$col';";
        $result = mysqli_query($con, $req);
        return $result;
    }

    //-------- Requetes pour les updates des etudiant entrer apres le bac

    function MIA1_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA2' where nom_semestre_etudiant='MIA1' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA2_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA3' where nom_semestre_etudiant='MIA2' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA3_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA4' where nom_semestre_etudiant='MIA3' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
    }
    function MIA4_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA5' where nom_semestre_etudiant='MIA4' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA5_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA6' where nom_semestre_etudiant='MIA5' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA6_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA7' where nom_semestre_etudiant='MIA6' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA7_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA8' where nom_semestre_etudiant='MIA7' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA8_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA9' where nom_semestre_etudiant='MIA8' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA9_bac($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA10' where nom_semestre_etudiant='MIA9' and nom_bacplus2_etudiant='NON';";

        $result = mysqli_query($con, $req);
        return $result;
    }


    //-------- Requetes pour les updates des etudiant entrer en bac +2

    function afficheStats($con,$s){
        $req = "SELECT * FROM Etudiant WHERE ".$s.";";
        $result = mysqli_query($con, $req);

        return $result;
    }
    function afficheStatsNB($con){
        $req = "SELECT count(*) as nb FROM Etudiant";
        $result = mysqli_query($con, $req);

        return $result;
    }



    function MIA3_bac2($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA4' where nom_semestre_etudiant='MIA3' and nom_bacplus2_etudiant='OUI';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA4_bac2($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA5' where nom_semestre_etudiant='MIA4' and nom_bacplus2_etudiant='OUI';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA5_bac2($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA8' where nom_semestre_etudiant='MIA5' and nom_bacplus2_etudiant='OUI';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA8_bac2($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA9' where nom_semestre_etudiant='MIA8' and nom_bacplus2_etudiant='OUI';";

        $result = mysqli_query($con, $req);
        return $result;
    }
    function MIA9_bac2($con){
        $req = "UPDATE Etudiant SET nom_semestre_etudiant='MIA10' where nom_semestre_etudiant='MIA9' and nom_bacplus2_etudiant='OUI';";

        $result = mysqli_query($con, $req);
        return $result;
    }

    function Selection_Export($con){
    // fonction qui selection toute les données de la table temporaire et les retournent
        //$con est la connexion à la BDD
        //$table est le nom de la table temporaire
        $req = "select * from TEMPORAIRE;";
        $result = mysqli_query($con,$req);
        return $result;
    }
    function fileToBDD($con,$x){
        $req="LOAD DATA LOCAL INFILE '".$x."' 
                INTO TABLE Esta.Etudiant
                FIELDS TERMINATED BY ';' 
                ENCLOSED BY '' 
                LINES TERMINATED BY '\n';";
        $result=mysqli_query($con,$req);

        $req="UPDATE Esta.Etudiant
              SET nom_bacplus2_etudiant='OUI'
              WHERE nom_bacplus2_etudiant='X';";
        $result=mysqli_query($con,$req);

        $req="UPDATE Esta.Etudiant
              SET nom_bacplus2_etudiant='NON'
              WHERE nom_bacplus2_etudiant='-';";
        $result=mysqli_query($con,$req);

    }

    function AfficheDonnees3($con,$table,$champ){
    //fonction qui selectionne les donnees des champs de la table et les retournent
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner
        //$champ est le nom des champs selectionner

        $req = "SELECT $champ FROM $table ORDER by id;";
        $result = mysqli_query($con, $req);
        return $result;
    }

    function AfficheDonnees($con,$table,$champ){
        //fonction qui selectionne les donnees des champs de la table et les retournent
        //$con est la connexion à la BDD
        //$table est le nom des tables selectionner
        //$champ est le nom des champs selectionner

        $req = "SELECT $champ FROM $table ORDER by id_$table;";

        $result = mysqli_query($con, $req);
        return $result;
    }

    function Count($con,$table,$champ){
        $req = "SELECT COUNT($champ)FROM $table;";
        $result =mysqli_query($con,$req);
        return $result;
    }

    function Temporary($con){

        $req = "Create Table TEMPORAIRE(id int auto_increment,
	primary key (id));";

        mysqli_query($con,$req);

    }

    function Add_Temporary($con, $champ){

        $req = "Alter Table TEMPORAIRE ADD COLUMN $champ VARCHAR(50);";
        mysqli_query($con,$req);
    }

    function Insert_Temporary($con, $champ, $row){
        $req = "INSERT INTO TEMPORAIRE($champ) VALUES('$row');";
        save($con,$req);

        mysqli_query($con,$req);
    }
    function Update_Temporary($con, $row, $champ, $loop){
        $req = "UPDATE TEMPORAIRE SET $champ='$row' where id = $loop;";
        save($con,$req);

        mysqli_query($con,$req);
    }

    function Drop_Temporary($con){

        $req = "DROP TABLE TEMPORAIRE;";
        mysqli_query($con,$req);
    }

}



