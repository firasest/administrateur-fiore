<?php
require_once('../Model/Savez.class.php');
$savez = new Savez($_POST['img'],$_POST['titre'],$_POST['description']);
$savez->ajouter();

header("location:../listes.php?resultat=oui");
//exit();
?>