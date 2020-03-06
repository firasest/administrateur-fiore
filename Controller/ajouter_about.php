<?php
require_once('../Model/About.class .php');
$about = new About($_POST['titre'],$_POST['description']);
$about->ajouter();

header("location:../listesqsn.php?resultat=ouiModif");
//exit();
?>