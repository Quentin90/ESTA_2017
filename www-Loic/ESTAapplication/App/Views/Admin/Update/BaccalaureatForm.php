<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Baccalaureat</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateBaccalaureat.php">
                    <input hidden name="id" value="<?= $value['id_baccalaureat']; ?>">
                    <tr>
                        <td>
                        <label> Annee obtention BAC : </label>
                        <input id="annee_obtention_BAC" name="annee_obtention_BAC" onblur="VerifierChamps_Baccalaureat()" value="<?= utf8_encode($value['annee_baccalaureat']); ?>">
                        <sub id="message_annee_obtention_BAC"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom BAC : </label>
                        <input id="nom_BAC" name="nom_BAC" onblur="VerifierChamps_Baccalaureat()" value="<?= utf8_encode($value['nom_baccalaureat']); ?>">
                        <sub id="message_nom_BAC"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Mention obtenu : </label>
                        <select id="mention_obtenu" name="mention_obtenu" onblur="VerifierChamps_Baccalaureat()" value="<?= utf8_encode($value['mention_obtenu_baccalaureat']); ?>">
                            <option> - </option>
                            <option> Passable </option>
                            <option> Assez bien </option>
                            <option> Bien </option>
                            <option> Très bien </option>
                            <option> Excelent </option>
                        </select>
                        <sub id="message_mention_obtenu"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Option BAC </label>
                        <input id="option_BAC" name="option_BAC" onblur="VerifierChamps_Baccalaureat()" value="<?= utf8_encode($value['option_baccalaureat']); ?>">
                        <sub id="message_option_BAC"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nombre d'etudiant : </label>
                        <input id="nombre_etudiant" name="nombre_etudiant" onblur="VerifierChamps_Baccalaureat()" value="<?= utf8_encode($value['nb_etudiants_baccalaureat']); ?>">
                        <sub id="message_nombre_etudiant"></sub>
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