<?php include '../include/connexion.php';


$id = $_GET['id'];
$query = $bd->query("select * from image_details where id=' $id'");

    $data5 = $query->fetch();
$req = $bd->prepare("delete from image_details where id=' $id'");

$req->execute([$id]);

header('location: ../articledetail.php?id='.$data5['id_article']);
