<?php

class BaseDonnee
{
   private $nomdb;

public  function __construct($nomdbdonne) 
{
    $this->setNomdb($nomdbdonne);
}

public function setNomdb(PDO $nomdbajoute)
{
$this->nomdb=$nomdbajoute;
}

public function Insertion(Utilisateur $utilisateurdonne)
{
    $sql=$this->nomdb->prepare('INSERT INTO utilisateurs set  prenom= :prenom, nom= :nom, email= :email, telephone= :telephone,motpass= :motpass');
    $sql->bindValue(':prenom', $utilisateurdonne->getPrenom());
    $sql->bindValue(':nom', $utilisateurdonne->getNom());
    $sql->bindValue(':email', $utilisateurdonne->getEmail());
    $sql->bindValue(':telephone', $utilisateurdonne->getTelephone());
    $sql->bindValue(':motpass', $utilisateurdonne->getMotpass());
    $sql->execute();
}


public function Connecter(array $tab){
    $sql1=$this->nomdb->prepare('SELECT nom, prenom, email, motpass FROM utilisateurs WHERE email= :email AND motpass= :motpass');
    $sql1->bindValue(':email', $tab[0]);
    $sql1->bindValue('motpass', $tab[1]);
    $sql1->execute();
    
    if($sql1->rowCount()>0){
        // echo "connexion reussie";
        $result = $sql1->fetch();
        echo '<header class="titre">';
        echo "<h2>Bienvenue " .$result['prenom']." ". $result['nom']." dans la plateforme E-taxibokko</h2>";
        echo '</header>';
        echo '<h1>liste des clients inscrits </h1>';
        self::AfficherClient();
    
        echo'<style>
        .titre{
            background-color:green;
            text-align:center;
        }
        
        
        
        </style>';
    }else {
        echo "echec";
    }
}

public  function AfficherClient(){
    $sql2=$this->nomdb->prepare('SELECT * FROM utilisateurs');
    $sql2->execute();
    $resultat=$sql2->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultat as $resultats){
        
        echo '<div class="resultat"><table><tr>';
        echo '<td>'. $resultats['nom']."</td>";
        echo '<td>'. $resultats['prenom']."</td>";
        echo "</tr></table></div>";
    }


}
}




?>






