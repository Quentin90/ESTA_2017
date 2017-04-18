<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 02/01/2017
 * Time: 09:11
 */


require "ControllerExport.php";

$controllerExport = new ControllerExport();
$table = $controllerExport->getTable();
$champ = $controllerExport->getChamps_Selection($table);
$temporaire = $controllerExport->CreerTable_Temporaire();
$addtemporaire = $controllerExport->AjoutTable_Temporaire($champ);
$addDonnees = $controllerExport->AddDonnees($table);
$affiche = $controllerExport->Affiche_Selection($table,$champ);
