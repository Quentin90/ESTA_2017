<link rel="stylesheet" href="../../../Assets/css/Add/Ancien_eleve.css"/>
<script src="../../../Assets/js/Add/Formulaire.js" type="text/javascript" LANGUAGE="JavaScript"></script>
<div id="formulaire" class="row">
    <table>
        <caption>Groupe</caption>
        <thead>

        </thead>
        <tbody>
        <?php if(isset($data)):?>
            <?php foreach ($data as $value){ ?>


                <form method="post" action="../../../App/Controller/Admin/UpdateGroupe.php">
                    <input hidden name="id" value="<?= $value['id_groupe']; ?>">
                    <tr><td>
                        <label> Nom du groupe : </label>
                        <input id="nom_groupe"  name="nom_groupe" onblur="VerifierChamps_Groupe()" value="<?= utf8_encode($value['nom_groupe']); ?>">
                        <sub id="message_nom_groupe"></sub>
                    </td>
                    </tr><tr><td>
                        <label> Nombre d'étudiant : </label>
                        <input id="nombre_etudiant" name="nombre_etudiant" onblur="VerifierChamps_Groupe()"value="<?= utf8_encode($value['nb_etudiants_groupe']); ?>">
                        <sub id="message_nombre_etudiant"></sub>
                        </td>
                    </tr><tr><td>
                        <label> Liées au semestre : </label>
                        <select id="semestre" name="semestre" onblur="VerifierChamps_Groupe()" value="<?= utf8_encode($value['nom_semestre_groupe']); ?>">
                            <option> - </option>
                            <?php
                            $controllerConnexion = new ControllerConnexion();
                            $con = $controllerConnexion->connect();
                            $model = new ListeDeroulanteModel();
                            $semestre = $model->getSemestre($con);
                            while ($row = $semestre->fetch_assoc()) {
                                echo '<option>' .$row['nom_semestre']. '</option>';
                            }
                            ?>
                        </select>
                        <sub id="message_semestre"></sub>
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