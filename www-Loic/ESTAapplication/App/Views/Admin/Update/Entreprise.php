<div class="row">
    <table class="container">
        <caption>Entreprise</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Date Mise à jour</th><th>Site internet</th><th>Numero telephone </th><th>Adresse</th>
            <th>Code Postal</th><th>Ville</th><th>Logo</th><th>Pris stagiaire</th><th>Intersser pour stagiaire</th>
            <th>Ancien Eleve</th><th>Forum Entreprise</th><th>Date visite</th><th>Date envoi information</th><th>Commentaire envoi</th>
            <th>Type d'entreprise</th><th>Secteur Activite</th><th>Pays</th><th>Permanent</th><th>Evenements</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/EntrepriseForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_entreprise']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_entreprise']); ?>
                    </td><td>
                        <?=  utf8_encode($value['date_maj_entreprise']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['site_internet_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['numero_telephone_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['adresse_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['code_postal_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['ville_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['logo_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['pris_stagiaire_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['interesse_stagiaire_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['ancien_eleve_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['forums_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_visite_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_envoi_informtion_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['commentaires_envoi_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_type_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_secteur_activite_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_pays_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_permanent_entreprise']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_evenements_entreprise']); ?>
                    </td>
                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>