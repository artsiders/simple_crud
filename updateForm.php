<?php
require_once "chaine.php";

$idclient = $_GET['idclient'];

$sql = "SELECT * FROM client WHERE idclient = ?";
$req = $pdo->prepare($sql);
$datas = array($idclient);
$req->execute($datas);
$req->setFetchMode(PDO::FETCH_OBJ);
$client = $req->fetch();


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Modifier un client</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-pro-master/css/all.css">
</head>

<body>

	<h1>MODIFIER UN CLIENT</h1>
	<hr>
	<form class="formUpdate" method="POST" action="update.php">

		<legend>INFORMATION SUR LE CLIENT</legend>

		<input type="hidden" name="idclient" id="idclient" value="<?= $client->idclient ?>" required>

		<p class="field">
			<label for="nom">
				Entrer le nom
			</label>
			<br>
			<input type="text" name="nom" id="nom" value="<?= $client->nom ?>" required>
		</p>

		<p class="field">
			<label for="telephone">
				Entrer le telephone
			</label>
			<br>
			<input type="tel" name="telephone" id="telephone" value="<?= $client->telephone ?>" required>
		</p>

		<p class="field">
			<label for="email">
				Entrer le email
			</label>
			<br>
			<input type="email" name="email" id="email" value="<?= $client->email ?>" required>
		</p>

		<p class="boutons">
			<button type="submit" class="btnadd">Modifier le client <i class="fas fa-user-edit"></i></button>
		</p>

	</form>

	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>