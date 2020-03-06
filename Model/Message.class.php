<?php
class Message{
private $email;
private $objet;
private $message;


                

function __construct($email,$objet,$message){
 
$this->email = $email;
$this->objet = addslashes($objet);
$this->message = addslashes($message);



}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM message_contact WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>