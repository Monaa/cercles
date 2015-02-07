<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Identifié</title>
<style type="text/css">
body,td,th {
}
</style>
</head>

<body>
<h2>Trouver un cercle dans votre ville</h2>
<p>
  <input name="recherche cercle" type="search" id="recherche cercle" autocomplete="off" value="Saisir la ville, le départemet, la région, le pays" size="70">
  <a href="résultat recherche cercle.html">
  <input type="button" name="rechercher" id="rechercher" value="Rechercher">
</a></p>
<p></p>
<h2>Mes cercles </h2>
<p>[VIGNETTE CERCLE]</p>
<p></p>
<h2>Dernière création de cercle</h2>
  	<?php include('vignette_derniere_creation_de_cercle.php'); ?>

<p></p>
<h2>Dernière  création de cercle près de chez moi</h2>
<p>[VIGNETTE CERCLE] (10 km)</p>
<p></p>
<p></p>

</body>
</html>
