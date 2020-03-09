<?php
class Produit{
private $titre;
private $description;

private $produit;
private $code_produit;
private $poids;
private $code_ean;
private $dlc;
private $catagorie;
private $catagorie2;            

function __construct($titre,$description,$produit,$code_produit,$poids,$code_ean,$dlc,$catagorie,$catagorie2){

$this->titre = addslashes($titre);
$this->description = addslashes($description);

$this->produit = addslashes($produit);
$this->code_produit = addslashes($code_produit);
$this->poids = addslashes($poids);
$this->code_ean = addslashes($code_ean);
$this->dlc = addslashes($dlc);
$this->catagorie = addslashes($catagorie);
$this->catagorie2 = addslashes($catagorie2);
}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `produit`(
      `titre`,
      `description`,
      `produit`,
      `code_produit`,
      `poids`, 
      `code_ean`, 
      `dlc`,
      `catagorie`, 
      `catagorie2`) 
      VALUES (
      '$this->titre',
      '$this->description',
      '$this->produit',
      '$this->code_produit',
      '$this->poids',
      '$this->code_ean',
      '$this->dlc',
      '$this->catagorie',
      '$this->catagorie2')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `produit` SET  
    `titre`='$this->titre',
    `description`='$this->description', 
    
    `produit`='$this->produit' ,
    `code_produit`='$this->code_produit' ,
    `poids`='$this->poids' ,
    `code_ean`='$this->code_ean', 
    `dlc`='$this->dlc', 
    `catagorie`='$this->catagorie' ,
    `catagorie2`='$this->catagorie2'
    WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM produit WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>