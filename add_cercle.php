
<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>id_ville envoyé: <?php echo($_POST['id_ville']); ?></p>
    <p>catégorie sélectionnée: <?php echo($_POST['nom']); ?></p>
<p>Commentaire envoyé: <?php echo($_POST['commentaire']); ?></p>

 <?php
  }
  # On teste la présence de 'nom' dans le $_POST, on aurait pu faire le même test sur tous les champs du formulaire
  # l'objectif étant ici de vérifier qu'on est dans le cadre d'une soumission de formulaire d'ajout de cercle, et pas simplement en mode affichage du formulaire
  if (isset($_POST['nom'])) {
   $req = $db->prepare ('INSERT INTO cercles (nom_cercle, id_ville, id_categorie, commentaire, creation) VALUES  (:nom_cercle, :id_ville, :id_categorie, :commentaire, NOW())');

    $req->execute(array(
      ':nom_cercle' =>  	$_POST['nom'],
      ':id_ville' =>     	$_POST['id_ville'],
	  ':id_categorie' =>    $_POST['id_categorie'],
	  ':commentaire' => 	$_POST['commentaire']
    ));

    # Il ne faut pas mettre 'fetch' après un INSERT, parce que fetch va chercher une ligne de résultats
    # pour l'objet $req, mais vu que c'est un INSERT ça ne peut pas retourner de résultats de toute facon   
    #$resultat = $req->fetch();
  }
?>

<h1>Créer un cercle</h1>
<form method="post" action="/index.php?action=add_cercle">

  <div class="form-group">   
    <label for="nom">Nom</label>
    <input id="nom" name="nom" class="form-control" maxlength="25"/>
  </div>    

  <div class="form-group">   
    <label for="id_ville">Ville</label>
    <select id="id_ville" name="id_ville" class="form-control" >
   
		 <?php
  $villes = $db->prepare('SELECT id, nom FROM villes');
  $villes->execute();
              
              while ($ville = $villes->fetch()) { 
		 ?> 
              <option value="<?php echo($ville{'id'}); ?>"><?php echo($ville{'nom'}); ?></option>
              <?php }?>
              </select>
  </div>   
  <div class="form-group">   
    <label for="id_categorie">Catégorie</label></p> 
    <select id="id_categorie" name="id_categorie" class="form-control" >
		 <?php 
              $noms = mysqli_query($mysql, "SELECT id, nom FROM cercles.categories");
              while ($nom = mysqli_fetch_array($noms)) { 
		 ?>
              <option value="<?php echo($nom{'id'}); ?>"><?php echo($nom{'nom'}); ?></option> <?php }?>
        </select>
  </div>   
  
  <div class="form-group">       
    <label for="commentaire">Description</label>
    <textarea rows="8" cols="50" id="commentaire" name="commentaire" class="form-control" maxlength="220"></textarea>
  </div>

  <div class="form-group">  
      <input type="submit" value="Créer le cercle" class="btn btn-default" />
  </div>
</form>
