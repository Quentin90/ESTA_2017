<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/12/2016
 * Time: 14:17
 */

require "ControllerAssociation_Etudiante.php";

$controller = new ControllerAssociation_Etudiante();
$affiche = $controller->ShowAssociation_Etudiante_Add();
