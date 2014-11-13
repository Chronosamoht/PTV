<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8" />
	</head>
<body>
	<section>
	<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'projet', 'tejorp');
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
		echo "<p>Votre inscription a bien été prise en compte, ".$_POST['pseudo']." =D";
		$req=$bdd->prepare("INSERT INTO `comptes` (`id`, `email`, `pseudo`, `motdepasse`, `nom`, `prenom`, `adresse`) VALUES (:id, :email, :pseudo, :mdp, :nom, :prenom, :adresse)");
		
		$reponse = $bdd->query('SELECT count(*) FROM `comptes`');
		$donnees = $reponse->fetch();
		$id = $donnees['count(*)']+1;
		
		$conversion = array(
			"id" => $id,
			"email" => $_POST ["pseudo"],
			"pseudo" => $_POST ["email"],
			"mdp" => $_POST ["passe"],
			"nom" => $_POST ["nom"],
			"prenom" => $_POST ["prenom"],
			"adresse" => $_POST ["adresse"]
		);
		
		$req->execute($conversion);
	?>
	</section>        
</body>
</html>