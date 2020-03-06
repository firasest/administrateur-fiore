<?php
class Savez{
private $img;
private $titre;
private $description;


                

function __construct($img,$titre,$description){
$this->img = $img;
$this->titre = $titre;
$this->description = addslashes($description);




}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `savez_vous`(`img`, `titre`, `description`) VALUES ('$this->img','$this->titre','$this->description')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `savez_vous` SET  `titre`='$this->titre',`description`='$this->description' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM savez_vous WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>