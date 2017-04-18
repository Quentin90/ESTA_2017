<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 16/01/2017
 * Time: 23:24
 */

require "ControllerAssociation_Etudiante.php";


$controller = new ControllerAssociation_Etudiante();
$affiche = $controller->Update_Association_Etudiante();
