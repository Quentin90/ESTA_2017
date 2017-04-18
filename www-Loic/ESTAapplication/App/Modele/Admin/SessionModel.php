<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 20/12/2016
 * Time: 16:10
 */

class SessionModel{


    function GetSession($con){

        $req = "SELECT login_user, password_user fROM USERS where id_user=1;";

        $result = mysqli_query($con,$req);
        return $result;
    }
}