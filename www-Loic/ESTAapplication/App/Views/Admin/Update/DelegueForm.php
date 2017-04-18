<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Delegue</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateDelegue.php">
                    <input hidden name="id" value="<?= $value['id_delegue']; ?>">
                    <tr>
                        <td>
                        <label> Nom délégué : </label>
                        <input id="nom_delegue" name="nom_delegue" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['nom_delegue']); ?>">
                        <sub id="message_nom_delegue"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Année délégué : </label>
                        <input id="annee_delegue" name="annee_delegue" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['annee_delegue']); ?>">
                        <sub id="message_annee_delegue"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Semestres Délégué : </label>
                        <input id="semestres" name="semestres" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['semestre_delegue']); ?>">
                        <sub id="message_semestres"></sub>
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