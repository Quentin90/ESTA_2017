<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Entreprise</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

        <form method="post" action="../../../App/Controller/Admin/UpdateEntreprise.php">
            <input hidden name="id" value="<?= $value['id_entreprise']; ?>">
            <tr>
                <td>
                <label> Date de mise à jour : </label>
                <input id="date_maj"  name="date_maj" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['date_maj_entreprise']); ?>">
                <sub id="message_date_maj"></sub>
                </td>
            </tr><tr><td>
                <label> Nom de l'entreprise : </label>
                <input id="nom_entreprise"  name="nom_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['nom_entreprise']); ?>">
                <sub id="message_nom_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Type d'entreprise : </label>
                <select id="type_entreprise"  name="type_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['nom_type_entreprise']); ?>">
                    <option> - </option>
                    <?php
                    $con = $this->__construct();
                    $ListeDeroulanteModel = new ListeDeroulanteModel();
                    $typeEntreprise = $ListeDeroulanteModel->getTypeEntreprise($con);
                    while ($row = $typeEntreprise->fetch_assoc()) {
                        echo '<option>' .$row['nom_type_entreprise']. '</option>';
                    }

                    ?>
                </select>
                <sub id="message_type_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Secteur d'activité : </label>
                <select id="secteur_activite" name="secteur_activite" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['nom_secteur_activite_entreprise']); ?>">
                    <?php
                    $con = $this->__construct();
                    $ListeDeroulanteModel = new ListeDeroulanteModel();
                    $secteurActivite = $ListeDeroulanteModel->getSecteurActivite($con);
                    while ($row = $secteurActivite->fetch_assoc()) {
                        echo '<option>' .$row['nom_secteur_activite']. '</option>';
                    }
                    ?>
                    <option> - </option>
                </select>
                <sub id="message_secteur_activite"></sub>
                </td>
            </tr><tr><td>
                <label> Site internet : </label>
                <input id="site_internet" name="site_internet" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['site_internet_entreprise']); ?>">
                <sub id="message_site_internet"></sub>
                </td>
            </tr><tr><td>
                <label> Numéro de téléphone de l'entreprise : </label>
                <input id="telephone_entreprise" name="telephone_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['numero_telephone_entreprise']); ?>">
                <sub id="message_telephone_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Adresse de l'entreprise : </label>
                <input id="adresse_entreprise" name="adresse_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['adresse_entreprise']); ?>">
                <sub id="message_adresse_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Code postal de l'entreprise : </label>
                <input id="code_postal_entreprise" name="code_postal_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['code_postal_entreprise']); ?>">
                <sub id="message_code_postal_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Ville de l'entreprise : </label>
                <input id="ville_entreprise" name="ville_entreprise" onblur="VerifierChamps_Entreprise()"  value="<?= utf8_encode($value['ville_entreprise']); ?>">
                <sub id="message_ville_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Pays de l'entreprise : </label>
                <select id="pays_entreprise" name="pays_entreprise" onblur="VerifierChamps_Entreprise()" " value="<?= utf8_encode($value['nom_pays_entreprise']); ?>">
                <option> - </option>
                    <?php
                    $con = $this->__construct();
                    $ListeDeroulanteModel = new ListeDeroulanteModel();
                    $pays = $ListeDeroulanteModel->getPays($con);
                    while ($row = $pays->fetch_assoc()) {
                        echo '<option>' .$row['nom_pays']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_pays_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Logo entreprise : </label>
                <input id="logo_entreprise" name="logo_entreprise" onblur="VerifierChamps_Entreprise()"  value="<?= utf8_encode($value['logo_entreprise']); ?>">
                <sub id="message_logo_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Nom de la personne contact à l'ESTA : </label>
                <input id="contact_ESTA" name="contact_ESTA" onblur="VerifierChamps_Entreprise()"  value="<?= utf8_encode($value['nom_permanent_entreprise']); ?>">
                <sub id="message_contact_ESTA"></sub>
                </td>
            </tr><tr><td>
                <label> A déjà pris un stagiaire : </label>
                <select id="stagiaire" name="stagiaire" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['pris_stagiaire_entreprise']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_stagiaire"></sub>
                </td>
            </tr><tr><td>
                <label> Intérésser pour prendre un stagiaire : </label>
                <select id="veut_stagiaire" name="veut_stagiaire" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['interesse_stagiaire_entreprise']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_veut_stagiaire"></sub>
                </td>
            </tr><tr><td>
                <label> A un ancien élève : </label>
                <select id="ancien_eleve" name="ancien_eleve" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['ancien_eleve_entreprise']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_ancien_eleve"></sub>
                </td>
            </tr><tr><td>
                <label> Intérésser par une journée spéciale : </label>
                <select id="journee_speciale" name="journee_speciale" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['nom_evenements_entreprise']); ?>">
                    <option> - </option>
                    <?php
                    $con = $this->__construct();
                    $ListeDeroulanteModel = new ListeDeroulanteModel();
                    $journeeSpeciale = $ListeDeroulanteModel->getJourneeSpeciale($con);
                    while ($row = $journeeSpeciale->fetch_assoc()) {
                        echo '<option>' .$row['nom_evenements']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_journee_speciale"></sub>
                </td>
            </tr><tr><td>
                <label> A déjà participer au forum entreprise : </label>
                <select id="forum_entreprise" name="forum_entreprise" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['forums_entreprise']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_forum_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Dernière Date de visite : </label>
                <input id="date_visite" name="date_visite" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['nom_evenements_entreprise']); ?>">
                <sub id="message_date_visite"></sub>
                </td>
            </tr><tr><td>
                <label> Dernière Date d'envoi d'information : </label>
                <input id="date_envoi_information" name="date_envoi_information" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['date_envoi_informtion_entreprise']); ?>">
                <sub id="message_date_envoi_information"></sub>
                </td>
            </tr><tr><td>
                <label>Commentaire sur le dernier envoi : </label>
                <input id="commentaire_envoi" name="commentaire_envoi" onblur="VerifierChamps_Entreprise()" value="<?= utf8_encode($value['commentaires_envoi_entreprise']); ?>">
                <sub id="message_commentaire_envoi"></sub>
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