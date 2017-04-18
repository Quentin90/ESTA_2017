<?php
/**
 * Created by PhpStorm.
 * User: oternaud
 * Date: 06/04/17
 * Time: 08:56
 */
require "ControllerDonnees.php";



$control=new ControllerDonnees();

$aff=$control->showDonneesbyMia($_GET['table'],$_GET['list'],$_GET['col']);
