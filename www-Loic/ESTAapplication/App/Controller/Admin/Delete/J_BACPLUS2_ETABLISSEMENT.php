<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 17/01/2017
 * Time: 19:56
 */

require "ControllerJ_BACPLUS2_ETABLISSEMENT.php";

$controller = new ControllerJ_BACPLUS2_ETABLISSEMENT();
$affiche = $controller->showBacplus2_Etablissement_Delete($Table);