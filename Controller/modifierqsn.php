<?php
require_once('../Model/qsnmodifier.class.php');
$about = new About($_POST['titre'],$_POST['description']);
$about->modifier();
header("location:../listesqsn.php?resultat=oui");
//exit();
?>