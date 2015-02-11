<?php
  if (!isset($cercle_utilisateur)) {
    $res = mysqli_query($mysql, "SELECT * FROM cercles.cercles_utilisateurs where id_utilisateur = :id_utilisateur");
    $dernier_cercle = mysqli_fetch_array($res);
  }
?>

<div class="vignette_cercle_utilisateur">
  <h1><?php echo($cercles_utilisateurs{'nom_cercle'}); ?></h1>
  <p></p>
  <p><?php echo($cercle_utilisateur{'commentaire'}); ?></p> 
  <p>créé le <?php echo($cercle_utilisateur{'creation'}); ?>. </p>
</div>

<h1> <?php echo($cercle_utilisateur_principal{'id_cercle_principal'}); ?> </h1> 
