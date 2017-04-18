<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Professeur</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


        <form method="post" action="../../../App/Controller/Admin/UpdateProfesseur.php">
            <input hidden name="id" value="<?= $value['id_professeur']; ?>">
            <tr><td>
                <label> Nom du professeur : </label>
                <input id="nom_professeur" name="nom_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['nom_professeur']); ?>">
                <sub id="message_nom_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Prénom du professeur : </label>
                <input id="prenom_professeur" name="prenom_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['prenom_professeur']); ?>">
                <sub id="message_prenom_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Date de naissance du professeur : </label>
                <input id="date_naissance_professeur" name="date_naissance_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['date_naissance_professeur']); ?>">
                <sub id="message_date_naissance_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Matière enseigner : </label>
                <input id="matiere_enseigner" name="matiere_enseigner" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['nom_matiere_enseigner_professeur']); ?>">
                <sub id="message_matiere_enseigner"></sub>
                </td>
            </tr><tr><td>
                <label> Pole d'enseignement : </label>
                <select id="pole_enseignement" name="pole_enseignement" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['nom_pole_enseignement_professeur']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $poleEnseignement = $model->getPoleEnseignement($con);
                    while ($row = $poleEnseignement->fetch_assoc()) {
                        echo '<option>' .$row['nom_pole_enseignement']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_pole_enseignement"></sub>
                </td>
            </tr><tr><td>
                <label> Adresse du professeur : </label>
                <input id="adresse_professeur" name="adresse_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['adresse_professeur']); ?>">
                <sub id="message_adresse_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Code postal du professeur : </label>
                <input id="code_postal_professeur" name="code_postal_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['code_postal_professeur']); ?>">
                <sub id="message_code_postal_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Ville du professeur : </label>
                <input id="ville_professeur" name="ville_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['ville_professeur']); ?>">
                <sub id="message_ville_professeur"></sub>
                </td>
            </tr><tr><td>
                <label > Téléphone professionnel du professeur : </label>
                <input id="telephone_professionnel" name="telephone_professionnel" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['telephone_professionnel_professeur']); ?>">
                <sub id="message_telephone_professionnel"></sub>
                </td>
            </tr><tr><td>
                <label> Portable du professeur : </label>
                <input id="portable_professeur" name="portable_professeur" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['portable_professeur']); ?>">
                <sub id="message_portable_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Téléphone personnel du professeur : </label>
                <input id="telephone_personnel" name="telephone_personnel" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['telephone_personnel_professeur']); ?>">
                <sub id="message_telephone_personnel"></sub>
                </td>
            </tr><tr><td>
                <label> Mail du professeur : </label>
                <input id="mail_professeur" name="mail_professeur" value="<?= utf8_encode($value['mail_professeur']); ?>">
                <sub id="message_mail_professeur"></sub>
                </td>
            </tr><tr><td>
                <label> Nom d'établissement d'enseignement principale : </label onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['nom_etablissement_professeur']); ?>">
                <input id="nom_etablissement" name="nom_etablissement">
                <sub id="message_nom_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Nom de l'entreprise de l'intervenant : </label>
                <input id="nom_entreprise"  name="nom_entreprise" onblur="VerifierChamps_Professeur()" value="<?= utf8_encode($value['nom_entreprise_professeur']); ?>">
                <sub id="message_nom_entreprise"></sub>
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