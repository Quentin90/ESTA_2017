<div class="row">
    <table class="container">
        <caption>Contact</caption>
        <thead>
        <tr><th>Opérations</th><th>Nom</th><th>Prenom</th><th>Date entré</th><th>Date Sortie</th><th>Raison</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>
                <tr>
                    <td>
                        <form method="post" action="../../../App/Controller/Admin/EntreSortieDelete.php" TARGET="_blank">
                            <input hidden name="id" value="<?= $value['id']; ?>">
                            <button>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <?= utf8_encode($value['nom_eleve']); ?>
                    </td><td>
                        <?=  utf8_encode($value['prenom_eleve']); ?>
                    </td>
                    <td>
                        <?= utf8_encode($value['date_entre']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['date_sortie']); ?>
                    </td>
                    <td>
                        <?=  utf8_encode($value['Raison']); ?>
                    </td>

                </tr>
            <?php } ?>
        <?php endif; ?>
        <tbody>
    </table>
</div>