<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Etablissement</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


        <form method="post" action="../../../App/Controller/Admin/UpdateEtablissement.php">
            <input hidden name="id" value="<?= $value['id_etablissement']; ?>">
            <tr>
                <td>
                <label> Catégorie Etablissement : </label>
                <select id="categorie_etablissement" name="categorie_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['nom_categorie_etablissement']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $categorieEtablissement = $model->getCategorieEtablissement($con);
                    while ($row = $categorieEtablissement->fetch_assoc()) {
                        echo '<option>' .$row['nom_categorie_etablissement']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_categorie_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Date de dernière mise à jour : </label>
                <input id="derniere_maj" name="derniere_maj" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['date_maj_etablissement']); ?>">
                <sub id="message_derniere_maj"></sub>
                </td>
            </tr><tr><td>
                <label> Nom de l'établissement : </label>
                <input id="nom_etablissement"  name="nom_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['nom_etablissement']); ?>">
                <sub id="message_nom_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Nom de l'Académie : </label>
                <select id="nom_academie" name="nom_academie" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['nom_academie_etablissement']); ?>">
                    <option> - </option>
                    <?php
                    $controllerConnexion = new ControllerConnexion();
                    $con = $controllerConnexion->connect();
                    $model = new ListeDeroulanteModel();
                    $academie = $model->getAcademie($con);
                    while ($row = $academie->fetch_assoc()) {
                        echo '<option>' .$row['nom_academie']. '</option>';
                    }
                    ?>
                </select>
                <sub id="message_nom_academie"></sub>
                </td>
            </tr><tr><td>
                <label> Formation chimie : </label>
                <select id="formation_chimie" name="formation_chimie" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['chimie_etablissement']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_formation_chimie" ></sub>
                </td>
            </tr><tr><td>
                <label> Téléphone de l'établissement : </label>
                <input id="telephone_etablissement" name="telephone_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['telephone_etablissement']); ?>">
                <sub id="message_telephone_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Mail de l'établissement : </label>
                <input id="mail_etablissement" name="mail_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['mail_etablissement']); ?>">
                <sub id="message_mail_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Adresse de l'établissement : </label>
                <input id="adresse_etablissement" name="adresse_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['adresse_etablissement']); ?>">
                <sub id="message_adresse_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Code postal de l'établissement : </label>
                <input id="code_postal_etablissement" name="code_postal_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['code_postal_etablissement']); ?>">
                <sub id="message_code_postal_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> Ville de l'établissement : </label>
                <input id="ville_etablissement" name="ville_etablissement" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['ville_etablissement']); ?>">
                <sub id="message_ville_etablissement"></sub>
                </td>
            </tr><tr><td>
                <label> BAC </label>
                <select id="BAC" name="BAC" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['bac_etablissement']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_BAC"></sub>
                </td>
            </tr><tr><td>
                <label> BAC + 2 </label>
                <select id="BACplus2" name="BACplus2" onblur="VerifierChamps_Etablissement()" value="<?= utf8_encode($value['bacPlus2_etablissement']); ?>">
                    <option> - </option>
                    <option> Non </option>
                    <option> Oui </option>
                </select>
                <sub id="message_BACplus2"></sub>
                </td>
            </tr><tr><td>
            <button id="valider" type="submit"> Valider </button>
                </td>
            </tr>
            <?php } ?>
        <?php endif; ?>

        <tbody>
    </table>
</div>