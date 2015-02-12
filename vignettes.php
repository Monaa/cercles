<?php
/**
 * Vignettes bitch
 * 
 * Ce fichier définit ue fonction vignette() qui prend les paramètres suivants
 *  - Classes CSS
 *  - ...
 */

function vignette($db, $id) {
  $res =  '<div class="vignette-cercle">';
  
  $req = $db->prepare('SELECT * FROM cercles WHERE id = :id');
  $req->execute(array( ':id' => $id ));
  
  if ($c = $req->fetch()) {
	  $res .= '<div>Nom du cercle: ' . $c['nom_cercle'] . '</div>';
  }
  
  $res .= '</div>';
  
  echo($res);
}

function vignettes_pour_cercles_par_utilisateur($db, $id_utilisateur) {
	$req = $db->prepare('SELECT 
						   id_cercle
						    
						 FROM 
						   cercles_utilisateurs
							 
						  WHERE
						    id_utilisateur = :id_utilisateur');
	
	$req->execute(array( ':id_utilisateur' => $id_utilisateur ));
	
	while( $c = $req->fetch() ) {
		vignette($db, $c['id_cercle']);
	}
}
	
	
	
?>