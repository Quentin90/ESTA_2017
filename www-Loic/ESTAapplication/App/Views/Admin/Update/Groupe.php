<div class="row">
    <table class="container">
        <caption>Etablissement</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Nombre d'étudiant</th><th>Semestre</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/GroupeForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_groupe']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_groupe']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nb_etudiants_groupe']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_semestre_groupe']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>