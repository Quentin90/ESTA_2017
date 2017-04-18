<div class="row">
    <table class="container">
        <caption> Permanent </caption>
        <thead>
        <tr><th> Operation </th><th> Nom </th><th> Prénom </th><th> Portable </th><th> Adresse </th><th> Code postal </th>
            <th> Ville </th><th> Mail </th><th> Entreprise </th><th> Stage </th><th> Professeur </th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/PermanentDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_permanent']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_permanent']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_permanent']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['portable_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['adresse_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['code_postal_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['ville_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['mail_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_entreprise_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['intitule_stage_permanent']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_professeur_permanent']); ?>
                    </td>



                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>

