

<div class="fixed-nav-bar">
    <a id="btnID3" href="../../../index.php" style="text-decoration:none;">Deconnexion</a><button id="btnID2" onclick="scrollbot()">v</button><button id="btnID2" onclick="scrolltop()">^</button>

</div>

<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 01/01/2017
 * Time: 18:28
 */

require "ControllerSession.php";

$controllerSession = new ControllerSession();
$openSession = $controllerSession->Open_Session();
