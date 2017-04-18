<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 14/12/2016
 * Time: 14:51
 */

class Interfaces{

    function InterfaceDonnees(){

        include "App/Views/Choix.html";
    }
}

$interaces = new Interfaces();
$affiche = $interaces->InterfaceDonnees();