<div class="row">
    <table class="container">
        <caption>Bac + 2 dans l'établissement </caption>
        <thead>
        <tr><th>operation</th><th>Bac + 2  </th><th>Etablissement</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/Bacplus2EtablissementDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_J_BACPLUS2_ETABLISSEMENT']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_bacplus2']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_etablissement']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>