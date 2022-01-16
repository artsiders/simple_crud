<?php
require_once "chaine.php";

function create(string $nom, string $telephone, string $email, object $pdo)
{
    $sql = "INSERT INTO client SET nom = :nom, telephone = :telephone, email = :email";
    $req = $pdo->prepare($sql);

    $req->bindParam("nom", $nom);
    $req->bindParam("telephone", $telephone);
    $req->bindParam("email", $email);
    $req->execute();
    header("Location:index.php");
}
function readAll(object $pdo)
{
    $sql = "SELECT * FROM client ORDER BY idclient DESC";
    $req = $pdo->prepare($sql);
    $req->execute();
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $clients = $req->fetchAll();

    return $clients;
}

function readSearch(object $pdo, string $search)
{
    $sql = "SELECT * FROM client 
        WHERE nom LIKE '%$search%' 
        OR email LIKE '%$search%' 
        OR telephone LIKE '%$search%' 
        ORDER BY idclient DESC";
    $req = $pdo->prepare($sql);
    $req->execute();
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $clients = $req->fetchAll();

    return $clients;
}
