<?php
require_once('../Model/Recette.class.php');
$recette = new Recette($_POST['img'],$_POST['titre'],$_POST['description']);
$recette->ajouter();

header("location:../listesrecette.php?resultat=oui");
//exit();
?>