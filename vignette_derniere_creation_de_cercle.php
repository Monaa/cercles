<?php
  if (!isset($dernier_cercle)) {
    $res = mysqli_query($mysql, "SELECT * FROM cercles ORDER BY creation DESC LIMIT 1");
    $dernier_cercle = mysqli_fetch_array($res);
  }
?>

<div class="vignette vignette-dernier-cercle">
  <h1><?php echo($dernier_cercle{'nom_cercle'}); ?></h1>
  <p></p>
  <p><?php echo($dernier_cercle{'commentaire'}); ?></p> 
  <p>créé le <?php echo($dernier_cercle{'creation'}); ?>. </p>
</div>