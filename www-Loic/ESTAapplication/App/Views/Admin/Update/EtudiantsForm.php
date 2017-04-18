<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Etudiants</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

        <form method="post" action="../../../App/Controller/Admin/UpdateEtudiant.php">
            <input hidden name="id" value="<?= $value['id_etudiant']; ?>">
            <tr>
                <td>
                <label> Nom de l'étudiant : </label>
                <input id="nom_etudiant" name="nom_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_etudiant']); ?>">
                <sub id="message_nom_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Prénom de l'étudiant : </label>
                <input id="prenom_etudiant" name="prenom_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['prenom_etudiant']); ?>">
                <sub id="message_prenom_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Semestre : </label>
                <select id="semestre" name="semestre" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_semestre_etudiant']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $semestre = $model->getSemestre($con);
                    while ($row = $semestre->fetch_assoc()) {
                        echo '<option>' .$row['nom_semestre']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_semestre"></sub>
                </td>
            </tr><tr><td>
                <label> Est redoublant : </label>
                <select id="redoublant" name="redoublant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['redoublant_etudiant']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_redoublant"></sub>
                </td>
            </tr><tr><td>
                <label> Semestre à l'étranger : </label>
                <input id="semestre_etranger" name="semestre_etranger" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['semestre_etranger_etudiant']); ?>">
                <sub id="message_semestre_etranger"></sub>
                </td>
            </tr><tr><td>
                <label> A Obtenu un BAC + 2 : </label>
                <select id="bacPlus2_obtenu" name="bacPlus2_obtenu" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_bacplus2_etudiant']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $bacPlus2 = $model->getBacPlus2($con);
                    while ($row = $bacPlus2->fetch_assoc()) {
                        echo '<option>' .$row['nom_bacplus2']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_bacPlus2_obtenu"></sub>
                </td>
            </tr><tr><td>
                <label> A Obtenu le BAC : </label>
                <select id="bac_obtenu" name="bac_obtenu" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_bac_etudiant']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $bac = $model->getBac($con);
                    while ($row = $bac->fetch_assoc()) {
                        echo '<option>' .$row['nom_baccalaureat']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_bac_obtenu"></sub>
                </td>
            </tr><tr><td>
                <label> Date d'entrée à l'ESTA : </label>
                <input id="date_entree_ESTA" name="date_entree_ESTA" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['date_entree_ESTA_etudiant']); ?>">
                <sub id="message_date_entree_ESTA"></sub>
                </td>
            </tr><tr><td>
                <label> Score Toeïc : </label>
                <input id="score_toeic" name="score_toeic" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['score_Toeic_etudiant']); ?>">
                <sub id="message_score_toeic"></sub>
                </td>
            </tr><tr><td>
                <label> Score Widaf : </label>
                <input id="score_widaf" name="score_widaf" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['score_Widaf_etudiant']); ?>">
                <sub id="message_score_widaf"></sub>
                </td>
            </tr><tr><td>
                <label> Score Elyte : </label>
                <input id="score_elyte" name="score_elyte" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['score_Elyte_etudiant']); ?>">
                <sub id="message_score_elyte"></sub>
                </td>
            </tr><tr><td>
                <label> Boursier : </label>
                <select id="boursier" name="boursier" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['boursier_etudiant']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_boursier"></sub>
                </td>
            </tr><tr><td>
                <label> Portable de l'étudiant : </label>
                <input id="portable_etudiant" name="portable_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['portable_etudiant']); ?>">
                <sub id="message_portable_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Mail de l'étudiant : </label>
                <input id="mail_etudiant" name="mail_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['mail_etudiant']); ?>">
                <sub id="message_mail_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Date de naissance de l'étudiant : </label>
                <input id="date_naissance_etudiant" name="date_naissance_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['date_naissance_etudiant']); ?>">
                <sub id="message_date_naissance_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Lieu de naissance de l'étudiant : </label>
                <input id="lieu_naissance_etudiant" name="lieu_naissance_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['lieu_naissance_etudiant']); ?>">
                <sub id="message_lieu_naissance_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Département de naissance de l'étudiant : </label>
                <input id="departement_naissance_etudiant" name="departement_naissance_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['departement_naissance_etudiant']); ?>">
                <sub id="message_departement_naissance_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Nom du pays de naissance de l'étudiant : </label>
                <input id="pays_naissance_etudiant" name="pays_naissance_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_pays_naissance_etudiant']); ?>">
                <sub id="message_pays_naissance_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Nom du précédent établissement de l'Etudiant : </label>
                <input id="nom_etablissement" name="nom_etablissement" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_etablissement_etudiant']); ?>">
                <sub id="message_nom_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Sexe de létudiant : </label>
                <select id="sexe_etudiant" name="sexe_etudiant" onblur="VerifierChamps_Etudiant()"> value="<?= utf8_encode($value['sexe_etudiant']); ?>"
                    <option> - </option>
                    <option> Masculin </option>
                    <option> Féminin </option>
                </select>
                <sub id="message_sexe_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Nationalité de l'étudiant : </label>
                <input id="nationalite_etudiant" name="nationalite_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nationalite_etudiant']); ?>">
                <sub id="message_nationalite_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Numéro de sécurité sociale étudiant : </label>
                <input id="securite_sociale" name="securite_sociale" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['numero_secu_etudiant']); ?>">
                <sub id="message_securite_sociale"></sub>
                </td>
            </tr><tr><td>
                <label> Numéro de BEA ou INE : </label>
                <input id="numero_BEA" name="numero_BEA" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['numero_BEA_INE_etudiant']); ?>">
                <sub id="message_numero_BEA"></sub>
                <br>
                <label> Adresse de l'étudiant : </label>
                <input id="adresse_etudiant" name="adresse_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['adresse_etudiant']); ?>">
                <sub id="message_adresse_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Code postal de l'étudiant : </label>
                <input id="code_postal_etudiant" name="code_postal_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['code_postal_etudiant']); ?>">
                <sub id="message_code_postal_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Ville de l'étudiant : </label>
                <input id="ville_etudiant" name="ville_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['ville_etudiant']); ?>">
                <sub id="message_ville_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Pays de l'étudiant : </label>
                <input id="pays_etudiant" name="pays_etudiant" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_pays_residence_etudiant']); ?>">
                <sub id="message_pays_etudiant"></sub>
                </td>
            </tr><tr><td>
                <label> Nom des parents : </label>
                <input id="nom_parents" name="nom_parents" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['nom_parents_etudiant']); ?>">
                <sub id="message_nom_parents"></sub>
                </td>
            </tr><tr><td>
                <label> Envoi du bulletin : </label>
                <select id="envoi_bulletin" name="envoi_bulletin" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['envoi_bulletin_etudiant']); ?>">
                    <option> - </option>
                    <option> Etudiant </option>
                    <option> Parents </option>
                </select>
                <sub id="message_envoi_bulletin"></sub>
                </td>
            </tr><tr><td>
                <label> En stage </label>
                <select id="stage" name="stage" onblur="VerifierChamps_Etudiant()" value="<?= utf8_encode($value['en_stage_etudiant']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_stage"></sub>
                </td>
            </tr><tr><td>
            <button id="valider" type="submit"> Valider </button>
                </td>
            </tr>
        </form>


            <?php } ?>
        <?php endif; ?>

        <tbody>
    </table>
</div>