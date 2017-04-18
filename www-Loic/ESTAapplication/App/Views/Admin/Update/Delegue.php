<div class="row">
    <table class="container">
        <caption>Delegue</caption>
        <thead>
        <tr><th>operation</th><th> Nom </th><th> Année </th><th> Semestres </th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/DelegueForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_delegue']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_delegue']); ?>
                    </td><td>
                        <?=  utf8_encode($value['annee_delegue']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['semestre_delegue']); ?>
                    </td>
                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>

