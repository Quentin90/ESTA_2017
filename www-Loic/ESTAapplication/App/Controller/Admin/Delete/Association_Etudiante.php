<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/12/2016
 * Time: 14:03
 */

require "ControllerAssociation_Etudiante.php";

$controller = new ControllerAssociation_Etudiante();
$affiche = $controller->showAssociation_Etudiante_Delete($Table);
