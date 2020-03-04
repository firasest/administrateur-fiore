<?php
class Produit{
private $titre;
private $description;
private $img;
private $produit;
private $code_produit;
private $poids;
private $code_ean;
private $dlc;
private $catagorie;
private $catagorie2;


                

function __construct($titre,$description,$img,$produit,$code_produit,$poids,$code_ean,$dlc,$catagorie,$catagorie2){

$this->titre = $titre;
$this->description = addslashes($description);
$this->img = $img;
$this->produit = $produit;
$this->code_produit = $code_produit;
$this->poids = $poids;
$this->code_ean = $code_ean;
$this->dlc = $dlc;
$this->catagorie = $catagorie;
$this->catagorie2 =$catagorie2;



}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `recette`( `titre`, `description`,`img`,`produit`, `code_produit`,`poids`,
       `code_ean`,`dlc`, `catagorie`,`catagorie2`) 
      VALUES ('$this->titre','$this->description','$this->img','$this->produit','$this->code_produit','$this->poids'
      '$this->code_ean','$this->dlc','$this->catagorie','$this->catagorie2')");
      
      echo'oui';
                  //return TRUE;
  
  }


    /*public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `recette` SET  `titre`='$this->titre',`description`='$this->description' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM recette WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}*/
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>