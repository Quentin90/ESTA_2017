<div class="row">
    <table class="container">
        <caption>Bac Plus 2</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Option </th><th>Annee</th><th>nombre d'étudiant</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/Bacplus2Form.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_bacplus2']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_bacplus2']); ?>
                    </td><td>
                        <?=  utf8_encode($value['option_bacplus2']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['annee_bacplus2']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nb_etudiants_bacplus2']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>