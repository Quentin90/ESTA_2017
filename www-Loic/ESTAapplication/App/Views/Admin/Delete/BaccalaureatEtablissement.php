<div class="row">
    <table class="container">
        <caption>Baccalauréat dans l'établissement </caption>
        <thead>
        <tr><th>operation</th><th>Baccalauréat </th><th>Etablissement</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/BaccalaureatEtablissementDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_J_BACCALAUREAT_ETABLISSEMENT']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_etablissement']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_bac']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>