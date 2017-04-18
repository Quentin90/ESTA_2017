<?php
/**
 * Created by PhpStorm.
 * User: oternaud
 * Date: 13/04/17
 * Time: 15:22
 */


require "ControllerDonnees.php";


$control=new ControllerDonnees();

$aff=$control->fileToBDD($_FILES['mon_fichier']["tmp_name"]);

header("Location: ../../");
die();