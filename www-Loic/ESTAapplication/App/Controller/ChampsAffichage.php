<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 07/12/2016
 * Time: 09:49
 */

//Appel pour Afficher les champs des tables séléctionner

//ouvre ControllerAfichage
require "ControllerAffichage.php";


// nouvel objet ControllerAffichage
    $controllerAffichage = new ControllerAffichage();
//récupération des Tables séléctionner
    $recupereTable = $controllerAffichage->getIdTables();

    if($_POST['idTables']!="") {

//ouvre la première liste déroulante
        require "../Views/Visualisation/ListePartie1.html";
// affiche le nom des champs des tables dans la 1ère liste déroulante

        $afficheChampsTable = $controllerAffichage->AfficheChamps();
//ouvre la seconde liste déroulante
        require "../Views/Visualisation/ListePartie2.html";
    }

