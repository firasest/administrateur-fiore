<?php
require_once('../Model/Contact.class.php');
$contact = new Contact($_POST['adresse'],$_POST['email'],$_POST['tel'],$_POST['fax']);
$contact->modifier();

header("location:../listescoordonnee.php?resultat=ouiModif");
//exit();
?>