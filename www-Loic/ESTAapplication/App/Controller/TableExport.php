<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 07/12/2016
 * Time: 09:42
 */

//Appel des Tables correspondant au pôle séléctionner

//inclut le fihier ControllerAffichage.php
require "ControllerExport.php";


// nouvel objet ControllerAffichage
$controllerExport = new ControllerExport();
//appel la fonction qui redirige suivant le pôle séléctionner sur la bonne interface
$afficheTable = $controllerExport->redirect();
