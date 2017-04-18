<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 14/12/2016
 * Time: 16:08
 */

require "ControllerContact.php";

$controller = new ControllerContact();
$affiche = $controller->showContact_Delete($Table);
