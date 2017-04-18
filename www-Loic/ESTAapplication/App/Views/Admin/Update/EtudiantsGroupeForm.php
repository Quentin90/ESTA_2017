<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Associe un etudiant à un groupe</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
<?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateEtudiantGroupe.php">
                    <input hidden name="id" value="<?= $value['id_J_ETUDIANT_GROUPE']; ?>">
                    <tr><td>
                        <label> Nom Etudiant : </label>
                        <input id="nom_etudiant"  name="nom_etudiant" onblur="VerifierChamps_EtudiantsGroupe()" value="<?= utf8_encode($value['nom_etudiant']); ?>">
                        <sub id="message_nom_etudiant"></sub>
                    </td>
                    </tr><tr><td>
                        <label> Groupe : </label>
                        <input id="nom_groupe"  name="nom_groupe" onblur="VerifierChamps_EtudiantsGroupe()" value="<?= utf8_encode($value['nom_groupe']); ?>">
                        <sub id="message_nom_groupe"></sub>
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
