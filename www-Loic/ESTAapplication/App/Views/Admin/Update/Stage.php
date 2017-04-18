<div class="row">
    <table class="container">
        <caption>Contact</caption>
        <thead>
        <tr><th>operation</th><th>Annee </th><th>Intitulé </th><th>Mission</th><th>Objectif </th><th>Responsablités</th>
            <th>Dates</th><th>Indemnité</th><th>Semestre</th><th>Nom Permanent</th><th>Etudiant</th><th>Contact</th>
            <th>Entreprise</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/StageForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_stage']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['annee_stage']); ?>
                    </td><td>
                        <?=  utf8_encode($value['intitule_stage']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['mission_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['objectif_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['responsabilites_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['dates_stages']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['indemnite_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_semestre_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_permanent_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_etudiant_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_contact_stage']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_entreprise_stage']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>