<?php
require_once('../Model/Contact.class.php');
$contact = new Contact($_POST['email'],$_POST['objet'],$_POST['message']);
$contact->ajouter();

header("location:../contact.php?resultat=oui");
//exit();
?>