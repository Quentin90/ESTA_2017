<div class="row">
    <table class="container">
        <caption>Professeur</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Prenom </th><th>Date de Naissance </th><th>Adresse</th><th>Code Postal</th>
            <th>Ville</th><th>Téléphone professionnel</th><th>Téléphone personnel</th><th>Portable</th><th>Mail</th>
            <th>Matiere enseigner</th><th>Pôle d'enseignement</th><th>Etablissement</th><th>Entreprise</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/ProfesseurForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_professeur']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_professeur']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['date_naissance_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['adresse_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['code_postal_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['ville_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['telephone_professionnel_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['telephone_personnel_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['portable_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['mail_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_matiere_enseigner_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_pole_enseignement_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_etablissement_professeur']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_entreprise_professeur']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>