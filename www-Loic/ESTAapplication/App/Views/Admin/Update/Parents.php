<div class="row">
    <table class="container">
        <caption>Etablissement</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Prenom </th><th>Genre </th><th>Adresse</th><th>Code Postal</th>
            <th>Ville</th><th>Téléphone fixe</th><th>Portable mère</th><th>Portable père</th><th>Profession mère</th>
            <th>Entreprise mère</th><th>Profession père</th><th>Entreprise père</th><th>Diplômé</th><th>Pays</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/ParentsForm.php" TARGET="_blank">
                            <input type="hidden" name="id" value="<?= $value['id_parents']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_parents']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['genre_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['adresse_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['code_postal_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['ville_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['telephone_fix_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['portable_mere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['portable_pere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['profession_mere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['entreprise_mere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['profession_pere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['entreprise_pere']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['diplome_parents']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_pays_parents']); ?>
                    </td>



                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>