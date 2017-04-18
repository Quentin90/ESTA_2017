<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 21/12/2016
 * Time: 13:29
 */

require "ControllerAffichage.php";

if($_POST['idChoix'] == "Exporter"){



   include  "../Views/Poles_Export.html";
}
else{

    include "../Views/Poles_Visualisation.html";
}
