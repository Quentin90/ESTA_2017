<?php
/**
 * Created by PhpStorm.
 * User: oternaud
 * Date: 12/04/17
 * Time: 15:04
 */
require "ControllerDonnees.php";



$control=new ControllerDonnees();
$control->afficheStats($_POST['s']);