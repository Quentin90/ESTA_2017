<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 08/12/2016
 * Time: 08:54
 */

//inclusion de fichier
require "ControllerConnexion.php";
require "../Modele/ModelAffichage.php";
include "../Views/Visualisation/Tableau.html";

//class ControllerDonnees
class ControllerDonnees
{

    function getTable()
    {
        //fonction qui retourne le nom des tales qui se trouve entre crochet dans la chaîne de caractère

        preg_match_all('#\[(\w+)]#', $_POST['liste_champs'], $m);
        $tables = $m[1];
        $table = array();
        for ($i = 0; $i < sizeof($tables); $i++) {
            if (!in_array($tables[$i], $table)) {
                array_push($table, $tables[$i]);
            }
        }
        return $table;
    }


    function getChamps_Selection($table)
    {
        //fonction qui retourne les champs séléctionner sans le nom des tables entre parenthèse
        // $table est la liste des tables séléctionner

        $champ_seection = explode(',', $_POST['liste_champs']);
        $champ_seection = str_replace($table, '', $champ_seection);
        $champ_seection = str_replace("[", '', $champ_seection);
        $champ_seection = str_replace("]", '', $champ_seection);

        return $champ_seection;
    }

    function fileToBDD($x){
        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $model->fileTOBDD($con,$x);
    }

    function showDonnees($table, $champ_seection)
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner
        // $champ_seection est la liste des champs séléctionner
        //var_dump($champ_seection);
        $table = implode(',', $table);
        //var_dump($table);
        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();
        echo '<div class="formulaire">
         <select id="select_mia">
            <option value="MIA1">MIA1</option>
            <option value="MIA2">MIA2</option>
            <option value="MIA3">MIA3</option>
            <option value="MIA4">MIA4</option>
            <option value="MIA5">MIA5</option>
            <option value="MIA6">MIA6</option>
            <option value="MIA7">MIA7</option>
            <option value="MIA8">MIA8</option>
            <option value="MIA9">MIA9</option>
            <option value="MIA10">MIA10</option>
            </select>
            <button onclick="MIA()" value="Rechercher">Rechercher</button> </div>';

