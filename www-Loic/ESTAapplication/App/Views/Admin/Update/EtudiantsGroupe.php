<div class="row">
    <table class="container">
        <caption>Etudiant est dans le groupe </caption>
        <thead>
        <tr><th>operation</th><th>Etudiant </th><th>Groupe</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/EtudiantGroupeForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_J_ETUDIANT_GROUPE']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_etudiant']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_groupe']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>