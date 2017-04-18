<div class="row">
    <table class="container">
        <caption>Ancien Eleve</caption>
        <thead>
        <tr><th>operation</th><th>Date Mise à Jour</th><th>Diplomé</th><th>Nom</th><th>Prenom</th><th>2A2E</th><th>Compte Likedin </th>
            <th>Nom Marital</th><th>Bac + 4</th><th> Bac + 5</th><th>portable</th><th>telephone fixe</th><th>mail</th><th>commentaires envoi</th>
            <th>poste occupé</th><th>catégorie de poste</th><th> salaire moyen</th><th> nom entreprise</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/AncienEleveDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_ancien_eleve']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['date_maj_ancien_eleve']); ?>
                    </td><td>
                        <?=  utf8_encode($value['diplome_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['prenom_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['2A2E_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['compte_likedin_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_marital_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_promoBACplus4_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_promoBACplus5_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['portable_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['telephone_fix_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['mail_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['commentaires_envoi_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['poste_occupe']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['categorie_poste_occupe_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['salaire_moyen_ancien_eleve']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_entreprise_ancien_eleve']); ?>
                    </td>


                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>