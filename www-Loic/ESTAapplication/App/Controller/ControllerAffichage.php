<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 22/11/2016
 * Time: 14:15
 */

//inclut la connexion
require "ControllerConnexion.php";
require "../Modele/ModelAffichage.php";
//class ControllerAffichage
class ControllerAffichage{

    // si différent de vide
    //Test si un pôle est selectionner dans la liste
    function redirect(){
        if ($_POST["idPôles"] == "0"){
            echo("Pas de pôle selectionné");
        }
        // si oui redirection sur le bon fichier suivant la table selectionner
        else{

            switch ($_POST["idPôles"]){
                case "Scolarité" :
                    include "../Views/Visualisation/Scolarite.html";
                    break;
                case "Gestion Entreprise" :
                    include "../Views/Visualisation/Gestion_Entreprise.html";
                    break;
                case  "Communication" :
                    include "../Views/Visualisation/Communication.html";
                    break;
                case "Administration" :
                    include "../Views/Visualisation/Administration.html";
                    break;
            }
        }
    }

    function getIdTables()
    {//fonction qui test si des tables on été selectioner
        //si vide
        if ($_POST["idTables"] == "") {
            //affiche message
            echo("Pas de Table selectionnée");
        } //sinon
        else {
            //affiche le nom des tables selectionner + return

            $Table = ($_POST["idTables"]);
            return ($_POST["idTables"]);
        }
    }
    //à faire en générique avec paramètre
    function toList()
    {//fonction qui transforme la chaîne de caractère en liste
        //récuperation chaîne
        $Table = $this->getIdTables();
        //transformation en liste
        $liste = explode( ',', $Table);
        return $liste;
    }

    function AfficheChamps()
    {

        echo 'affiche champs';
        $liste = $this->toList();
        var_dump($liste);
        //Connexion à la base de donnée
        $connect = new ControllerConnexion();
        $con = $connect->connect();


        //déclaration d'une liste générale qui comptiendra l'index i de la boucle ci-dessous + la liste de champ liste_champ
        $liste_generale = array();

        //boucle qui affiche le nom des champs de toute les tables selections grâce à la longeur de la chaîne liste ci_dessus
        for($i = 0 ; $i < sizeof($liste); $i++){

            // déclaration d'une liste qui contiendra le nom des champs
            $liste_champ = array();

            //requete selectionant le nom des colones de la table contenue dans la chaine $liste et d'index $i
            $modelMethode = new ModelAffichage();
            $result = $modelMethode->Selection_champs($con,$liste[$i]);
            //boucle affichant les noms des colones de cette table dans les options d'une liste déroulante select
            while ($row = $result->fetch_assoc()) {
                array_push($liste_champ, $row);
                echo '<option>' .$row['COLUMN_NAME'].'['.$liste[$i].']'. '</option>';
            }


            array_push($liste_generale, $liste_champ);

        }
    }

    function toListChamp(){

        $champ_selection = explode( ',', $_POST["liste_champs"]);
        return $champ_selection;
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

        include "../Views/Visualisation/ValideAffichage.html";

        return ($champ);


    }

    function Choix(){

        include "../Views/Poles_Visualisation.html";
    }




}

