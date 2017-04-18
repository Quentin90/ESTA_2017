<div class="row">
    <table class="container">
        <caption>Etablissement</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Date Mise à jour</th><th>Chimie</th><th>Numero telephone </th><th>Mail</th>
            <th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Bac</th><th>Bac + 2</th><th>Academie</th><th>categorie</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/EtablissementDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_etablissement']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_etablissement']); ?>
                    </td><td>
                        <?=  utf8_encode($value['date_maj_etablissement']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['chimie_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['telephone_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['mail_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['adresse_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['code_postal_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['ville_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['bac_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['bacPlus2_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_academie_etablissement']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_categorie_etablissement']); ?>
                    </td>
                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>