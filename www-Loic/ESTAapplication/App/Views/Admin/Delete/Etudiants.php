<div class="row">
    <table class="container">
        <caption> Etudiant </caption>
        <thead>
        <tr><th> Opération </th><th> Nom </th><th>Prenom </th><th>Semestre à l'étranger</th><th> Date entrée ESTA </th>
            <th>Redoublant </th><th> Score Toeïc </th><th> Score Widaf</th><th> Score Elyte </th><th> Boursier </th>
            <th> Portable </th><th> Mail </th><th> Date naissance </th><th> Lieu naissance </th>
            <th> Departement naissance </th><th> Sexe Etudiant </th><th> Numéro Securité Sociale </th> <th> Numero INE/BEA</th>
            <th>Adresse</th><th>Code Postal</th><th>Ville</th><th> Nationalité </th><th> Bulletin </th><th> En stage </th>
            <th> Semestre </th><th> Bac + 2 </th><th> Bac </th><th> Pays naissance </th><th> Pays résidence </th>
            <th> Etablissement </th><th> Parents </th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/EtudiantDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_etudiant']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_etudiant']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_etudiant']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['semestre_etranger_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_entree_ESTA_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['redoublant_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['score_Toeic_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['score_Widaf_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['score_Elyte_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['boursier_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['portable_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['mail_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_naissance_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['lieu_naissance_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['departement_naissance_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['sexe_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['numero_secu_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['numero_BEA_INE_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['adresse_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['code_postal_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['ville_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nationalite_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['envoi_bulletin_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['en_stage_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_semestre_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_bacplus2_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_bac_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_pays_naissance_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_pays_residence_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_etablissement_etudiant']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_parents_etudiant']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>