	<?php session_start(); ?>
    
	<?php
		// hachage du mdp		
		$pass_hache = sha1 ($_POST['mdp']);
	
		//vérification des identifiants
		$req = $db->prepare ('SELECT id FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp');
		
		$req->execute(array(
			':pseudo' => $pseudo,
			':mdp' => $pass_hache
		));
		
	
	$resultat = $req->fetch();
	
	if (!$resultat)
	{
		echo 'Mauvais identifiant ou mot de passe';
	}
	else 
	{
		session_start();
		$_SESSION['id'] = $resultat ['id'];
		$_SESSION['pseudo'] = $pseudo; 
		echo 'Vous êtes connecté';
	}
  
?>

    
    
	<?php include ('recherche_cercle.php'); ?>

<h2>Mes cercles </h2>
	<?php include ('mes_cercles.php'); ?>

<h2>Dernière création de cercle</h2>
  	<?php include('vignette_derniere_creation_de_cercle.php'); ?>


<h2>Dernière  création de cercle près de chez moi</h2>
<p>[VIGNETTE CERCLE] (10 km)</p>


		 