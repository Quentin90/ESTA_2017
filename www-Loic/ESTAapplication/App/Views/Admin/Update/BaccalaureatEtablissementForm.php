<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Associe un baccalaureat avec un etablissement</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
<?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateBaccalaureatEtablissement.php">
                    <input hidden name="id" value="<?= $value['id_J_BACCALAUREAT_ETABLISSEMENT']; ?>">
                   <tr><td>
                        <label> Baccalaureat : </label>
                        <input id="nom_baccalaureat"  name="nom_baccalaureat" onblur="VerifierChamps_BaccalaureatEtablissement()" value="<?= utf8_encode($value['nom_bac']); ?>">
                        <sub id="message_nom_baccalaureat"></sub>
                       </td>
                   </tr><tr><td>
                        <label> Nom etablissement : </label>
                        <input id="nom_etablissement"  name="nom_etablissement" onblur="VerifierChamps_BaccalaureatEtablissement()" value="<?= utf8_encode($value['nom_etablissement']); ?>">
                        <sub id="message_nom_etablissement"></sub>
                        </td>
                    </tr><tr><td>

                    <button id="valider" type="submit"> Valider </button>
                        </td>
                    </tr>
                </form>


            <?php } ?>
        <?php endif; ?>

        <tbody>
    </table>
</div>
