<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 16/12/2016
 * Time: 13:14
 */
//inclut le fichier ControllerDonnees.php
require "ControllerDonnees.php";

//nouvel objet controllerDonnees
$controllerDonnees = new ControllerDonnees();

// recupere les tables selectionner
$table = $controllerDonnees->getTable();

//recupere les champs selectionner
$champ_selection = $controllerDonnees->getChamps_Selection($table);

echo '<br><div class="formulaire"><button onclick="ExportToExcel()">Export</button></div><br>';
echo '<br><div class="formulaire"><input id="search_bar" type="text" value="rechercher sur la page"><button onclick="search()">Rechercher</button></div><br><br>';


//affiche les données voulues à l'utilisateur
$showDonnees = $controllerDonnees->showDonnees($table,$champ_selection);