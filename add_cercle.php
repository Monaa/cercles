<!--
<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>id_ville envoyé: <?php echo($_POST['id_ville']); ?></p>
    <p>Commentaire envoyé: <?php echo($_POST['commentaire']); ?></p>

    <?php 
    
    $query = "INSERT INTO cercles (nom_cercle, id_categorie, id_ville, commentaire, creation) VALUES ('".$_POST['nom']."', 1, ".$_POST['id_ville'].", '".mysqli_escape_string($mysql, $_POST['commentaire'])."', NOW())";

  echo($query);
    mysqli_query($mysql, $query) or die(mysqli_error($mysql));
  } 
?>-->

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
  <p><br />
    
    <label for="commentaire">Description</label></p>
  <p>
    <textarea rows="8" cols="50" id="commentaire" name="commentaire"></textarea>
  </p>
  <p>    <br />
    
    <input type="submit" />
  </p>
</form>


