<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>add</title>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-cerulean.min.css" />
</head>
<body>
<div class="col-md-5" style="margin-top: 50px">
    <div class="panel panel-success">
        <div class="panel-heading">Formulaire d'ajout des Patients</div>
        <div class="panel-body">
            <form method="post" action="<?php echo site_url();?>/Patient/add">
                <div class="form-group">
                    <label class="control-label">Nom du Patient</label>
                    <input class="form-control" type="text" name="nomP" />
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom  du Patient</label>
                    <input class="form-control" type="text" name="prenomP" />
                </div>
                <div class="form-group">
                    <label class="control-label">Date de Naissance du Patient </label>
                    <input class="form-control" type="date" name="date_naiss" />
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