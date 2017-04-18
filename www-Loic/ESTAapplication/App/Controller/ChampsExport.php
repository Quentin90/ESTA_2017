<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 02/01/2017
 * Time: 09:24
 */

//ouvre ControllerAfichage
require "ControllerAffichage.php";


// nouvel objet ControllerAffichage
$controllerAffichage = new ControllerAffichage();
//récupération des Tables séléctionner
$recupereTable = $controllerAffichage->getIdTables();
if(!$_POST['idTables'] == "") {
//ouvre la première liste déroulante
    require "../Views/Export/ListePartie1.html";
// affiche le nom des champs des tables dans la 1ère liste déroulante
    $afficheChampsTable = $controllerAffichage->AfficheChamps();
//ouvre la seconde liste déroulante
    require "../Views/Export/ListePartie2.html";
}

