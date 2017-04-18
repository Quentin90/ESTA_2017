<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 18/01/2017
 * Time: 16:42
 */

require "ControllerAssociation_Etudiante.php";


$controller = new ControllerAssociation_Etudiante();
$affiche = $controller->Delete_Association_Etudiante();