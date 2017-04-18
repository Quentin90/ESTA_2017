<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Bac Plus 2</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


                <form method="post" action="../../../App/Controller/Admin/UpdateBacplus2.php">
                    <input hidden name="id" value="<?= $value['id_bacplus2']; ?>">
                    <tr>
                        <td>
                        <label> Nom du BAC plus 2 : </label>
                        <input id="nom_bacPlus2" name="nom_bacPlus2" onblur="VerifierChamps_BacPlus2()" value="<?= utf8_encode($value['nom_bacplus2']); ?>">
                        <sub id="message_nom_bacPlus2"></sub>
                        </td>
                    </tr><tr><td>
                        <label> option du BAc plus 2 : </label>
                        <input id="option_bacPlus2" name="option_bacPlus2" onblur="VerifierChamps_BacPlus2()" value="<?= utf8_encode($value['option_bacplus2']); ?>">
                        <sub id="message_option_bacPlus2"></sub>
                        </td>
                    </tr><tr><td>
                        <label> annee du BAC plus 2 : </label>
                        <input id="annee_bacPlus2" name="annee_bacPlus2" onblur="VerifierChamps_BacPlus2()" value="<?= utf8_encode($value['annee_bacplus2']); ?>">
                        <sub id="message_annee_bacPlus2"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nombre d'étudiants : </label>
                        <input id="nombre_etudiants" name="nombre_etudiants" onblur="VerifierChamps_BacPlus2()" value="<?= utf8_encode($value['nb_etudiants_bacplus2']); ?>">
                        <sub id="message_nombre_etudiants"></sub>
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