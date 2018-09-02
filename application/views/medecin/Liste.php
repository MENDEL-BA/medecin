<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-cerulean.min.css" />

</head>
<body>
<div class="container col-md-6" style="margin-top: 55px;">
    <div class="panel panel-warning">
        <div class="panel-heading">Liste des Medecins</div>
        <div class="panel-body">
            <table class="table table-bordered table-streeped">
                <tr>
                    <th>Identifiant</th>
                    <th>Nom Medecin </th>
                    <th>Prenom Medecin</th>
                    <th>Specialite du Medecin</th>
                    <th colspan="2">Action</th>

                </tr>
                <?php
                foreach($medecins->result() as $row) {
                    echo "<tr>
                                    <td>$row->idM</td>
                                    <td>$row->nomM</td>
                                    <td>$row->prenomM</td>
                                    <td>$row->specialite</td>";?>
                                    <td><a href="<?php echo site_url();?>/Medecin/edit?ok=<?php echo $row->idM?>">Modifier</a></td>
                                    <td><a href="<?php echo site_url();?>/Medecin/delete?ok=<?php echo $row->idM?>" >Supprimer</a></td>

                         <?php echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>