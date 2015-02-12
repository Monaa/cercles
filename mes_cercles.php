<div id="cercle">

<ul>
<?php

 
  $req = $db->prepare ('
  		SELECT 
            cu.id_utilisateur,
            c.id AS id_cercle,
            c.nom_cercle,
            cat.nom

          FROM 
            cercles_utilisateurs cu
	          INNER JOIN cercles c ON cu.id_cercle = c.id  
			  INNER JOIN categories cat ON cat.id = c.id_categorie
		
		  WHERE
		    cu.id_utilisateur = :id_utilisateur');
	  	
		$req->execute(array(
		  ':id_utilisateur' => $_SESSION['id_utilisateur']	
		));
		
		while ($c = $req->fetch()) 
		{
			echo("<li>".$c{'nom_cercle'}."</li>");
		}
 
	
 // $id_utilisateur = 'cu.id_utilisateur';
    

	
?>
 </ul>


</div> 


