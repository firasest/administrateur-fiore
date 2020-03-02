<?php
class Contact{
private $titre;
private $description;


                

function __construct($titre,$description){
$this->titre = $titre;
$this->description = $description;



}







public function modifier(){ 

    include('../includes/connect_db.php');

      
        $id=$_GET['id'];
        $r=$bdd->exec("UPDATE `quisommenous` SET `titre`='$this->titre', `description`='$this->description' WHERE id=$id");				
        
        echo'oui';
        //return TRUE;
			 }	
			 

		}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>