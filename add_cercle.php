<h1>Données du formulaire</h1>
<?php
  if (isset($_POST['nom'])) { ?>
    <p>Nom envoyé: <?php echo($_POST['nom']); ?></p>
    <p>id_ville envoyé: <?php echo($_POST['id_ville']); ?></p>
    <p>Commentaire envoyé: <?php echo($_POST['commentaire']); ?></p>

    <?php 
    
    $query = "INSERT INTO cercles (nom_cercle, id_categorie, id_ville, commentaire, creation) VALUES ('".$_POST['nom']."', 1, ".$_POST['id_ville'].", '".$_POST['commentaire']."', NOW())";

  echo($query);
    mysqli_query($mysql, $query) or die(mysqli_error($mysql));
  } 
?>

<h1>Ajouter un cercle</h1>

<form method="post" action="/index.php?action=add_cercle">
  <!-- L'action est facultative quand le formulaire est traité par le même script PHP -->

  <label for="nom">Nom</label>
  <input id="nom" name="nom" />
  <br />

  <label for="id_ville">Ville</label>
  <select id="id_ville" name="id_ville">
    <?php
      $villes = mysqli_query($mysql, "SELECT id, nom FROM villes");
      
      while ($ville = mysqli_fetch_array($villes)) { ?> 
        <option value="<?php echo($ville{'id'}); ?>"><?php echo($ville{'nom'}); ?></option>
      <?php }
    ?>
  </select>
  <br />

  <label for="commentaire">Commentaire</label>
  <textarea rows="8" cols="60" id="commentaire" name="commentaire"></textarea>
  <br />

  <input type="submit" />
</form>


