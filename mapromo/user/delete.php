<?php include '../include/connexion.php';


$id = $_GET['id'];
$query = $bd->query("select * from image_details where id_article=' $id'");

    $data4 = $query->fetch();
$req = $bd->prepare("delete from image_details where id_article=' $id'");

$req->execute([$id]);

$query2 = $bd->query("select * from article where idArticle=' $id'");

    $data5 = $query2->fetch();
$req2 = $bd->prepare("delete from article where idArticle=' $id'");

$req2->execute([$id]);

header('location: ../categorie.php?id='.$data5['idCategorie']);
