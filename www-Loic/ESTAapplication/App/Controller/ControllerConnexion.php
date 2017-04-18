<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 23/11/2016
 * Time: 09:38
 */
//initialisation des variables de connexions
class ControllerConnexion{

    function connect(){
        $serveur = "localhost";
        $database = "Esta";
        $login = "root";
        $mdp = "jinn999*";

        //connexion à la base de données
        $con = mysqli_connect("$serveur","$login","$mdp","$database");
        mysqli_set_charset($con,"utf8mb4");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;
    }
}




