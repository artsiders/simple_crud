<?php 
	require_once "chaine.php";

	$idclient = $_GET['idclient'];

	$sql = "DELETE FROM client WHERE idclient = ?";
	$req = $pdo->prepare($sql);
	$datas = array($idclient);
	$req->execute($datas);

	header("Location:index.php");
