<?php
/**
 * Vignettes bitch
 * 
 * Ce fichier définit ue fonction vignette() qui prend les paramètres suivants
 *  - Classes CSS
 *  - ...
 */

function vignette($db, $id) {
  $res =  '';
  
  $req = $db->prepare('SELECT c.*, cat.url FROM cercles c INNER JOIN categories cat ON cat.id = c.id_categorie WHERE c.id = :id');
  $req->execute(array( ':id' => $id ));
  
  if ($c = $req->fetch()) {
	//  $res .= '<div>Nom du cercle: ' . $c['nom_cercle'] . '</div>';
  
	$res .= '<div class="vignette vignettes_pour_cercles_par_utilisateur">';
  	$res .= '<h1><img src="' . $c{'url'} . '"  alt=""/>' . $c{'nom_cercle'} . '</h1>';
  	$res .= '<p></p>';
	$res .= '<p>' . $c{'commentaire'} . '</p>'; 
    $res .= '<p>créé le ' . $c{'creation'} . '</p></div>';
  }
  
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
