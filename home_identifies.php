<?php include ('recherche_cercle.php'); ?>

<h2>Mes cercles </h2>
<?php include ('mes_cercles.php'); ?>

<h2>Dernière création de cercle</h2>
<?php include('vignette_derniere_creation_de_cercle.php'); ?>

<h2>Dernière  création de cercle près de chez moi</h2>
<p>[VIGNETTE CERCLE] (10 km)</p>
 
<?php vignettes_pour_cercles_par_utilisateur($db, $_SESSION['id_utilisateur']); ?>