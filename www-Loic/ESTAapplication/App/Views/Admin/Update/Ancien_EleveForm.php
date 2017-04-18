<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
<table>
    <caption>Ancien Eleve</caption>
    <thead>

    </thead>
    <tbody>
    <?php if(isset($data)):?>
        <?php foreach ($data as $value){ ?>
            <form method="post" action="../../../App/Controller/Admin/UpdateAncien_Eleve.php">
                <input hidden name="id" value="<?= $value['id_ancien_eleve']; ?>">
            <tr>
                <td>
                    <label>Date de mise à jour : </label>
                    <input id="date_maj" name="date_maj" onblur="VerifierChamps_AncienEleve()" value="<?= utf8_encode($value['date_maj_ancien_eleve']); ?>">
                    <sub id="message_date_maj"></sub>
                </td>
            </tr><tr><td>
                        <label>Diplome : </label>
                    <select id="diplome" name="diplome" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['diplome_ancien_eleve']); ?>">
                        <option> - </option>
                        <option> Non </option>
                        <option> Oui </option>
                    </select>
                        <sub id="message_diplome"> </sub>
                </td>
                </tr><tr>
                <td>
                    <label>Nom de l'ancien eleve : </label>
                    <input id="nom_ancien_eleve" name="nom_ancien_eleve" onblur="VerifierChamps_AncienEleve()" value="<?= utf8_encode($value['nom_ancien_eleve']); ?>">
                    <sub id="message_nom"> </sub>
                </td>
                </tr><tr>
                <td>
                    <label>Prénom de l'ancien eleve : </label>
                    <input id="prenom_ancien_eleve" name="prenom_ancien_eleve" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['prenom_ancien_eleve']); ?>">
                    <sub id="message_prenom"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> 2A2E : </label>
                    <select id="2A2E" name="2A2E" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['2A2E_ancien_eleve']); ?>">
                        <option> - </option>
                        <option> Non </option>
                        <option> Oui </option>
                    </select>
                    <sub id="message_2A2E"></sub>
                </td>
                </tr><tr>
                <td>
                    <label>Compte linkedin : </label>
                    <input id="compte_linkedin" name="compte_linkedin" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['compte_likedin_ancien_eleve']); ?>">
                    <sub id="message_compte_linkedin"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Nom marital : </label>
                    <input id="nom_marital" name="nom_marital" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['nom_marital_ancien_eleve']); ?>">
                    <sub id="message_nom_marital"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Date de Promo bac + 4 : </label>
                    <input id="date_promo_bac4" name="date_promo_bac4" value="<?=  utf8_encode($value['date_promoBACplus4_ancien_eleve']); ?>">
                    <sub id="message_date_promo4"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Date de Promo bac + 5 : </label>
                    <input id="date_promo_bac5" name="date_promo_bac5" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['date_promoBACplus5_ancien_eleve']); ?>">
                    <sub id="message_date_promo5"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Portable de l'ancien eleve : </label>
                    <input id="portable_ancien_eleve" name="portable_ancien_eleve" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['portable_ancien_eleve']); ?>">
                    <sub id="message_portable_ancien_eleve"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Téléphone fixe de l'ancien eleve : </label>
                    <input id="telephone_fixe_ancien_eleve" name="telephone_fixe_ancien_eleve" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['telephone_fix_ancien_eleve']); ?>">
                    <sub id="message_telephone_ancien_eleve"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Mail de l'ancien eleve : </label>
                    <input id="mail_ancien_eleve" name="mail_ancien_eleve" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['mail_ancien_eleve']); ?>">
                    <sub id="message_mail_ancien_eleve"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Commentaires dernier envoi : </label>
                    <input id="commentaires" name="commentaires" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['commentaires_envoi_ancien_eleve']); ?>">
                    <sub id="message_commentaires"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Poste occupé : </label>
                    <input id="poste_occupe" name="poste_occupe" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['poste_occupe']); ?>">
                    <sub id="message_poste_occupe"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Catégorie de poste occupé : </label>
                    <select id="categorie_poste" name="categorie_poste" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['categorie_poste_occupe_ancien_eleve']); ?>">
                        <option> - </option>
                        <?php
                        $controllerConnexion = new ControllerConnexion();
                        $con = $controllerConnexion->connect();
                        $ListeDeroulanteModele = new ListeDeroulanteModel();
                        $categoriePoste = $ListeDeroulanteModele->getCategoriePoste($con);
                        while ($row = $categoriePoste->fetch_assoc()) {
                            echo '<option>' .$row['nom_categorie_poste_occupe']. '</option>';
                        }
                        ?>
                    </select>
                    <sub id="message_categorie_poste"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Salaire moyen : </label>
                    <input id="salaire_moyen" name="salaire_moyen" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['salaire_moyen_ancien_eleve']); ?>">
                    <sub id="message_salaire_moyen"></sub>
                </td>
                </tr><tr>
                <td>
                    <label> Nom de son entreprise : </label>
                    <input id="nom_entreprise"  name="nom_entreprise" onblur="VerifierChamps_AncienEleve()" value="<?=  utf8_encode($value['nom_entreprise_ancien_eleve']); ?>">
                    <sub id="message_nom_entreprise"></sub>
                </td>


            </tr>
                </tr><tr>
                    <td>
                <button id="valider" type="submit">Modifier</button>
                    </td>
                </tr><tr>
            </form>
        <?php } ?>
    <?php endif; ?>

    <tbody>
</table>
</div>
