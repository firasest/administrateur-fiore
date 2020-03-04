<?php
require_once('../Model/Recette.class.php');
$recette = new Recette($_POST['img'],$_POST['titre'],$_POST['description']);
$recette->modifier();

header("location:../listesrecette.php?resultat=ouiModif");
//exit();
?>