<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>add</title>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-cerulean.min.css" />
</head>
<body>
<div class="col-md-5" style="margin-top: 50px">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'ajout des Medecins</div>
        <div class="panel-body">
            <form method="post" action="<?php echo site_url();?>/Medecin/add">
                <div class="form-group">
                    <label class="control-label">Nom du Medecin</label>
                    <input class="form-control" type="text" name="nomM" />
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom  du Medecin</label>
                    <input class="form-control" type="text" name="prenomM" />
                </div>
                <div class="form-group">
                    <label class="control-label">Specialite  du Medecin</label>
                    <input class="form-control" type="text" name="specialite" />
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" id="valider" value="Valider" />
                    <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>