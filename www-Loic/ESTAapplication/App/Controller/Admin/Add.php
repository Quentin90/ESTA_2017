<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 28/11/2016
 * Time: 10:54
 */

echo '<br><div class="formulaire"><input id="search_bar" type="text" value="rechercher sur la page"><button onclick="search2()">Rechercher</button></div><br><br>';

if ($_POST['idChoix'] == '0'){

}
else{
    $liste = explode(',',$_POST['idChoix']);
    $Table = $liste[0];
    $Operation = $liste[1];

    switch ($Operation){

        case "Ajouter" :
            switch ($Table){
                case "Association_Etudiante" :
                    include "Add/Association_Etudiante.php";
                    break;
                case "Ancien_Eleve" :
                    include "Add/Ancien_Eleve.php";
                    break;
                case "Baccalaureat" :
                    include "Add/Baccalaureat.php";
                    break;
                case "Bacplus2" :
                    include "Add/BacPlus2.php";
                    break;
                case "Contact" :
                    include "Add/Contact.php";
                    break;
                case "Delegue" :
                    include "Add/Delegue.php";
                    break;
                case "Entreprise" :
                    include "Add/Entreprise.php";
                    break;
                case "Etablissement" :
                    include "Add/Etablissement.php";
                    break;
                case "Etudiant" :
                    include "Add/Etudiant.php";
                    break;
                case "Groupe" :
                    include "Add/Groupe.php";
                    break;
                case "Parents" :
                    include "Add/Parents.php";
                    break;
                case "Permanent" :
                    include "Add/Permanent.php";
                    break;
                case "Professeur" :
                    include "Add/Professeur.php";
                    break;
                case  "Semestre" :
                    include "Add/Semestre.php";
                    break;
                case "Stage" :
                    include "Add/Stage.php";
                    break;
                case "J_SEMESTRE_PROFESSEUR" :
                    include "Add/J_SEMESTRE_PROFESSEUR.php";
                    break;
                case "J_GROUPE_PROFESSEUR" :
                    include "Add/J_GROUPE_PROFESSEUR.php";
                    break;
                case "J_BACCALAUREAT_ETABLISSEMENT" :
                    include "Add/J_BACCALAUREAT_ETABLISSEMENT.php";
                    break;
                case "J_BACPLUS2_ETABLISSEMENT" :
                    include "Add/J_BACPLUS2_ETABLISSEMENT.php";
                    break;
                case "J_ETUDIANT_GROUPE" :
                    include "Add/J_ETUDIANT_GROUPE.php";
                    break;

                default :
                    echo "Selectionner une table";
                break;
            }
            break;
        case "Modifier" :
            switch ($Table){
                case "Association_Etudiante" :
                    include "Update/Association_EtudianteShow.php";
                    break;
                case "Ancien_Eleve" :
                    include "Update/Ancien_EleveShow.php";
                    break;
                case "Baccalaureat" :
                    include "Update/Baccalaureat.php";
                    break;
                case "Bacplus2" :
                    include "Update/BacPlus2.php";
                    break;
                case "EntreSortie" :
                    include "Update/EntreSortie.php";
                    break;

                case "Contact" :
                    include "Update/Contact.php";
                    break;
                case "Delegue" :
                    include "Update/Delegue.php";
                    break;
                case "Entreprise" :
                    include "Update/Entreprise.php";
                    break;
                case "Etablissement" :
                    include "Update/Etablissement.php";
                    break;
                case "Etudiant" :
                    include "Update/Etudiants.php";
                    break;
                case "Groupe" :
                    include "Update/Groupe.php";
                    break;
                case "Parents" :
                    include "Update/Parents.php";
                    break;
                case "Permanent" :
                    include "Update/Permanent.php";
                    break;
                case "Professeur" :
                    include "Update/Professeur.php";
                    break;
                case  "Semestre" :
                    include "Update/Semestre.php";
                    break;
                case "Stage" :
                    include "Update/Stage.php";
                    break;
                case "J_ETUDIANT_GROUPE":
                    include "Update/EtudiantGroupe.php";
                    break;
                case "J_SEMESTRE_PROFESSEUR":
                    include "Update/SemestreProfesseur.php";
                    break;
                case "J_GROUPE_PROFESSEUR":
                    include "Update/GroupeProfesseur.php";
                    break;
                case "J_BACCALAUREAT_ETABLISSEMENT":
                    include "Update/BaccalaureatEtablissement.php";
                    break;
                case "J_BACPLUS2_ETABLISSEMENT":
                    include "Update/Bacplus2Etablissement.php";
                    break;
                default :
                    echo "Selectionner une table";
                    break;
            }
            break;
        case "Supprimer" :
            switch ($Table){
                case "Association_Etudiante" :
                    include "Delete/Association_Etudiante.php";
                    break;
                case "Ancien_Eleve" :
                    include "Delete/Ancien_EleveShow.php";
                    break;
                case "Baccalaureat" :
                    include "Delete/Baccalaureat.php";
                    break;
                case "Bacplus2" :
                    include "Delete/BacPlus2.php";
                    break;
                case "EntreSortie" :
                    include "Delete/EntreSortie.php";
                    break;
                case "Contact" :
                    include "Delete/Contact.php";
                    break;
                case "Delegue" :
                    include "Delete/Delegue.php";
                    break;
                case "Entreprise" :
                    include "Delete/Entreprise.php";
                    break;
                case "Etablissement" :
                    include "Delete/Etablissement.php";
                    break;
                case "Etudiant" :
                    include "Delete/Etudiant.php";
                    break;
                case "Groupe" :
                    include "Delete/Groupe.php";
                    break;
                case "Parents" :
                    include "Delete/Parents.php";
                    break;
                case "Permanent" :
                    include "Delete/Permanent.php";
                    break;
                case "Professeur" :
                    include "Delete/Professeur.php";
                    break;
                case  "Semestre" :
                    include "Delete/Semestre.php";
                    break;
                case "Stage" :
                    include "Delete/Stage.php";
                    break;
                case "J_ETUDIANT_GROUPE":
                    include "Delete/J_ETUDIANT_GROUPE.php";
                    break;
                case "J_SEMESTRE_PROFESSEUR":
                    include "Delete/J_SEMESTRE_PROFESSEUR.php";
                    break;
                case "J_GROUPE_PROFESSEUR":
                    include "Delete/J_GROUPE_PROFESSEUR.php";
                    break;
                case "J_BACCALAUREAT_ETABLISSEMENT":
                    include "Delete/J_BACCALAUREAT_ETABLISSEMENT.php";
                    break;
                case "J_BACPLUS2_ETABLISSEMENT":
                    include "Delete/J_BACPLUS2_ETABLISSEMENT.php";
                    break;
                default :
                    echo "Selectionner une table";
                    break;
            }
            break;
        default :
            echo"Selectionner une action";
            break;
    }



}