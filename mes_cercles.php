<div id="cercle">

<ul>
<?php
  $id_utilisateur = 2;
  $req = "SELECT 
            cu.id_utilisateur,
            c.id AS id_cercle,
            c.nom_cercle,
            cat.nom

          FROM 
            cercles_utilisateurs cu
	        INNER JOIN cercles c ON cu.id_cercle = c.id  
			INNER JOIN categories cat ON cat.id = c.id_categorie
		
		  WHERE
		    cu.id_utilisateur = ".$id_utilisateur;
	
    $res = mysqli_query($mysql, $req);
    
	while ($c = mysqli_fetch_array($res)) {
		echo("<li>".$c{'nom_cercle'}."</li>");
	}
?>
 </ul>


</div> 
