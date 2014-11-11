<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
    </head>
    
    <body>
<section>
<?php

$bdd = new PDO("mysql:host=localhost;dbname=projet","projet", "tejorp");

$req = $bdd->prepare("INSERT INTO `compte` (`email`, `pseudo`, `motdepasse`, `nom`, `prenom`, `adresse`) VALUES(:email, :pseudo, :motdepasse, :nom, :prenom, :adresse)");

$conv = array('email'=>$_POST["email"],
            'pseudo'=>$_POST["pseudo"],
            'motdepasse'=>$_POST["passe"],
            'nom'=>$_POST["nom"],
            'prenom'=>$_POST["prenom"],
            'adresse'=>$_POST["adresse"]
            );

$req->execute($conv);

echo "<p>Votre inscription a bien été prise en compte, ".$_POST['pseudo'];

foreach($_POST as $key => $value) {
    echo "<li>paramètre <strong>$key</strong> de valeur <strong>$value</strong> ";
    
}

?>
</section>        
    </body>
</html>


