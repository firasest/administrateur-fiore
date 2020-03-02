<?php
require_once('../Model/qsn.class.php');
$contact = new Contact($_POST['titre'],$_POST['description']);
$contact->modifier();
header("location:../qui_somme_nous.php?resultat=oui");
//exit();
?>