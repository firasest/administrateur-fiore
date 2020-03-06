<?php
require_once('../Model/Savez.class.php');
$savez = new Savez($_POST['img'],$_POST['titre'],$_POST['description']);
$savez->modifier();

header("location:../listes.php?resultat=ouiModif");
//exit();
?>