        for ($i = 0; $i < sizeof($champ_seection); $i++) {
            $champ = $champ_seection[$i];
            echo $table;
            if(strcmp($table,"EntreSortie")) {
                $result = $model->AfficheDonnees($con, $table, $champ);
                //var_dump($result);
                $subList = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($subList, $row[$champ_seection[$i]]);
                }
                array_push($list, $subList);
            }
            else {
                $result = $model->AfficheDonnees3($con, $table, $champ);
                //var_dump($result);
                $subList = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($subList, $row[$champ_seection[$i]]);
                }
                array_push($list, $subList);
            }


        }

        //var_dump($list);

        $nbligne = sizeof($list[0]);
        //var_dump($nbligne);

        echo '<table id="main_table" class="container">';
        echo '<tr>';

        for ($z = 0; $z < sizeof($champ_seection); $z++) {
            echo '<td><button type="button" onclick="ranger(this.innerHTML)">' . $champ_seection[$z] . '</button></td>';
        }
        echo '</tr>';

        for ($i = 0; $i < $nbligne; $i++) {
            echo '<tr>';
            for ($x = 0; $x < sizeof($champ_seection); $x++) {

                echo '<td>' . $list[$x][$i] . '</td>';
            }


            echo '</tr>';
        }
        echo '</table>';


    }

    function afficheStats($s)
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();


        $result = $model->afficheStats($con, $s);
            //var_dump($result);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["nom_etudiant"]."</td><td>". $row["prenom_etudiant"]."</td></tr>";
            }
        } else {
            echo "0 results";
        }

    }
    function afficheHistorique()
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();


        $result = $model->afficheHistorique($con);
        //var_dump($result);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["date_maj"] . "</td><td style='min-width: 1000px;'>" . $row["ligne"] . "</td></tr>";
            }

        }else {
            echo "0 results";
        }

    }

    function afficheStatsNB()
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();


        $result = $model->afficheStatsNB($con);
        //var_dump($result);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["nb"];
            }
        } else {
            echo "0 results";
        }

    }

    function updateBDD()
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner
        // $champ_seection est la liste des champs séléctionner
        //var_dump($champ_seection);

        //var_dump($table);
        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $model->eleveToEntreSortie($con);
        $model->eleveToAncienEleve($con); // fait passer tout les MIA10 dans ancien_eleve
        $model->deleteMIA10($con); // supprime les MIA10 d'Etudiant

        //fait passer au semestre suivant tout les élèves du cursus normal
        $model->MIA9_bac($con);
        $model->MIA8_bac($con);
        $model->MIA7_bac($con);
        $model->MIA6_bac($con);
        $model->MIA5_bac($con);
        $model->MIA4_bac($con);
        $model->MIA3_bac($con);
        $model->MIA2_bac($con);
        $model->MIA1_bac($con);

        //fait passer au semestre suivant tout les élèves du cursus BAC + 2
        $model->MIA9_bac2($con);
        $model->MIA8_bac2($con);
        $model->MIA5_bac2($con);
        $model->MIA4_bac2($con);
        $model->MIA3_bac2($con);





    }

    function showDonneesbyColumn($table, $champ_seection, $col)
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner
        // $champ_seection est la liste des champs séléctionner
        //var_dump($champ_seection);

        //var_dump($table);
        $champ_seection2 = explode(',', $champ_seection);

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();

        for ($i = 0; $i < sizeof($champ_seection2); $i++) {
            $champ = $champ_seection2[$i];
            $result = $model->AfficheDonneesbyColumn($con, $table, $champ, $col);

            //var_dump($result);
            $subList = array();
            while ($row = $result->fetch_assoc()) {
                array_push($subList, $row[$champ_seection2[$i]]);
            }
            array_push($list, $subList);


        }

        //var_dump($list);

        $nbligne = sizeof($list[0]);
        //var_dump($nbligne);
        echo '<table id="main_table" class="container">';

        echo '<tr>';

        for ($z = 0; $z < sizeof($champ_seection2); $z++) {
            echo '<td><button type="button" onclick="ranger(this.innerHTML)">' . $champ_seection2[$z] . '</button></td>';
        }
        echo '</tr>';

        for ($i = 0; $i < $nbligne; $i++) {
            echo '<tr>';
            for ($x = 0; $x < sizeof($champ_seection2); $x++) {

                echo '<td>' . $list[$x][$i] . '</td>';
            }


            echo '</tr>';
        }
        echo '</table>';


    }


    function showDonneesbyMia($table, $champ_seection, $col)
    {
        //fonction qui affiche les Données demandé par l'utilisateur
        // $table est la liste des tables séléctionner
        // $champ_seection est la liste des champs séléctionner
        //var_dump($champ_seection);

        //var_dump($table);
        $champ_seection2 = explode(',', $champ_seection);

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $list = array();

        for ($i = 0; $i < sizeof($champ_seection2); $i++) {
            $champ = $champ_seection2[$i];
            $result = $model->AfficheDonneesbyMia($con, $table, $champ, $col);

            //var_dump($result);
            $subList = array();
            while ($row = $result->fetch_assoc()) {
                array_push($subList, $row[$champ_seection2[$i]]);
            }
            array_push($list, $subList);


        }

        //var_dump($list);

        $nbligne = sizeof($list[0]);
        //var_dump($nbligne);
        echo 'nombre de lignes : '.$nbligne.'';

        echo '<table id="main_table" class="container">';
        echo '<tr>';

        for ($z = 0; $z < sizeof($champ_seection2); $z++) {
            echo '<td><button type="button" onclick="ranger(this.innerHTML)">' . $champ_seection2[$z] . '</button></td>';
        }
        echo '</tr>';

        for ($i = 0; $i < $nbligne; $i++) {
            echo '<tr>';
            for ($x = 0; $x < sizeof($champ_seection2); $x++) {

                echo '<td>' . $list[$x][$i] . '</td>';
            }


            echo '</tr>';
        }
        echo '</table>';
    }
}




