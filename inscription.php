<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>prénom envoyé: <?php echo($_POST['prenom']); ?></p>
    <p>e-mail envoyé: <?php echo($_POST['email']); ?></p>
    <p>mot de passe envoyé: <?php echo($_POST['mdp']); ?></p>
    
    <?php 
    try { 
      $pass_hache = sha1 ($_POST['mdp']);
	
      $req = $db->prepare ('INSERT INTO utilisateurs (nom, prenom, email, mdp, creation) VALUES (:nom, :prenom, :email, :mdp, NOW())');

      $req->execute (array(		
        ':nom'    => $_POST['nom'] ,
        ':prenom' => $_POST['prenom'] ,
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
      <label for="nom">Nom</label>
      <input id="nom" name="nom" />
      <br />
      <br />
      <label for="prenom">Prénom</label>
      <input id="prenom" name="prenom" />
      <br />
      <br />
      <label for="email">e-mail</label> 
      <input id="email" name="email" />
      <br />
      <br />
      <label for="password">Mot de passe</label> 
      <input type="password" name="mdp" />
      <input id="mdp" name="mdp" label="Mot de passe" />  
      <br />
      <br />
      <label for="cmdp">Confirmation du mot de passe</label>
      <input id="cmdp" name="cmdp" />
      <br />
      <br />

      <input type="submit" />
   	  </p>

</form>

