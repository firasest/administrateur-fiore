<?php

class About{

private $titre;
private $description;

                

function __construct($titre,$description){
$this->titre = $titre;
$this->description = $description;



}
public function getAttribut(){ return $this->attribut ;}


public function setAttribut($attribut){ $this->attribut = $attribut ;}



/*public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM admin WHERE login LIKE '$this->login'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO admin`(nom`, login, password, email) VALUES ('$this->nom','$this->login','$this->password','$this->email')");
		
		echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}*/

    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $r=$bdd->exec("UPDATE `recette` SET 
        `titre`='$this->titre',
        `description`='$this->description',
       
         WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}	
			



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>