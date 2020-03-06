<?php
require_once('../Model/Message.class.php');
$message = new Message($_POST['email'],$_POST['objet'],$_POST['message']);
$message->supprimer();

header("location:../email-inbox.php?resultat=ouiSupp");
//exit();
?>