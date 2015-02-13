<div id="mon_compte">
</div>

<h1>Mon compte</h1>



<?php

         if (isset($_SESSION['id_utilisateur'])) 
 
  $req = $db->prepare ('SELECT  pseudo, nom, prenom, genre, id_ville, date_de_naissance, email, mdp FROM cercles.utilisateurs WHERE id = :id');

  $req->execute(array(':id' => $_SESSION['id_utilisateur']));	

         $u = $req->fetch();
		
    
			  echo '<p>' . $u['pseudo'] .'</p>'; 
			  echo '<p>' . $u['nom'] .'</p>';
			  echo '<p>' . $u['prenom'] .'</p>';
			  echo '<p>' . $u['genre'] .'</p>';
			  echo '<p>' . $u['id_ville'] .'</p>';
			  echo '<p>' . $u['date_de_naissance'] .'</p>';
			  echo '<p>' . $u['email'] .'</p>';
			  echo '<p>' . $u['mdp'] .'</p>';
			  //echo var_dump($_SESSION); pour dumper une variable et voir ce qu'il y a dans la variable
?> 
