<?php require_once "chaine.php"; ?>
<?php require_once "model.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Liste des client</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-pro-master/css/all.css">
	<link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
</head>

<body>
	<?php
	if (isset($_GET['action']) && !empty($_GET['action'])) {
		$action = $_GET['action'];
		switch ($action) {
			case 'clients':
				require_once "clients.php";
				break;
			case 'create':
				require_once "createForm.php";
				break;
			case 'update':
				require_once "updateForm.php";
				break;

			default:
				require_once "notFound.php";
				break;
		}
	} else {
		require_once "clients.php";
	}

	?>
	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>