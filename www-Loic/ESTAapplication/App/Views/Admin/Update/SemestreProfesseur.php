<div class="row">
    <table class="container">
        <caption>Professeur enseigne dans le Semestre </caption>
        <thead>
        <tr><th>operation</th><th>Professeur </th><th>Semestre</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/SemestreProfesseurForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_J_SEMESTRE_PROFESSEUR']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_professeur']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_semestre']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>