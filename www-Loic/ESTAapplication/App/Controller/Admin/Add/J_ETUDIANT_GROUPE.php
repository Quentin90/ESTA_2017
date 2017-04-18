<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:01
 */

require "ControllerJ_ETUDIANT_GROUPE.php";

$controller = new ControllerJ_ETUDIANT_GROUPE();
$affiche = $controller->showEtudiant_Groupe_Add();
