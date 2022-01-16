<?php
if (isset($_POST['search']) && !empty($_POST['search'])) {
    require_once "chaine.php";
    $search = $_POST['search'];
    $sql = "SELECT * FROM client WHERE nom LIKE '%$search%' ORDER BY idclient DESC";
    $req = $pdo->prepare($sql);
    $req->execute();

    header("Location:index.php");
}
