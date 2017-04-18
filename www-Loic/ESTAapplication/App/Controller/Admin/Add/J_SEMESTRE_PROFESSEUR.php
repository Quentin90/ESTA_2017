<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:00
 */

require "ControllerJ_SEMESTRE_PROFESSEUR.php";

$controller = new ControllerJ_SEMESTRE_PROFESSEUR();
$affiche = $controller->showSemestre_Porfesseur_Add();
