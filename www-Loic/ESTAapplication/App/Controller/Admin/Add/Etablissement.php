<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 14/12/2016
 * Time: 16:08
 */

require "ControllerEtablissement.php";

$controller = new ControllerEtablissement();
$affiche = $controller->showEtablissement_Add();
