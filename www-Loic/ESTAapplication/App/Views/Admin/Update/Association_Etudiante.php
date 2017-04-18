<div class="row">
    <table class="container">
        <caption>Association Etudiante</caption>
        <thead>
        <tr><th>Operation</th><th>Nom </th><th> Nom président </th><th>Nom Vice President</th><th> Nom Secrétaire </th>
            <th>Nom Vice Secrétaire</th><th> Nom Trésorier </th><th> Nom Vice Trésorier </th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/Association_EtudianteForm.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id_association_etudiante']; ?>">
                            <button>Modifier</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_association_etudiante']); ?>
                    </td><td>
                        <?=  utf8_encode($value['nom_president_association_etudiante']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_vicePresident_association_etudiante']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_secretaire_association_etudiante']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_viceSecretaire_association_etudiante']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_tresorier_association_etudiante']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['nom_viceTresorier_association_etudiante']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>

