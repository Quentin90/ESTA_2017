<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:00
 */

require "ControllerJ_GROUPE_PROFESSEUR.php";

$controller = new ControllerJ_GROUPE_PROFESSEUR();
$affiche = $controller->showGroupe_Professeur_Add();
