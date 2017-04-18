<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Entrées Sorties</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateEntreSortie.php">
                    <input hidden name="id" value="<?= $value['id']; ?>">
                    <tr>
                        <td>
                            <label> Nom élève : </label>
                            <input id="nom_eleve" name="nom_eleve" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['nom_eleve']); ?>">
                            <sub id="message_nom_delegue"></sub>
                        </td>
                    </tr><tr><td>
                            <label> Prénom élève :  </label>
                            <input id="prenom_eleve" name="prenom_eleve" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['prenom_eleve']); ?>">
                            <sub id="message_annee_delegue"></sub>
                        </td>
                    </tr><tr><td>
                            <label> Date Entré : </label>
                            <input id="date_entre" name="date_entre" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['date_entre']); ?>">
                            <sub id="message_semestres"></sub>
                        </td>
                    </tr><tr><td>
                            <label> Date Sortie : </label>
                            <input id="date_sortie" name="date_sortie" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['date_sortie']); ?>">
                            <sub id="message_semestres"></sub>
                        </td>
                    </tr><tr><td>
                            <label> Raison : </label>
                            <input id="Raison" name="Raison" onblur="VerifierChamps_Delegue()" value="<?= utf8_encode($value['Raison']); ?>">
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