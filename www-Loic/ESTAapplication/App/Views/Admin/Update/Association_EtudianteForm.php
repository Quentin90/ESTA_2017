<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
<table>
    <caption>Association Etudiante</caption>
    <thead>

    </thead>
    <tbody>
    <?php if(isset($data)):?>
    <?php foreach ($data as $value){ ?>
            <br>
            <form method="post" action="../../../App/Controller/Admin/UpdateAssociation_Etudiante.php">
                <input hidden name="id" value="<?= $value['id_association_etudiante']; ?>">
                <tr>
                    <td>
                    <label> Nom Association : </label>
                    <input id="nom_association" name="nom_association" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_association_etudiante']); ?>">
                    <sub id="message_nom_association"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Président : </label>
                    <input id="nom_president" name="nom_president" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_president_association_etudiante']); ?>">
                    <sub id="message_nom_president"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Vice Président : </label>
                    <input id="nom_vicePresident" name="nom_vicePresident" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_vicePresident_association_etudiante']); ?>">
                    <sub id="message_nom_vicePresident"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Secretaire : </label>
                    <input id="nom_secretaire" name="nom_secretaire" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_secretaire_association_etudiante']); ?>">
                    <sub id="message_nom_secretaire"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Vice Secretaire : </label>
                    <input id="nom_viceSecretaire" name="nom_viceSecretaire" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_viceSecretaire_association_etudiante']); ?>">
                    <sub id="message_nom_viceSecretaire"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Trésorier : </label>
                    <input id="nom_tresorier" name="nom_tresorier" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_tresorier_association_etudiante']); ?>">
                    <sub id="message_nom_tresorier"></sub>
                    </td>
                </tr><tr><td>
                    <label> Nom Vice Trésorier : </label>
                    <input id="nom_viceTresorier" name="nom_viceTresorier" onblur="VerifierChamps_Association_Etudiante()" value="<?= utf8_encode($value['nom_viceTresorier_association_etudiante']); ?>">
                    <sub id="message_nom_viceTresorier"></sub>
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
