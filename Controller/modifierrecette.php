<?php
require_once('../Model/recettemodifier.class.php');
$about = new About($_POST['titre'],$_POST['description']);
$about->modifier();
header("location:../listesrecette.php?resultat=oui");
//exit();
?>