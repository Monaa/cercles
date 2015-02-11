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
    
 
  <div class="form-group">
      <label for="pseudo">Pseudo</label>
      <input id="pseudo" name="pseudo" class="form-control" />
  </div>
  
  <div class="form-group">
      <label for="email">e-mail</label> 
      <input id="email" name="email" class="form-control"/>
  </div>

  <div class="form-group">
      <label for="mdp">Mot de passe</label> 
      <input id="mdp" type="password" name="mdp" class="form-control"/>
  </div>

  <div class="form-group">
      <label for="cmdp">Confirmation du mot de passe</label>
      <input id="cmdp" type="password" name="cmdp" class="form-control"/>
  </div>
  
  <div class="form-group">
      <input type="submit" value="S'inscrire" class="btn btn-default" />
  </div>

</form>

