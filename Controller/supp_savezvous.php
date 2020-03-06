<?php
require_once('../Model/Savez.class.php');
$savez = new Savez($_POST['img'],$_POST['titre'],$_POST['description']);
$savez->supprimer();

header("location:../listes.php?resultat=ouiSupp");
//exit();
?>