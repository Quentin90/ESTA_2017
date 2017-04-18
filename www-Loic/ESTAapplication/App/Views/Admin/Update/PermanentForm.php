<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Permanent</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


        <form method="post" action="../../../App/Controller/Admin/UpdatePermanent.php">
            <input hidden name="id" value="<?= $value['id_permanent']; ?>">
           <tr><td>
                <label> Nom Permanent : </label>
                <input id="nom_permanent" name="nom_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['nom_permanent']); ?>">
                <sub id="message_nom_permanent"></sub>
               </td>
           </tr><tr><td>
                <label> Prénom Permanent : </label>
                <input id="prenom_permanent" name="prenom_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['prenom_permanent']); ?>">
                <sub id="message_prenom_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Portable Permanent : </label>
                <input id="portable_permanent" name="portable_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['portable_permanent']); ?>">
                <sub id="message_portable_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Adresse Permanent : </label>
                <input id="adresse_permanent" name="adresse_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['adresse_permanent']); ?>">
                <sub id="message_adresse_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Code Postal Permanent : </label>
                <input id="code_postal_permanent" name="code_postal_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['code_postal_permanent']); ?>">
                <sub id="message_code_postal_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Ville Permanent : </label>
                <input id="ville_permanent" name="ville_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['ville_permanent']); ?>">
                <sub id="message_ville_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Mail Permanent : </label>
                <input id="mail_permanent" name="mail_permanent" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['mail_permanent']); ?>">
                <sub id="message_mail_permanent"></sub>
                </td>
            </tr><tr><td>
                <label> Nom Entreprise : </label>
                <input id="nom_entreprise"name="nom_entreprise" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['nom_entreprise_permanent']); ?>">
                <sub id="message_nom_entreprise"></sub>
                </td>
            </tr><tr><td>
                <label> Intitulé Stage : </label>
                <input  id="intitule_stage"name="intitule_stage" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['intitule_stage_permanent']); ?>">
                <sub id="message_intitule_stage"></sub>
                </td>
            </tr><tr><td>
                <label> Nom Ptofesseur : </label>
                <input id="nom_professeur" name="nom_professeur" onblur="VerifierChamps_Permanent()" value="<?= utf8_encode($value['nom_professeur_permanent']); ?>">
                <sub id="message_nom_professeur"></sub>
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