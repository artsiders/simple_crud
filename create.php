<?php 
	require_once "chaine.php";

	$nom = $_POST['nom'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO client SET nom = ?, telephone = ?, email = ?";
	$req = $pdo->prepare($sql);
	$datas = array($nom, $telephone, $email);
	$req->execute($datas);

	header("Location:index.php");
