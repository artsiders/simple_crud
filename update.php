<?php 
	require_once "chaine.php";

	$idclient = $_POST['idclient'];
	$nom = $_POST['nom'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];

	$sql = "UPDATE client SET nom = ?, telephone = ?, email = ? WHERE idclient = ?";
	$req = $pdo->prepare($sql);
	$datas = array($nom, $telephone, $email, $idclient);
	$req->execute($datas);

	header("Location:index.php");

?>