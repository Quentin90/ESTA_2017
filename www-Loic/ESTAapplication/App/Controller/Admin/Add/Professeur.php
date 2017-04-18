<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 14/12/2016
 * Time: 16:09
 */

require "ControllerProfesseur.php";

$controller = new ControllerProfesseur();
$affiche = $controller->showProfesseur_Add();
