<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>prénom envoyé: <?php echo($_POST['prenom']); ?></p>
	<p>e-mail envoyé: <?php echo($_POST['email']); ?></p>
   	<p>mot de passe envoyé: <?php echo($_POST['mdp']); ?></p>

    
<?php 
    
    $query = "INSERT INTO cercles.utilisateurs (nom, prenom, email, mdp) VALUES ('".$_POST['nom']."', ".$_POST['prenom'].", ".$_POST['email'].", ".$_POST['mdp']." NOW())";
		
  echo($query);
    mysqli_query($mysql, $query) or die(mysqli_error($mysql));
  } 
?>

    
    
    
<h1>Formulaire d'inscription</h1>

<form method="post" action="/index.php?action=inscription">
  				<!-- L'action est facultative quand le formulaire est traité par le même script PHP -->
    
 
      <p>
      <label for="nom">Nom</label>
      <input id="nom" type="nom" />
      <br />
      <br />
      <label for="prenom">Prénom</label>
      <input id="prenom" type="prenom" />
      <br />
  
  	  </p>
      <br />
      <label for="email">e-mail</label> 
      <input id="email" type="email" />
      <br />
      <br />
      <label for="mdp">Mot de passe</label>
      <input id="mdp" type="mdp" />
      <br />
      <br />
      <input type="submit" />
   	  </p>
 
</form>

