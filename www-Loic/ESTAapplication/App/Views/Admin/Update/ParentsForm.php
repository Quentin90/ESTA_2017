<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Parents</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php var_dump($data); ?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateParent.php">
                    <input hidden name="id" value="<?= $value['id_parents']; ?>">
                    <tr><td>
                        <label> Nom des parents : </label>
                        <input id="nom_parents" name="nom_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['nom_parents']); ?>">
                        <sub id="message_nom_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Prénom des parents : </label>
                        <input id="prenom_parents" name="prenom_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['prenom_parents']); ?>">
                        <sub id="message_prenom_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Genre parents : </label>
                        <select id="genre_parents" name="genre_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['genre_parents']); ?>">
                            <option> - </option>
                            <option> Madame Monsieur </option>
                            <option> Monsieur </option>
                            <option> Madame </option>
                        </select>
                        <sub id="message_genre_parents" ></sub>
                        </td>
                    </tr><tr><td>
                        <label> Adresse des parents : </label>
                        <input id="adresse_parents" name="adresse_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['adresse_parents']); ?>">
                        <sub id="message_adresse_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Code postal des parents : </label>
                        <input id="code_postal_parents" name="code_postal_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['code_postal_parents']); ?>">
                        <sub id="message_code_postal_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Ville des parents : </label>
                        <input id="ville_parents" name="ville_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['ville_parents']); ?>">
                        <sub id="message_ville_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Pays des parents : </label>
                        <input id="pays_parents" name="pays_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['nom_pays_parents']); ?>">
                        <sub id="message_pays_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Téléphone fixe des parents : </label>
                        <input id="telephone_parents" name="telephone_parents" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['telephone_fix_parents']); ?>">
                        <sub id="message_telephone_parents"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Portable de la mère : </label>
                        <input id="portable_mere" name="portable_mere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['portable_mere']); ?>">
                        <sub id="message_portable_mere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Profession de la mère : </label>
                        <input id="profession_mere" name="profession_mere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['profession_mere']); ?>">
                        <sub id="message_profession_mere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Entreprise de la mère : </label>
                        <input id="entreprise_mere" name="entreprise_mere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['entreprise_mere']); ?>">
                        <sub id="message_entreprise_mere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Portable du père : </label>
                        <input id="portable_pere" name="portable_pere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['portable_pere']); ?>">
                        <sub id="message_protable_pere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Profession du père : </label>
                        <input id="profession_pere" name="profession_pere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['profession_pere']); ?>">
                        <sub id="message_profession_pere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Entreprise du père : </label>
                        <input id="entreprise_pere" name="entreprise_pere" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['entreprise_pere']); ?>">
                        <sub id="message_entreprise_pere"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Diplômé : </label>
                        <select id="diplome" name="diplome" onblur="VerifierChamps_Parents()" value="<?= utf8_encode($value['diplome_parents']); ?>">
                            <option value="0"> - </option>
                            <option> La mère </option>
                            <option> Le père </option>
                            <option> Les deux </option>
                        </select>
                        <sub id="message_diplome"></sub>
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