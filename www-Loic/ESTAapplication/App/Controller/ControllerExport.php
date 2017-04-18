<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 08/12/2016
 * Time: 08:54
 */

require "ControllerConnexion.php";
require "../Modele/ModelAffichage.php";




class ControllerExport{


    function redirect(){
        if ($_POST["idPôles"] == "0"){
            echo("Pas de pôle selectionné");
        }
        // si oui redirection sur le bon fichier suivant la table selectionner
        else{
            switch ($_POST["idPôles"]){
                case "Scolarité" :
                    include "../Views/Export/Scolarite.html";
                    break;
                case "Gestion Entreprise" :
                    include "../Views/Export/Gestion_Entreprise.html";
                    break;
                case  "Communication" :
                    include "../Views/Export/Communication.html";
                    break;
                case "Administration" :
                    include "../Views/Export/Administration.html";
                    break;
            }
        }
    }

    function getTable(){
        //fonction qui récupere le nom des tables entre crochet et les retourne sous forme de liste

        preg_match_all( '#\[(\w+)]#', $_POST['liste_champs'], $m );
        $tables = $m[1];
        $table = array();
        for($i=0;$i<sizeof($tables);$i++){
            if(!in_array($tables[$i], $table)) {
                array_push($table, $tables[$i]);
            }

        }
        return($table);
    }

    function toListChamp(){

        $champ_selection = explode( ',', $_POST["liste_champs"]);
        return $champ_selection;
    }

    function getChamps_Selection($table){
        //fonction qui supprime le nom de la table est les paranthèse pour ne garder que les champs
        //$table liste des tables selectionner

        $champ_seection = $this->toListChamp();
        $champ_seection = str_replace($table,'',$champ_seection);
        $champ_seection = str_replace("[",'',$champ_seection);
        $champ_seection = str_replace("]",'',$champ_seection);
        return $champ_seection;
    }

    function Affiche_Selection($table, $champ){
        /*fonction qui affiche les champs et les tables séléctionner et propose un choix entre afficher les données
        ou importer les données en .csv*/
        // $table liste des tables séléctionner
        // $champ liste des champs séléctionner

        echo "Vous avez séléctionner : ";
        echo'<br>';
        echo (implode(',',$champ));
        echo'<br>';
        echo ("Des Tables : ");
        echo'<br>';
        echo(implode(',', $table));
        include "../Views/Export/ValideExport.html";

        return ($champ);


    }

    function CreerTable_Temporaire(){
        // A venir
        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $table = $model->Temporary($con);
    }
    function AjoutTable_Temporaire($champ){

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        for($i = 0; $i < sizeof($champ); $i++){
            $ajout = $model->Add_Temporary($con,$champ[$i]);
        }

    }

    function AddDonnees($table){

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $champ_seection = explode(',',$_POST['liste_champs']);
        $nombre = 0;
        $premiereDonnee = "";
        $nomtable = "";
        for($j=0; $j < sizeof($table); $j++) {
            $liste = array();
            for ($i = 0; $i < sizeof($champ_seection); $i++) {

                if (stristr($champ_seection[$i], $table[$j])) {
                    array_push($liste, $champ_seection[$i]);
                }

            }
            $liste = str_replace($table, '', $liste);
            $liste = str_replace("[", '', $liste);
            $liste = str_replace("]", '', $liste);
            for ($k = 0; $k < sizeof($liste); $k++) {
                $donnees = $model->AfficheDonnees($con, $table[$j], $liste[$k]);
                $loop = 1;
                $count = $model->Count($con, $table[$j], $liste[$k]);
                $nbchamps = $count->fetch_assoc();
                $nbchamps = implode(',', $nbchamps);
                if ($nbchamps > $nombre) {
                    $nombre = $nbchamps;
                    $premiereDonnee = $liste[$k];
                    $nomtable = $table[$j];

                }
            }
        }

        //insere premiere donnée
        $donnees = $model->AfficheDonnees($con, $nomtable, $premiereDonnee);
        while ($row = $donnees->fetch_assoc()){
            $ok = implode(',', $row);
            $insertition =$model->Insert_Temporary($con,$premiereDonnee,$ok);
        }


        for($j=0; $j < sizeof($table); $j++) {
            $liste = array();
            for ($i = 0; $i < sizeof($champ_seection); $i++) {

                if (stristr($champ_seection[$i], $table[$j])) {
                    array_push($liste, $champ_seection[$i]);
                }
                //supprime de la liste

            }
            $liste = str_replace($table, '', $liste);
            $liste = str_replace("[", '', $liste);
            $liste = str_replace("]", '', $liste);
            for ($k = 0; $k < sizeof($liste); $k++) {
                $donnees = $model->AfficheDonnees($con, $table[$j], $liste[$k]);
                $loop = 1;
                while ($row = $donnees->fetch_assoc()) {
                    $ok = implode(',', $row);
                    $add = $model->Update_Temporary($con, $ok, $liste[$k], $loop);
                    $loop = $loop + 1;
                }
            }
        }

    }


    function ExportDonnees(){
        // on indique au navigateur qu'on va exporter un CSV
         header("Content-type: text/csv");
         header("Content-Type: application/force-download" );
        header("Content-Disposition: attachment; filename=Donnees.csv");



        //Connexion
       $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();

        // selection de la table à exporter
        $model = new ModelAffichage();
        $result = $model->Selection_Export($con);
        $rows = mysqli_fetch_assoc($result);

        if($rows) {
            $this->makecsv(array_keys($rows));
        }

        while($rows) {
            $this->makecsv($rows);
            $rows = mysqli_fetch_assoc($result);
        }

    }


    function makecsv($num_field_names) {
        $separate = '';

        // on formate les données pour remplacer les séparateurs par des traits d'union
        foreach ($num_field_names as $field_name) {
            $field_name = str_replace( array('<br>', '<br />', "\n", "\r", ",", ";"), array( '-', '-', '-', '-', '-', '-'), $field_name);
            echo $separate . $field_name;

            // on insère un séparateur de champ reconnu par Excel (si ça ne marche pas, essayez avec une virgule)
            $separate = ';';
        }

        // nouvelle rangée, nouvelle ligne
        echo "\r\n";
    }

    function Delete_Temporary(){

        $connect = new ControllerConnexion();
        $con = $connect->connect();
        $model = new ModelAffichage();
        $delete = $model->Drop_Temporary($con);
    }

}





