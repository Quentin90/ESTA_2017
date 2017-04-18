<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:01
 */

require "ControllerJ_BACCALAUREAT_ETABLISSEMENT.php";

$controller = new ControllerJ_BACCALAUREAT_ETABLISSEMENT();
$affiche = $controller->showBaccalaureat_Etablissement_Add();
