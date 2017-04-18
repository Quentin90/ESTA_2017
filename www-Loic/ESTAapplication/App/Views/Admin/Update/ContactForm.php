<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Contact</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


                <form method="post" action="../../../App/Controller/Admin/UpdateContact.php">
                    <input hidden name="id" value="<?= $value['id_contact']; ?>">
                    <tr>
                        <td>
                        <label> Nom contact : </label>
                        <input id="nom_contact" name="nom_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['nom_contact']); ?>">
                        <sub id="message_nom_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Prénom contact : </label>
                        <input id="prenom_contact" name="prenom_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['prenom_contact']); ?>">
                        <sub id="message_prenom_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Date de mise à jour : </label>
                        <input id="date_maj" name="date_maj" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['date_maj_contact']); ?>">
                        <sub id="message_date_maj"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Genre du contact : </label>
                        <select id="genre_contact" name="genre_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['genre_contact']); ?>">
                            <option> - </option>
                            <option> Madame </option>
                            <option> Monsieur </option>
                        </select>
                        <sub id="message_genre_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Fonction contact : </label>
                        <input id="fonction_contact" name="fonction_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['fonction_contact']); ?>">
                        <sub id="message_fonction_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Portable contact : </label>
                        <input id="protable_contact" name="protable_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['portable_contact']); ?>">
                        <sub id="message_portable_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Mail contact : </label>
                        <input id="mail_contact" name="mail_contact" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['mail_contact']); ?>">
                        <sub id="message_mail_contact"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Observation : </label>
                        <input id="observations" name="observations" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['observation_contact']); ?>">
                        <sub id="message_observations"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom de l'établissement: </label>
                        <input id="nom_etablissement" name="nom_etablissement" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['nom_etablissement_contact']); ?>">
                        <sub id="message_nom_etablissement"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Travail dans l'entreprise : </label>
                        <input id="nom_entreprise" name="nom_entreprise" onblur="VerifierChamps_Contacts()" value="<?= utf8_encode($value['nom_entreprise_contact']); ?>">
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