<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 29/11/2016
 * Time: 11:51
 */
require "../ControllerConnexion.php";
require "../../Modele/Admin/SessionModel.php";
class ControllerSession{


    function Views(){
        include "../../Views/Admin/Connexion.html";
    }
    function Ok(){
        echo "ok";
    }
    function Open_Session(){

        $controllerConnexion = new ControllerConnexion();
        $con = $controllerConnexion->connect();
        $model = new SessionModel();
        $result = $model->GetSession($con);
        $row = $result->fetch_assoc();
        if( $_POST['login'] == $row['login_user'] && $_POST['mdp'] == $row['password_user']){
            include "../../Views/Admin/Add.html";
        }
        else{
            include "../../Views/Admin/Connexion.html";
        }

    }
}
