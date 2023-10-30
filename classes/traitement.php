<?php
include 'class-user.php';
include 'class-bd.php';
$donnees = [];
if(isset($_POST['inscrire'])){
    $donnees = [
        "prenom"=> $_POST['prenom'],
        "nom"=> $_POST['nom'],
        "email"=> $_POST['email'],
        "telephone"=> $_POST['telephone'],
        "motpass"=>$_POST['motpass']
    ];

    $user = new Utilisateur($donnees);
    $conn= new PDO('mysql:host=localhost; dbname=covoituragepoo', 'root', '');
    $db= new BaseDonnee($conn);
    $db->Insertion($user);
    
}

$recupconn = [];
if(isset($_POST['connexion'])){
    $recupconn = array(
        $_POST['email'],
        $_POST['motpass']
    );

    
    $conn= new PDO('mysql:host=localhost; dbname=covoituragepoo', 'root', '');
    $db= new BaseDonnee($conn);
    $db->Connecter($recupconn);


}


?>