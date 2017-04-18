<div class="row">
    <table class="container">
        <caption>Baccalaureat</caption>
        <thead>
        <tr><th>operation</th><th>Annee </th><th>Nom </th><th>Mention Obtenu</th><th>Option</th><th>nombre d'étudiant</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/BaccalaureatForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_baccalaureat']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['annee_baccalaureat']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_baccalaureat']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['mention_obtenu_baccalaureat']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['option_baccalaureat']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nb_etudiants_baccalaureat']); ?>
                    </td>



                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>