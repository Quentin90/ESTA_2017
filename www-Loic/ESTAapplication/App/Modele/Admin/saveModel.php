<?php
/**
 * Created by PhpStorm.
 * User: oternaud
 * Date: 13/04/17
 * Time: 09:30
 */
class saveModel
{


    function save_d($con, $s)
    {
        $req = "INSERT INTO Historique(ligne) VALUES ('" . $s . "')";
        $result = mysqli_query($con, $req);
    }
}
