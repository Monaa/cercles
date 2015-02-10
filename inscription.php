<?php
  if (isset($_POST['pseudo'])) { ?>
    <p>Pseudo envoyé: <?php echo($_POST['pseudo']); ?></p>
    <p>e-mail envoyé: <?php echo($_POST['email']); ?></p>
    <p>mot de passe envoyé: <?php echo($_POST['mdp']); ?></p>
    
    <?php 
    try { 
	  // hachage du mot de passe
      $pass_hache = sha1 ($_POST['mdp']);
	
	  // insertion
      $req = $db->prepare ('INSERT INTO utilisateurs (pseudo, email, mdp, creation) VALUES (:pseudo, :email, :mdp, NOW())');

      $req->execute (array(		
	    ':pseudo'    => $_POST['pseudo'] ,
        ':email'  => $_POST['email'] ,
        ':mdp'    => $pass_hache
      ));

    } catch( Exception $e ){
      echo 'Erreur de requête : ', $e->getMessage();
    }  
  }
?>



<h1>Formulaire d'inscription</h1>

<form method="post" action="/index.php?action=inscription">
  				<!-- L'action est facultative quand le formulaire est traité par le même script PHP -->
    
 
      <p>
      <label for="pseudo">Pseudo</label>
      <input id="pseudo" name="pseudo" />
      <br />
      <br />
      <label for="email">e-mail</label> 
      <input id="email" name="email" />
      <br />
      <br />
      <label for="password">Mot de passe</label> 
      <input type="password" name="mdp" />

      <br />
      <br />
      <label for="cmdp">Confirmation du mot de passe</label>
      <input id="cmdp" name="cmdp" />
      <br />
      <br />

      <input type="submit" />
   	  </p>

</form>

