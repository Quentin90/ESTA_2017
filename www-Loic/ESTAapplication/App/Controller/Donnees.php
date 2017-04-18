<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 07/12/2016
 * Time: 10:29
 */


//inclut le fichier ControllerAffichage.php
require "ControllerAffichage.php";

//nouvel objet ControllerAffichage
$controllerAffichage = new ControllerAffichage();
if(!$_POST['liste_champs'] == "") {
//fonction qui converti la chaîne de caractère des champs séléctionner en liste
    $converti = $controllerAffichage->toListChamp();

//recupere la liste des tables séléctionner
    $table = $controllerAffichage->getTable();

//recupere le nom des champs
    $champ = $controllerAffichage->getChamps_Selection($table);


    //$temporaire = $controllerAffichage->CreerTable_Temporaire();
    //$addtemporaire = $controllerAffichage->AjoutTable_Temporaire($champ);
    //$addDonnees = $controllerAffichage->AddDonnees($table);

//affiche un récapitulatif des données choisies par l'utilisateur
    $affiche = $controllerAffichage->Affiche_Selection($table, $champ);
}
else{
    echo "Pas de champs séléctionner";
}
