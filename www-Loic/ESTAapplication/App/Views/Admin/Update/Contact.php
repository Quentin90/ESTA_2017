<div class="row">
    <table class="container">
        <caption>Contact</caption>
        <thead>
        <tr><th>operation</th><th>Nom </th><th>Prenom </th><th>Date Mise à jour</th><th>Genre </th><th>Fonction</th>
            <th>Portable</th><th>Mail</th><th>Observation</th><th>Nom etablissement</th><th>Nom entreprise</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/ContactForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_contact']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_contact']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_contact']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['date_maj_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['genre_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['fonction_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['portable_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['mail_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['observation_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_etablissement_contact']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_entreprise_contact']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>