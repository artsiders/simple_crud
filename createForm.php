<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ajouter un client</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-pro-master/css/all.css">
</head>

<body>

	<h1>ENREGISTRER UN CLIENT</h1>
	<form class="createForm" method="POST" action="create.php">

		<legend>INFORMATION SUR LE CLIENT</legend>

		<p class="field">
			<label for="nom">
				Entrer le nom
			</label>
			<br>
			<input type="text" name="nom" id="nom" required>
		</p>

		<p class="field">
			<label for="telephone">
				Entrer le telephone
			</label>
			<br>
			<input type="tel" name="telephone" id="telephone" required>
		</p>

		<p class="field">
			<label for="email">
				Entrer le email
			</label>
			<br>
			<input type="email" name="email" id="email" required>
		</p>

		<p class="boutons">
			<button type="submit" class="btnadd" id="enregistrer" name="enregistrer">enregistrer <i class="fas fa-save"></i> </button>
		</p>

	</form>

	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>