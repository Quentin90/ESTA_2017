<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Stage</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>

                <form method="post" action="../../../App/Controller/Admin/UpdateStage.php">
                    <input hidden name="id" value="<?= $value['id_stage']; ?>">
                    <tr><td>
                        <label> Intitulé du stage : </label>
                        <input id="intitulé_stage"  name="intitulé_stage" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['intitule_stage']); ?>">
                        <sub id="message_intitulé_stage"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Année du stage : </label>
                        <input id="annee_stage"  name="annee_stage" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['annee_stage']); ?>">
                        <sub id="message_annee_stage"></sub>
                        </td>
                    </tr><tr><td>
                        <label>Mission du stage : </label>
                        <input id="mission_stage" name="mission_stage" onblur="VerifierChamps_Stage(") value="<?= utf8_encode($value['mission_stage']); ?>">
                        <sub id="message_mission_stage"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Objectif du stage : </label>
                        <input id="objectif_stage" name="objectif_stage" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['objectif_stage']); ?>">
                        <sub id="message_objectif_stage"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Responsabilités : </label>
                        <input id="responsabilites" name="responsabilites" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['responsabilites_stage']); ?>">
                        <sub id="message_responsabilites"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Dates de stage : </label>
                        <input id="dates_stage" name="dates_stage" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['dates_stages']); ?>">
                        <sub id="message_dates_stage"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Indemnité : </label>
                        <input id="indemnite" name="indemnite" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['indemnite_stage']); ?>">
                        <sub id="message_indemnite"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Stage de Semestre : </label>
                        <input id="stage_semestre" name="stage_semestre" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['nom_semestre_stage']); ?>">
                        <sub id="message_stage_semestre"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Responsable ESTA : </label>
                        <input id="responsable_ESTA" name="responsable_ESTA" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['nom_permanent_stage']); ?>">
                        <sub id="message_responsable_ESTA"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom de l'étudiant : </label>
                        <input id="nom_etudiant" name="nom_etudiant" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['nom_etudiant_stage']); ?>">
                        <sub id="message_nom_etudiant"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom du tuteur d'entreprise : </label>
                        <input id="nom_tuteur" name="nom_tuteur" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['nom_contact_stage']); ?>">
                        <sub id="message_nom_tuteur"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Nom de l'entreprise : </label>
                        <input id="nom_entreprise" name="nom_entreprise" onblur="VerifierChamps_Stage()" value="<?= utf8_encode($value['nom_entreprise_stage']); ?>">
                        <sub id="message_nom_entreprise"></sub>
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