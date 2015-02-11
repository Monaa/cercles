
<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>id_ville envoyé: <?php echo($_POST['id_ville']); ?></p>
    <p>catégorie sélectionnée: <?php echo($_POST['nom']); ?></p>
<p>Commentaire envoyé: <?php echo($_POST['commentaire']); ?></p>

 <?php
  }
   $req = $db->prepare ('INSERT INTO cercles (nom_cercle, id_ville, id_categorie, commentaire, creation) VALUES  (:nom_cercle, :id_ville, :id_categorie, :commentaire, :creation)');

    $req->execute(array(
      ':nom_cercle' =>  	$_POST['nom'],
      ':id_ville' =>     	$_POST['id_ville'],
	  ':id_categorie' =>    $_POST['id_categorie'],
	  ':commentaire' => 	$_POST['commentaire'],
	  ':creation' => 		$_POST['creation']
    ));
	
    $resultat = $req->fetch();

?>

<h1>Créer un cercle</h1>

<form method="post" action="/index.php?action=add_cercle">
  <p><!-- L'action est facultative quand le formulaire est traité par le même script PHP -->
    
    <label for="nom">Nom</label>
  </p>
  <p>
    <input id="nom" name="nom" />
  </p>
  <p><br />
    
    <label for="id_ville">Ville<br>
    </label>
    <select id="id_ville" name="id_ville">
      <?php
      $villes = mysqli_query($mysql, "SELECT id, nom FROM villes");
      
      while ($ville = mysqli_fetch_array($villes)) { ?> 
      <option value="<?php echo($ville{'id'}); ?>"><?php echo($ville{'nom'}); ?></option>
      <?php }
    ?>
    </select>
  </p>
  
  
  
<label for "id_categorie">Catégorie</label></p> 
<select id="id_categorie" name="id_categorie">
	<?php 
	$noms = mysqli_query($mysql, "SELECT id, nom FROM cercles.categories");
	while ($nom = mysqli_fetch_array($noms)) { ?>
    <option value="<?php echo($nom{'id'}); ?>"><?php echo($nom{'nom'}); ?></option> <?php }
	?>
</select>
    
		
  
  
  
  <p><br />
    
    <label for="commentaire">Description</label></p>
  <p>
    <textarea rows="8" cols="50" id="commentaire" name="commentaire"></textarea>
  </p>
  <p>    <br />
    
    <input type="submit" />
  </p>
</form>