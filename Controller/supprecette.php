<?php
require_once('../Model/qsnsupp.class.php');
$about = new About($_POST['titre'],$_POST['description']);
$about->supprimer();
header("location:../listesqsn.php?resultat=oui");
//exit();
?>