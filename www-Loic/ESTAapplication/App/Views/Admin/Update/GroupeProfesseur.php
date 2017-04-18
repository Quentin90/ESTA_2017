<div class="row">
    <table class="container">
        <caption>Professeur enseigne dans le Groupe </caption>
        <thead>
        <tr><th>operation</th><th>Professeur </th><th>Groupe</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/GroupeProfesseurForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_J_GROUPE_PROFESSEUR']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_professeur']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_groupe']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>