<h2>Trouver un cercle près de chez vous</h2>

  <input name="recherche cercle" type="search" id="recherche cercle" autocomplete="off" value="Saisir la ville, le départemet, la région, le pays" size="70">


<?php
  if (!isset($villes)) {
    $res = mysqli_query($mysql, "SELECT id, nom FROM villes.");
    $dernier_cercle = mysqli_fetch_array($res);
  }


	<a  class="btn btn-default" href="/?action=resultat_recherche_cercle">Rechercher</a>   