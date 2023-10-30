<?php

class Utilisateur{
    private $prenom;
    private $nom;
    private $email;
    private $telephone;
    private $motpass;



 public function __construct(array $donnees) {
    $this->prenom=($donnees['prenom']);
    $this->nom=($donnees['nom']);
    $this->setEmail($donnees['email']);
    $this->telephone=($donnees['telephone']);
    $this->setMotpass($donnees['motpass']);
}




public function setEmail($emaildonne){
    if(is_string($emaildonne) && filter_var($emaildonne, FILTER_VALIDATE_EMAIL)){
        $this->email=$emaildonne;
    } else {
        echo "email invalide";
        die();
    }

}


public function setMotpass($motpassdonne){
    if(is_string($motpassdonne) && self::isValidMDP($motpassdonne)==true){
    $this->motpass=$motpassdonne;
    }else{
        echo"mot de passe invalide";
        die();
    }
    }

public function getPrenom(){
    
        return $this->prenom;
        
    }
public function getNom(){
    
    return $this->nom;
    
}
public function getEmail(){
    
    return $this->email;
    
}
public function getTelephone(){
    
    return $this->telephone;
    
}
public function getMotpass(){
    return $this->motpass;
}



// function valid_email($address) { 
// if (preg_match('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+[a-zA-Z]+$^', $address)) 
// return true; 
// else return false; 
// }


function isValidMDP($mdp)
 {
   return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $mdp)  ;
 }
}




?>