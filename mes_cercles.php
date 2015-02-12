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
		
		  VALUES
		    :id_utilisateur, :id_cercle, :nom_cercle, :cat.nom');


      $reultat = $req -> fetch (
	  	while ($c = mysqli_fetch_array($res)) 
		{
		echo("<li>".$c{':nom_cercle'}."</li>")
		}
		;)
 
	
  $id_utilisateur = 'cu.id_utilisateur';
    

	
?>
 </ul>


</div> 


