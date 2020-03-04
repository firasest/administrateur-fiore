<?php
require_once('../Model/Recette.class.php');
$message = new Message($_POST['img'],$_POST['titre'],$_POST['description']);
$message->supprimer();

header("location:../email-inbox.php?resultat=ouiSupp");
//exit();
?>