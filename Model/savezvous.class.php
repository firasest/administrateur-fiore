<?php
class Contact{

private $titre;
private $description;


                

function __construct($titre,$description){

$this->titre = $titre;
$this->description = ($description);



}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
		/*$req = $bdd->exec ("INSERT INTO `message_contact`(`email`, `objet`, `message`) VALUES ('$this->email','$this->objet','$this->message')");
		
		echo'oui';
                //return TRUE;*/
                
               
                
}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>