<?php
class Contact{
 
  private $adresse;
  private $email;
  private $tel;
  private $fax;


                

function __construct($adresse,$email,$tel,$fax){
 
$this->adresse = $adresse;
$this->email = addslashes($email);
$this->tel = addslashes($tel);
$this->fax = addslashes($fax);



}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `contact_cord`( `adresse`, `email`,`tel`, `fax`) VALUES ('$this->adresse','$this->email','$this->tel','$this->fax')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `contact_cord` SET  `adresse`='$this->adresse',`email`='$this->email',`tel`='$this->tel',`fax`='$this->fax' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact_cord WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>