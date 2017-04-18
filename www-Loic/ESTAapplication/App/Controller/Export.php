<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 16/12/2016
 * Time: 16:31
 */

require "ControllerExport.php";
//require  "ControllerDonnees.php";



$ok = new ControllerExport();
$yes = $ok->ExportDonnees();
$delete = $ok->Delete_Temporary();

