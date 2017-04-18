<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 20/12/2016
 * Time: 10:03
 */

require "ControllerDonnees.php";

$ok = new ControllerDonnees();
$table = $ok->getTable();
$champ = $ok->getChamps_Selection($table);
//$temporaire = $ok->CreerTable_Temporaire();
//$addtemporaire = $ok->AjoutTable_Temporaire($champ);
//$addDonnees = $ok->AddDonnees($table);




