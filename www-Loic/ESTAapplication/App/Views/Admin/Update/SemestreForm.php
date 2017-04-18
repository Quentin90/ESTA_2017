<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Semestre</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateSemestre.php">
                    <input hidden name="id" value="<?= $value['id_semestre']; ?>">
                    <tr><td>
                        <label> Semestre : </label>
                        <input id="semestre"  name="semestre" onblur="VerifierChamps_Semestre()" value="<?= utf8_encode($value['nom_semestre']); ?>">
                        <sub id="message_semestre"></sub>
                        </td>
                    </tr><tr><td>
                        <label> nombre d'étudiants : </label>
                        <input id="nombre_etudiant"  name="nombre_etudiant" onblur="VerifierChamps_Semestre()" value="<?= utf8_encode($value['nb_etudiants_semestre']); ?>">
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