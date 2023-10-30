<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Taxibokko</title>
    <link rel="stylesheet" href="style-inscrip.css">
</head>
<body>

<legend><span class="text"></span></legend>
    <form action="traitement.php"   method="post">
    <h2>Bienvenue</h2>
    <p>Finalisez votre inscription en renseignant les informations manquantes</p><br><br<>

    PRENOM <input type="text" name="prenom" required >   
    <label style="padding-left: 100px;"></label> <br>
  
    NOM <input type="text" name="nom" required> <br><br>
  EMAIL <input type="text" name="email" required><br> <br> <br>
  Mot de passe <input type="password" name="motpass" required> <br><br>
    TELEPHONE <input type="tel" name="telephone" required><br> <br> <br>
  


<button type="submit" name="inscrire" value="inscrire">S'inscrire</button>
</body>
</html>
</form>