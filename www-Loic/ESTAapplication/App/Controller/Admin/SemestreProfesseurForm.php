<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 17/01/2017
 * Time: 13:48
 */

require "ControllerJ_SEMESTRE_PROFESSEUR.php";


$controller = new ControllerJ_SEMESTRE_PROFESSEUR();
$affiche = $controller->Update_SemestreProfesseur();
