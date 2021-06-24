<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="serveur.js"></script>
</head>
<body>
	<form onsubmit="InsertUser()">
		<div class="container spacer col-md-5 col-xs-5 col-md-offset-3 card center panel-body body-panel-body">
			<div class="form-group form-inline mr-sm-2">
				<label class="control-label">Nom :</label><input type="text" name="anarana" id="nom" class="form-control col-sm-10">
			</div>
			<div class="form-group form-inline mr-sm-2">
	            <label class="control-label">Prénom :</label><input type="text" name="fanampiny" id="prenom" class="form-control col-sm-10">
			</div>
			<div class="form-group form-inline mr-sm-2">
	            <label class="control-label">Date de naissance :</label><input type="date" name="date_naissance" id="date_naissance" class="form-control row col-sm-3">
			</div>
	        <div class="form-group form-inline mr-sm-2">
	            <label class="control-label">Lieu de naissance :</label><input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control col-sm-8">
	        </div>
			<div class="form-group form-inline mr-sm-2">
				<input type="submit" name="ajout" value="Envoyer"  class="btn btn-success">
			</div>
		</div>
	</form>		
</body>
</html>