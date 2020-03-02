<?php
require_once('../Model/savezvous.class.php');
$contact = new Contact($_POST['titre'],$_POST['description']);
$contact->ajouter();
//$contact->modifier();
header("location:../savez_vous.php?resultat=oui");
//exit();
?>