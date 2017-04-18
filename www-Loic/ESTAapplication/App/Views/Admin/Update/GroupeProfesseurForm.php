<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Associe un professeur et un groupe</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
<?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateGroupeProfesseur.php">
                    <input hidden name="id" value="<?= $value['id_J_GROUPE_PROFESSEUR']; ?>">
                    <tr><td>
                        <label> Groupe : </label>
                        <input id="groupe"  name="groupe" onblur="VerifierChamps_GroupeProfesseur()" value="<?= utf8_encode($value['nom_groupe']); ?>">
                        <sub id="message_groupe"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom professeur : </label>
                        <input id="nom_professeur"  name="nom_professeur" onblur="VerifierChamps_GroupeProfesseur()" value="<?= utf8_encode($value['nom_professeur']); ?>">
                        <sub id="message_nom_professeur"></sub>
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
